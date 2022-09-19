 <?php
require_once("connexion.php");

Class Caisse
{
    //ajouter un caisse
    public function setCaissier($titre,$noms,$email,$sexe,$tel,$pwd)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO caisse(MATRICULE,NOMS,EMAIL,SEXE,TEL,PWD) VALUES (?,?,?,?,?,?)");
        $addline = $add->execute(array($titre,$noms,$email,$sexe,$tel,$pwd)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher caisse
    public function getCaissiers()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM caisse group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

     //afficher caisse
     public function getCaisseActif()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT * FROM caisse WHERE ACCESS='1' ");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetchObject()){
             $tbP[] = $data;
         }
          return $tbP;
     }
  
    public function getCaisseId($idcaisse)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM caisse WHERE MATRICULE=? LIMIT 1");
        $matP->execute(array($idcaisse));
        $res = $matP->fetch(PDO::FETCH_OBJ);
        return $res;
    } 
    
  
    public function deleteEnc($idcaisse)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM caisse WHERE ID =?");
        $ok = $delete->execute(array($idcaisse));
        return $ok;
    }
	
    public function updateEnc($noms,$email,$sexe,$tel,$dob,$niveau,$access,$id)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE caisse SET NOMS=?,EMAIL=?,SEXE=?,TEL=?,DOB=?,NIVEAU=?,ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($noms,$email,$sexe,$tel,$dob,$niveau,$access,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
     public function activEnc($idcaisse){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE caisse SET ACCESS='1' where ID=?");
         $ok = $sql->execute(array($idcaisse));
        return $ok;
     }
    public function deactivEnc($idcaisse){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE caisse SET ACCESS='0' where ID=?");
        $ok = $sql->execute(array($idcaisse));
        return $ok;
    }
}
?>