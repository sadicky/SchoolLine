<?php
require_once("connexion.php");
    Class Cours{
        public $id;
        public $niv;
        public $classe;
        public $cours;
        public $pond;
        public $nbh;
        public $prof;
        public $aa;

        //ajouter un cours
        public function setCours($cours,$pond,$nbh,$classe,$aa){
        $db = getconnection();
        $add = $db->prepare("INSERT INTO cours(COURS,POND,NBH,IDCLA,IDAA) VALUES(?,?,?,?,?)");
        $addline = $add->execute(array($cours,$pond,$nbh,$classe,$aa)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les fac
        public function getCours(){
        $db = getconnection();
        $all = $db->prepare("SELECT * FROM `cours` group by IDC DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

        public function getsCours(){
        $db = getconnection();
        $all = $db->prepare("SELECT cours.IDCO as ID,cours.COURS as COURS,options.OPT as OPT,
        section.SECTION as SECTION,asco.AS,classe.CLASSE as CLASSE, cours.NBH as NBH, cours.POND as POND
           from cours,classe,section,options,asco
           where cours.IDCLA = classe.IDCLA
           AND classe.IDOPT=options.IDOPT
          AND options.IDSECT = section.IDSECT
           and cours.IDAA=asco.ID");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
        
        public function getCoursClasse($id){
            $db = getconnection();
            $all = $db->prepare("SELECT cours.IDCO as ID,cours.COURS as COURS
               from cours,classe,section,options,asco
               where cours.IDCLA = classe.IDCLA
               AND classe.IDOPT=options.IDOPT
              AND options.IDSECT = section.IDSECT
               and cours.IDAA=asco.ID 
               And classe.IDCLA=?");
            $all->execute(array($id));
            $tb = array();
            while($data = $all->fetchObject())
            {
                $tb[] = $data;
            }
            return $tb;
            }
  
  
        public function getCoursId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM cours WHERE IDCO=? LIMIT 1");
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
