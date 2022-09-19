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
        public function setFS($montant,$as){
        $db = getconnection();
        $add = $db->prepare("INSERT INTO minerval(MONTANT,IDAA) VALUES(?,?)");
        $addline = $add->execute(array($montant,$as)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //ajouter un paiement
        public function setMinerval($eleve,$fs,$classe,$as,$bord,$rec,$montant,$det){
            $db = getconnection();
            $add = $db->prepare("INSERT INTO paiementmin (IDEL,IDM,IDCL,IDAS,BORD,REC,MONTANT,DETAIL) VALUES(?,?,?,?,?,?,?,?)");
            $addline = $add->execute(array($eleve,$fs,$classe,$as,$bord,$rec,$montant,$det)) or die(print_r($add->errorInfo()));
            return $addline;
            }

        //afficher toutes les fac
        public function getFS(){
        $db = getconnection();
        $all = $db->prepare("SELECT minerval.IDM AS ID, minerval.MONTANT,asco.AS
        from minerval,asco WHERE minerval.IDAA=asco.ID");
        $all->execute();
        $tb =  $all->fetchObject();
        return $tb;
        }

        
        public function getMinervalClasse($classe){
            $db = getconnection();
             $all = $db->prepare("SELECT minerval.IDM as ID,minerval.MONTANT as MONTANT,options.OPT as OPT,
             section.SECTION as SECTION,asco.AS,classe.CLASSE as CLASSE
                from minerval,classe,section,options,asco
                where minerval.IDCL = classe.IDCLA
                AND classe.IDOPT=options.IDOPT
               AND options.IDSECT = section.IDSECT
                and minerval.IDAS=asco.ID and classe.IDCL=?");
            $all->execute(array($classe));
            $data = $all->fetchObject();
            return $data;
            }
      
  
  
        public function getFAId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM minerval WHERE ID=? LIMIT 1");
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
