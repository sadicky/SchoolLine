<?php
require_once("connexion.php");

Class User
{
    public $login;
    public $pwd;
    public $access = 1;
    public $type = "Admin";
    public $db;

    public function setUser($login,$pwd,$type,$access)
    {   
        $this->login=$login;
        $this->pwd=$pwd;
        $this->type=$type;
        $this->access=$access;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO user(LOGIN,PWD,TYPE,ACCESS)
        VALUES(?,?,?,?)");
        $addline = $add->execute(array($login,$pwd,$type,$access)) or die(print_r($add->errorInfo()));
        if ($addline) {
            $id = $this->db->lastInsert();
        }
        return $id;
    }
//     //ajouter un professeur
//     public function setProf($mat,$titre,$noms,$datenaiss,$sexe,$tel,$email,$niveau,$nation,$pwd,$photo,$access,$dateins)
//     {   
//         $this->mat=$mat;
//         $this->titre=$titre;
//         $this->pwd=$pwd;
//         $this->datenaiss=$datenaiss;
//         $this->noms=$noms;
//         $this->sexe=$sexe;
//         $this->tel=$tel;
//         $this->photo=$photo;
//         $this->access=$access;
//         $db = getconnection();
//         $add = $db->prepare("INSERT INTO `profs` (`MAT`, `TITRE`, `NOMS`, `DATENAISS`, `SEXE`, `TEL`, `E-MAIL`, `NIVEAU`, `NATIONALITE`, `PWD`, `PHOTO`, `ACCESS`, `DATEINS`) 
//         VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
//         $addline = $add->execute(array($mat,$titre,$noms,$datenaiss,$sexe,$tel,$email,$niveau,$nation,$pwd,$photo,$access,$dateins)) or die(print_r($add->errorInfo()));
//         return $addline;
//     }

//     //afficher prof
//     public function getAllProf()
//     {
//         $db = getconnection();
//         $statement = $db->prepare("SELECT * FROM profs");
//         $statement->execute();
//         $result = $statement->fetchAll();
//         return $statement->rowCount();
//     }
  

   
//     public function getAdId($idadmin)
//     {
//         $db = getconnection();
//         $idadmin = $db->prepare("SELECT * FROM Admin WHERE ID=? LIMIT 1");
//         $idadmin->execute(array($id_cours));
//         $res = array();
//         while($data = $idadmin->fetchObject())
//         {
//             $res[] = $data;
//         }
//         return $res;
//     }
//     public function getProfId($mat)
//     {
//         $db = getconnection();
//         $matP = $db->prepare("SELECT * FROM profs WHERE MAT=? LIMIT 1");
//         $matP->execute(array($mat));
//         $res = array();
//         while($data = $matP->fetchObject())
//         {
//             $res[] = $data;
//         }
//         return $res;
//     }
//     public function deleteAdmin($idadmin)
//     {
//         $db = getconnection();
//         $delete = $db->prepare("DELETE FROM Admin WHERE ID =?");
//         $ok = $delete->execute(array($idadmin));
//         return $ok;
//     }
//     public function updateAdmin($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idadmin)
//     {
//         $db = getconnection();
//         $update = $db->prepare("UPDATE Admin SET LOGIN=?,PWD=?,PRENOM=?,NOM=?,FX=?,SEXE=?,TEL=?,PHOTO=?,ACCESS=?  WHERE ID =?");
//         $ok = $update->execute(array($login,$pwd,$prenom,$nom,$fonction,$sexe,$tel,$photo,$access,$idadmin)) or die(print_r($update->errorInfo()));
//         return $ok;
//     }
    
    public function verification($login,$pwd){
	$db = getconnection();
	$req=$db->prepare('select * from user where LOGIN=? and PWD=? and ACCESS=?');
	$req->execute(array($login,$pwd,1));
	$verifier=$req->rowcount();
	if ($verifier==1) {
		return 1;
	}else{
		$req1=$conn->prepare('select * from user where LOGIN=?');
		$req1->execute(array($login));
		$verifier_ps=$req1->rowcount();
		if ($verifier_ps==1) {
			return 2;
	}

	$req2=$db->prepare('select * from user where PWD=?');
	$req2->execute(array($pwd));
	$verifier_pass=$req2->rowcount();
	if ($verifier_pass==1) {
		return 3;
	}
	}
}

    public function allow(){
	if (isset($_SESSION['user'],$_SESSION['password'])) {
		return true;
	}else{
		return false;
	 }
}




 }