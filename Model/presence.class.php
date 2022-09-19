<?php
require_once("connexion.php");
    Class Presence{
        //ajouter une option
        public function setPresence($idel,$idcl,$idas,$statut,$datea){
        $db = getconnection();
        $add = $db->prepare("INSERT INTO presence(IDEL,IDCL,IDAS,STATUT,DATEA) VALUES(?,?,?,?,?)");
        $addline = $add->execute(array($idel,$idcl,$idas,$statut,$datea)) or die(print_r($add->errorInfo()));
        return $addline;
        }

     }
?>