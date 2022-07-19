<?php
require_once("connexion.php");
    Class FS{
        public $id;
        public $niv;
        public $dep;
        public $fa;
        public $montant;
        public $aa;

        //ajouter un fa
        public function setFS($montant,$classe,$as){
        $db = getconnection();
        $add = $db->prepare("INSERT INTO fs(MONTANT,IDCLA,IDAA) VALUES(?,?,?)");
        $addline = $add->execute(array($montant,$classe,$as)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getFS(){
        $db = getconnection();
        $all = $db->prepare("SELECT * from fs");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }


        //afficher toutes les fac
        public function getsFS(){
        $db = getconnection();
         $all = $db->prepare("SELECT fs.IDFS as ID,fs.MONTANT as MONTANT,options.OPT as OPT,
         section.SECTION as SECTION,asco.AS,classe.CLASSE as CLASSE
            from fs,classe,section,options,asco
            where fs.IDCLA = classe.IDCLA
            AND classe.IDOPT=options.IDOPT
           AND options.IDSECT = section.IDSECT
            and fs.IDAA=asco.ID");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
  
  
        public function getFAId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM fa WHERE ID=? LIMIT 1");
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
