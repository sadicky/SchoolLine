 <?php
require_once("connexion.php");

Class Eleve
{
    public $mat;
    public $idprof;
    public $pwd;
    public $access = 0;
    public $dateins = null;
    public $noms;
    public $email;
    public $sexe;
    public $tel;
    public $dob;
    public $niveau;
    public $nation;
    public $photo;

    //ajouter un eleve
    public function setEleve($mat,$nom,$prenom,$email,$sexe,$tel,$dob,$eco,$access,$dateind,$niv,$aa)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO eleve(MATRICULE,NOM,PRENOM,EMAIL,SEXE,TEL,DOB,ECOLE_ORIGINE,ACCESS,DATEINS,IDCLA,IDAS) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($mat,$nom,$prenom,$email,$sexe,$tel,$dob,$eco,$access,$dateind,$niv,$aa)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher prof
    public function getEleves()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT eleve.ID, eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
  
    public function getEleveId($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT AND eleve.ID=? LIMIT 1");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }
    public function deleteProf($idprof)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM prof WHERE ID =?");
        $ok = $delete->execute(array($idprof));
        return $ok;
    }
	
    public function updateProf($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idprof)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE Admin SET LOGIN=?,PWD=?,PRENOM=?,NOM=?,FX=?,SEXE=?,TEL=?,PHOTO=?,ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idadmin)) or die(print_r($update->errorInfo()));
        return $ok;
    }
     public function activProf($idprof){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE prof SET ACCESS='1' where ID=?");
         $ok = $sql->execute(array($idprof));
        return $ok;
     }
    public function deactivProf($idprof){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE prof SET ACCESS='0' where ID=?");
        $ok = $sql->execute(array($idprof));
        return $ok;
    }
}
?>