 <?php
require_once("connexion.php");

Class Prof
{
    public $titre;
    public $idprof;
    public $pwd;
    public $access = 1;
    public $dateins = null;
    public $noms;
    public $email;
    public $sexe;
    public $tel;
    public $dob;
    public $niveau;
    public $nation;
    public $photo;

    //ajouter un professeur
    public function setProf($mat,$noms,$email,$sexe,$tel,$dob,$niveau,$access,$pwd,$dateins)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO prof(MATRICULE,NOMS,EMAIL,SEXE,TEL,DOB,NIVEAU,ACCESS,PWD,DATEINS) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($mat,$noms,$email,$sexe,$tel,$dob,$niveau,$access,$pwd,$dateins)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //ajouter un professeur
    public function setProfCours($prof,$classe,$cours,$aa,$access,$dateins)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO profcours(IDP,IDCLA,IDCO,IDAS,ACCESS,DATEINS) VALUES (?,?,?,?,?,?)");
        $addline = $add->execute(array($prof,$classe,$cours,$aa,$access,$dateins)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher prof
    public function getProfs()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM prof group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

     //afficher prof
     public function getProfsActif()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT * FROM prof WHERE ACCESS='1' ");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetchObject()){
             $tbP[] = $data;
         }
          return $tbP;
     }
  
    public function getProfId($idprof)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM prof WHERE MATRICULE=? LIMIT 1");
        $matP->execute(array($idprof));
        $res = $matP->fetch(PDO::FETCH_OBJ);
        return $res;
    } 
    
  
    public function getProfCoursId($idprof)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT cours.COURS as COURS,classe.CLASSE as CLASSE FROM profcours,cours,asco,classe,prof WHERE
        profcours.IDP=prof.ID AND profcours.IDCLA=classe.IDCLA AND profcours.IDCO=cours.IDCO
        AND profcours.IDAS=asco.ID AND prof.MATRICULE=?");
        $matP->execute(array($idprof));
        $res = $matP->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function deleteProf($idprof)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM prof WHERE ID =?");
        $ok = $delete->execute(array($idprof));
        return $ok;
    }
	
    public function updateProf($noms,$email,$sexe,$tel,$dob,$niveau,$access,$id)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE prof SET NOMS=?,EMAIL=?,SEXE=?,TEL=?,DOB=?,NIVEAU=?,ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($noms,$email,$sexe,$tel,$dob,$niveau,$access,$id)) or die(print_r($update->errorInfo()));
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