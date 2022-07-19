<?php
require_once("connexion.php");
    Class JC{
        public $id;
        public $datedeb;
        public $datefin;
        public $motif;

        //ajouter un fa
        public function setJC($motif,$datefin,$datedeb){
        $this->datefin=$datefin;
        $this->motif=$motif;
        $this->datedeb=$datedeb;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO jc(MOTIF,DATEFIN,DATEDEB) VALUES(?,?,?)");
        $addline = $add->execute(array($motif,$datefin,$datedeb)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getJC(){
        $db = getconnection();
        $all = $db->prepare("SELECT * FROM `jc` group by IDJC DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
  
        public function getJCId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM jc WHERE IDJC=? LIMIT 1");
            $matP->execute(array($id));
            $res = array();
            while($data = $matP->fetchObject())
            {
                $res[] = $data;
            }
            return $res;
        }


    }

?>