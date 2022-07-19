<?php
require_once('../../Model/bib.class.php');
$bib = new Bibliotheque();
 $noms=isset($_POST['noms'])?$_POST['noms']:"";
 $dob=isset($_POST['dob'])?$_POST['dob']:"";
 $sexe=isset($_POST['sexe'])?$_POST['sexe']:"M";
 $tel=isset($_POST['tel'])?$_POST['tel']:"";
 $email=isset($_POST['email'])?$_POST['email']:"";
 $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";
 $pwd = password_hash($pwd,PASSWORD_BCRYPT);
 $mat=isset($_POST['mat'])?$_POST['mat']:"";
 $access = 1;
 $add = null;
 $dateins= date('Y-m-d h:m:s');
  $add = $bib->setBib($noms,$email,$sexe,$tel,$dob,$mat,$pwd,$access,$dateins);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   