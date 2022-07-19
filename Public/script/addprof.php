<?php
require_once('../../Model/prof.class.php');
$prof = new Prof();
 $titre=isset($_POST['titre'])?$_POST['titre']:"";
 $noms=isset($_POST['noms'])?$_POST['noms']:"";
 $dob=isset($_POST['dob'])?$_POST['dob']:date('Y-m-d');
 $sexe=isset($_POST['sexe'])?$_POST['sexe']:"M";
 $tel=isset($_POST['tel'])?$_POST['tel']:"";
 $email=isset($_POST['email'])?$_POST['email']:"";
 $niveau=isset($_POST['niveau'])?$_POST['niveau']:"A2";
 $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";
 $pwd = password_hash($pwd,PASSWORD_BCRYPT);
 $access = 0;
 $add = null;
 $dateins= date('Y-m-d h:m:s');
  $add = $prof->setProf($titre,$noms,$email,$sexe,$tel,$dob,$niveau,$access,$pwd,$dateins);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   