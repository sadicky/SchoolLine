<?php
require_once("connexion.php");
    Class Sortie{
        public $id;
        public $con;
        public $des;
        public $dat;
        public $niv;

        //ajouter un fa
        public function setSortie($con,$des,$dat,$niv){
        $this->con=$con;
        $this->des=$des;
        $this->dat=$dat;
        $this->niv=$niv;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO sortie(CON,DES,DAT,NIV) VALUES(?,?,?,?)");
        $addline = $add->execute(array($con,$des,$dat,$niv)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getSorties(){
        $db = getconnection();
        $all = $db->prepare("select sortie.IDS as ID,departement.DEPARTEMENT as DEP,faculte.FACULTE as FAC,sortie.CON as CON,sortie.DES AS DES,niveau.NIVEAU as NIV,sortie.DAT as DAT
from niveau,departement,faculte,sortie,aa
where sortie.NIV=niveau.IDNiv
AND departement.IDFac=faculte.IDFac
AND faculte.IDAA=aa.ID
AND niveau.IDDep=departement.IDDep");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
  
        public function getSortieId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM Sortie WHERE IDS=? LIMIT 1");
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