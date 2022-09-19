<?php
require_once('../../Model/enc.class.php');
$enc= new Encodeur();
 $titre=isset($_POST['titre'])?$_POST['titre']:"";
 $noms=isset($_POST['noms'])?$_POST['noms']:"";
 $sexe=isset($_POST['sexe'])?$_POST['sexe']:"M";
 $tel=isset($_POST['tel'])?$_POST['tel']:"";
 $email=isset($_POST['email'])?$_POST['email']:"";
 $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";
 $add = null;
  $add = $enc->setEnc($titre,$noms,$email,$sexe,$tel,$pwd);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   