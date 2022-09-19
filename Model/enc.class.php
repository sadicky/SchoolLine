 <?php
require_once("connexion.php");

Class Encodeur
{
    //ajouter un encodeur
    public function setEnc($titre,$noms,$email,$sexe,$tel,$pwd)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO encodeur(MATRICULE,NOMS,EMAIL,SEXE,TEL,PWD) VALUES (?,?,?,?,?,?)");
        $addline = $add->execute(array($titre,$noms,$email,$sexe,$tel,$pwd)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //afficher encodeur
    public function getEncs()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM encodeur group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

     //afficher encodeur
     public function getEncsActif()
     {
         $db = getConnection();
         $statement = $db->prepare("SELECT * FROM encodeur WHERE ACCESS='1' ");
         $statement->execute();
         $tbP = array();
         while($data =  $statement->fetchObject()){
             $tbP[] = $data;
         }
          return $tbP;
     }
  
    public function getEncId($idencodeur)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM encodeur WHERE MATRICULE=? LIMIT 1");
        $matP->execute(array($idencodeur));
        $res = $matP->fetch(PDO::FETCH_OBJ);
        return $res;
    } 
    
  
    public function deleteEnc($idencodeur)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM encodeur WHERE ID =?");
        $ok = $delete->execute(array($idencodeur));
        return $ok;
    }
	
    public function updateEnc($noms,$email,$sexe,$tel,$dob,$niveau,$access,$id)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE encodeur SET NOMS=?,EMAIL=?,SEXE=?,TEL=?,DOB=?,NIVEAU=?,ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($noms,$email,$sexe,$tel,$dob,$niveau,$access,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
     public function activEnc($idencodeur){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE encodeur SET ACCESS='1' where ID=?");
         $ok = $sql->execute(array($idencodeur));
        return $ok;
     }
    public function deactivEnc($idencodeur){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE encodeur SET ACCESS='0' where ID=?");
        $ok = $sql->execute(array($idencodeur));
        return $ok;
    }
}
?>