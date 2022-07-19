<?php
require_once("connexion.php");
    Class AA{
        public $id;
        public $aa;
        public $idaa;

        //ajouter une annee
        public function setAA($id,$aa){
        $this->id=$id;
        $this->aa=$aa;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO asco(ID,AA) VALUES(?,?)");
        $addline = $add->execute(array($id,$aa)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les annees
        public function getAllAA(){
        $db = getconnection();
        $all = $db->prepare("SELECT * FROM `asco` group by ID DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

       public function getAAId($idaa)
          {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM `asco` WHERE ID=? LIMIT 1");
        $matP->execute(array($idaa));
        $res = array();
        while($data = $matP->fetchObject())
        {
            $res[] = $data;
        }
        return $res;
    }
    }

?>