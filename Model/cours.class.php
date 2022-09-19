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
           and cours.IDAA=asco.ID order by classe.CLASSE ");
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
            $all = $db->prepare("SELECT section.IDSECT,cours.IDCO as ID,cours.POND,cours.COURS as COURS,prof.NOMS
               from cours,classe,section,options,asco,prof,profcours
               where cours.IDCLA = classe.IDCLA
               AND classe.IDOPT=options.IDOPT
              AND prof.ID = profcours.IDP
              AND profcours.IDCO=cours.IDCO
              AND profcours.IDCLA=classe.IDCLA
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

            
        public function getCoursClasse2($id){
            $db = getconnection();
            $all = $db->prepare("SELECT section.IDSECT,cours.IDCO as ID,cours.POND,cours.COURS as COURS,prof.NOMS
               from cours,classe,section,options,asco,prof,profcours
               where cours.IDCLA = classe.IDCLA
               AND classe.IDOPT=options.IDOPT
              AND prof.ID = profcours.IDP
              AND profcours.IDCO=cours.IDCO
              AND profcours.IDCLA=classe.IDCLA
              AND options.IDSECT = section.IDSECT
               and cours.IDAA=asco.ID 
               And classe.IDCLA=?");
            $all->execute(array($id));
            $res = $all->fetchObject();
            return $res;
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

        
        public function countCours($classe){
            $db = getConnection();
            $q= $db->prepare("SELECT SUM(cours.POND) as POND
            from cours,classe,section,options,asco
            where cours.IDCLA = classe.IDCLA
            AND classe.IDOPT=options.IDOPT
            AND options.IDSECT = section.IDSECT
            and cours.IDAA=asco.ID 
            And classe.IDCLA=? and cours.ACCESS='1'");
            $q->execute(array($classe));
            $res = $q->fetchObject();
            return $res;
        } 
  

    }
