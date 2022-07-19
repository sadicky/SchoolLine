<?php
require_once("connexion.php");
    Class Classe{
        public $id;
        public $niv;
        public $dep;
        public $prof;

        //ajouter une fac
        public function setClasse($niv,$dep){
        $this->niv=$niv;
        $this->dep=$dep;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO classe(CLASSE,IDOPT) VALUES(?,?)");
        $addline = $add->execute(array($niv,$dep)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getNiv(){
        $db = getconnection();
        $all = $db->prepare("SELECT * FROM `niveau` group by IDNiv DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
        //afficher toutes les fac
        public function getClasses(){
        $db = getconnection();
        $all = $db->prepare("select classe.IDCLA as ID,classe.CLASSE as CLASSE, options.OPT as OPT,
        section.SECTION as SECTION,classe.ACCESS as ACCESS
          FROM classe,options,section
           WHERE classe.IDOPT=options.IDOPT
           AND options.IDSECT = section.IDSECT
           ");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
        
        //afficher toutes les fac
        public function getClasse(){
            $db = getconnection();
            $all = $db->prepare("select * from classe");
            $all->execute();
            $tb = array();
            while($data = $all->fetchObject())
            {
                $tb[] = $data;
            }
            return $tb;
            }
  
        public function getNivId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM niveau WHERE IDNiv=? LIMIT 1");
            $matP->execute(array($id));
            $res = array();
            while($data = $matP->fetchObject())
            {
                $res[] = $data;
            }
            return $res;
        }


        public function activCla($id){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE classe SET ACCESS='1' where IDCLA=?");
         $ok = $sql->execute(array($id));
        return $ok;
        }

        public function deactivCla($id){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE classe SET ACCESS='0' where IDCLA=?");
        $ok = $sql->execute(array($id));
        return $ok;
       }
    }

?>