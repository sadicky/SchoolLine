<?php
require_once("connexion.php");

Class Admin
{
    public $idadmin;
    public $nom;
    public $login;
    public $pwd;
    public $access = 1;
    public $type = "Admin";
    public $prenom;
    public $tel;
    public $email;
    public $dateins=null;

    public function setAdmin($login,$pwd,$nom,$prenom,$tel,$email,$access,$dateins)
    {   
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->tel=$tel;
        $this->login=$login;
        $this->pwd=$pwd;
        $this->email=$email;
        $this->dateins=$dateins;
        $db = getconnection();
        $add = $db->prepare("INSERT INTO admin(LOGIN,PWD,NOM,PRENOM,TEL,EMAIL,ACCESS,DATEINS)
        VALUES(?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($login,$pwd,$nom,$prenom,$tel,$email,$access,$dateins)) or die(print_r($add->errorInfo()));
        return $addline;
    }
	
	 public function getAllAdmin()
		{
         $db = getconnection();
          $all = $db->prepare("SELECT * FROM `admin` ORDER BY `ID` DESC");
         $all->execute();
           $tb_alladmin = array();
          while($data = $all->fetchObject())
         {
            $tb_alladmin[] = $data;
        }
         return $tb_alladmin;
     }
	  public function getAdId($idadmin)
       {
          $db = getConnection();
          $update = $db->prepare("SELECT * FROM admin WHERE ID=?");
          $update->execute(array($idadmin));
          $res = array();
          while($data = $update->fetchObject()){
             $res[] = $data;
           }
          return $res;
       }
	   
     public function deleteAdmin($idadmin)
		{
         $db = getconnection();
         $delete = $db->prepare("DELETE FROM Admin WHERE ID =?");
         $ok = $delete->execute(array($idadmin));
         return $ok;
        }
    public function updateAdmin($login,$nom,$prenom,$tel,$email,$idadmin)
		{
         $db = getconnection();
          $update = $db->prepare("UPDATE admin SET LOGIN=?,PRENOM=?,NOM=?,EMAIL=?,TEL=?  WHERE ID =?");
          $ok = $update->execute(array($login,$nom,$prenom,$tel,$email,$idadmin)) or die(print_r($update->errorInfo()));
          return $ok;
     }
     public function activAdmin($idadmin){
         $db = getconnection();
         $sql =$db->prepare( "UPDATE Admin SET ACCESS='1' where ID=?");
         $ok = $sql->execute(array($idadmin));
        return $ok;
     }
    public function deactivAdmin($idadmin){
        $db = getconnection();
        $sql =$db->prepare( "UPDATE Admin SET ACCESS='0' where ID=?");
        $ok = $sql->execute(array($idadmin));
        return $ok;
    }
}