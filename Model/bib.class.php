 <?php
require_once("connexion.php");

Class Bibliotheque
{
    
    public $idbib;
    public $idcat;
    public $pwd;
    public $access = 1;
    public $dateins = null;
    public $noms;
    public $email;
    public $sexe;
    public $tel;
    public $dob;
    public $cat;
    public $status;
    public $aut;
    public $photo;
    public $liv;
    public $isbn;

    //ajouter un bibliothecaireesseur
    public function setBib($noms,$email,$sexe,$tel,$dob,$mat,$pwd,$access,$dateins)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO bibliothecaire(NOMS,EMAIL,SEXE,TEL,DOB,MAT,PWD,ACCESS,DATEINS) VALUES (?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($noms,$email,$sexe,$tel,$dob,$mat,$pwd,$access,$dateins)) or die(print_r($add->errorInfo()));
        return $addline;
    }
    //ajouter un categorieLivre
    public function setCat($cat,$status)
    {   
        $this->cat=$cat;
        $this->status=$status;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO catlivre (LIBELLE,STATUS) VALUES (?,?)");
        $addline = $add->execute(array($cat,$status)) or die(print_r($add->errorInfo()));
        return $addline;
    }

    //ajouter un auteur
    public function setLiv($liv,$aut,$cat,$isbn)
    {   
        $this->aut=$aut;
        $this->cat=$cat;
        $this->liv=$liv;
        $this->isbn=$isbn;
        $db = getConnection();
        $add = $db->prepare("INSERT INTO livre (DESIGNATION,AUTEUR,CATID,ISBNNum) VALUES (?,?,?,?)");
        $addline = $add->execute(array($liv,$aut,$cat,$isbn)) or die(print_r($add->errorInfo()));
        return $addline;
    }
    

    //afficher bibliothecaire
    public function getBib()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM bibliothecaire group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
  
   //afficher auteur
    public function getAut()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM auteurlivre group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    //afficher categorie
    public function getCat()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM catlivre group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    //afficher livre
    public function getLiv()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT * FROM livre group by ID DESC");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

    public function getLivs()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT livre.ID,livre.DESIGNATION,livre.ISBNNum,livre.AUTEUR,catlivre.LIBELLE
         FROM livre,catlivre 
        WHERE livre.CATID=catlivre.ID");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
  
    public function getBibId($idbibliothecaire)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM bibliothecaire WHERE ID=? LIMIT 1");
        $matP->execute(array($idbibliothecaire));
        $res = $matP->fetchObject();
        return $res;
    }
    public function deleteBib($idbibliothecaire)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM bibliothecaire WHERE ID =?");
        $ok = $delete->execute(array($idbibliothecaire));
        return $ok;
    }
    public function deleteCat($idcat)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM catlivre WHERE ID =?");
        $ok = $delete->execute(array($idbibliothecaire));
        return $ok;
    }
	
    public function updateBib($noms,$email,$sexe,$tel,$dob,$id)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE bibliothecaire SET NOMS=?,EMAIL=?,SEXE=?,TEL=?,DOB=? WHERE ID =?");
        $ok = $update->execute(array($noms,$email,$sexe,$tel,$dob,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
     public function activbib($idbibliothecaire){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE bibliothecaire SET ACCESS='1' where ID=?");
         $ok = $sql->execute(array($idbibliothecaire));
        return $ok;
     }
    public function deactivbib($idbibliothecaire){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE bibliothecaire SET ACCESS='0' where ID=?");
        $ok = $sql->execute(array($idbibliothecaire));
        return $ok;
    }
}
?>