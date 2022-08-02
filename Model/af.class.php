<?php
require_once("connexion.php");
    Class AutresF{
        public $id;
        public $aa;
        public $montant;
        public $motif;

        //ajouter un fa
        public function setAF($montant,$motif,$aa){
        $this->montant=$montant;
        $this->motif=$motif;
        $this->aa=$aa;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO af(MONTANT,MOTIF,IDAA) VALUES(?,?,?)");
        $addline = $add->execute(array($montant,$motif,$aa)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getAF(){
        $db = getconnection();
        $all = $db->prepare("SELECT * FROM `af` group by IDAF DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

        public function getAFS(){
            $db = getconnection();
            $all = $db->prepare("SELECT * FROM `af` Where IDAF='1'");
            $all->execute();
            $tb =$all->fetchObject();
            return $tb;
            }
  
        public function getAFId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM af WHERE ID=? LIMIT 1");
            $matP->execute(array($id));
            $res = array();
            while($data = $matP->fetchObject())
            {
                $res[] = $data;
            }
            return $res;
        }


       //  public function activDep($id){
       //   $db = getConnection();
       //   $sql =$db->prepare( "UPDATE departement SET ACCESS='1' where IDDep=?");
       //   $ok = $sql->execute(array($id));
       //  return $ok;
       //  }

       //  public function deactivDep($id){
       //  $db = getConnection();
       //  $sql =$db->prepare( "UPDATE departement SET ACCESS='0' where IDDep=?");
       //  $ok = $sql->execute(array($id));
       //  return $ok;
       // }
    }

?>