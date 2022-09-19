<?php
require_once("connexion.php");
class AA
{
    public $id;
    public $aa;
    public $idaa;

    //ajouter une annee
    public function setAA($id, $aa)
    {
        $this->id = $id;
        $this->aa = $aa;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO asco(ID,AA) VALUES(?,?)");
        $addline = $add->execute(array($id, $aa)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher toutes les annees
    public function getAllAA()
    {
        $db = getConnection();
        $all = $db->prepare("SELECT * FROM `asco` ORDER BY `ID` DESC");
        $all->execute();
        $tb_alladmin = array();
        while ($data = $all->fetchObject()) {
            $tb_alladmin[] = $data;
        }
        return $tb_alladmin;
    }
    public function getAAId($idaa)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM `asco` WHERE ID=? LIMIT 1");
        $matP->execute(array($idaa));
        $res =  $matP->fetchObject();
        return $res;
    }
}
