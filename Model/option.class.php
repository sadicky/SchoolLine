<?php
require_once("connexion.php");
    Class Opt{
        public $id;
        public $fac;
        public $dep;
        public $iddoy;
        public $access = 1;

        //ajouter une option
        public function setOption($dep,$fac){
        $this->fac=$fac;
        $this->dep=$dep;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO options(OPT,IDSECT) VALUES(?,?)");
        $addline = $add->execute(array($dep,$fac)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les sections
        public function getOptions(){
        $db = getconnection();
        $all = $db->prepare("SELECT options.IDOPT as ID,section.SECTION,
        options.OPT, options.ACCESS FROM options,section
        WHERE options.IDSECT=section.IDSECT");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
        
        public function getOptionActiv(){
            $db = getconnection();
            $all = $db->prepare("select * from options WHERE ACCESS='1'");
            $all->execute();
            $tb = array();
            while($data = $all->fetchObject())
            {
                $tb[] = $data;
            }
            return $tb;
            }

        //afficher toutes les fac
        public function getDep(){
        $db = getconnection();
        $all = $db->prepare("select * 
            from departement");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }
  
        public function getDepId($id)
        {
            $db = getConnection();
            $matP = $db->prepare("SELECT * FROM departement WHERE IDDep=? LIMIT 1");
            $matP->execute(array($id));
            $res = array();
            while($data = $matP->fetchObject())
            {
                $res[] = $data;
            }
            return $res;
        }


        public function activOpt($id){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE options SET ACCESS='1' where IDOPT=?");
         $ok = $sql->execute(array($id));
        return $ok;
        }

        public function deactivOpt($id){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE options SET ACCESS='0' where IDOPT=?");
        $ok = $sql->execute(array($id));
        return $ok;
       }
    }

?>