<?php
require_once("connexion.php");
    Class Section{
        public $id;
        public $sect;
        public $idaa;
        public $iddoy;
        public $access = 1;

        //ajouter une fac
        public function setSection($sect){
        $this->sect=$sect;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO section(SECTION) VALUES(?)");
        $addline = $add->execute(array($sect)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getSections(){
        $db = getconnection();
        $all = $db->prepare("select faculte.IDFac as ID,faculte.FACULTE as FAC,aa.AA as AA,prof.NOMS as NOMS,faculte.ACCESS as ACCESS
                                from aa,faculte,prof
                                where aa.ID=faculte.IDAA
                                and faculte.IDDOYEN=prof.ID GROUP by ID DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

         public function getSection(){
        $db = getconnection();
        $all = $db->prepare("select * from section GROUP by IDSECT DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

        public function getSectionActiv(){
            $db = getconnection();
            $all = $db->prepare("select * from section WHERE ACCESS='1'");
            $all->execute();
            $tb = array();
            while($data = $all->fetchObject())
            {
                $tb[] = $data;
            }
            return $tb;
            }
  
        public function getFacId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM faculte WHERE IDFac=? LIMIT 1");
            $matP->execute(array($id));
            $res = array();
            while($data = $matP->fetchObject())
            {
                $res[] = $data;
            }
            return $res;
        }


        public function activSection($id){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE section SET ACCESS='1' where IDSECT=?");
         $ok = $sql->execute(array($id));
        return $ok;
        }

        public function deactivSection($id){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE section SET ACCESS='0' where IDSECT=?");
        $ok = $sql->execute(array($id));
        return $ok;
       }
    }

?>