<?php
require_once('../../Model/eleve.class.php');
$eleve = new Eleve();

 $mat=htmlspecialchars(trim(isset($_POST['mat'])))?$_POST['mat']:0;
 $nom=htmlspecialchars(trim(isset($_POST['nom'])))?$_POST['nom']:'';
 $prenom=htmlspecialchars(trim(isset($_POST['prenom'])))?$_POST['prenom']:'';
 $dob=htmlspecialchars(trim(isset($_POST['dob'])))?$_POST['dob']:date('Y-m-d h:m');
 $sexe=htmlspecialchars(trim(isset($_POST['sexe'])))?$_POST['sexe']:'M';
 $tel=htmlspecialchars(trim(isset($_POST['tel'])))?$_POST['tel']:0;
 $email=htmlspecialchars(trim(isset($_POST['email'])))?$_POST['email']:0;
 $niv=htmlspecialchars(trim(isset($_POST['niv'])))?$_POST['niv']:'';
 $aa=htmlspecialchars(trim(isset($_POST['aa'])))?$_POST['aa']:'';
 $eco=htmlspecialchars(trim(isset($_POST['eco'])))?$_POST['eco']:'';
 $access = 0;
 $add = null;
 $dateins= date('Y-m-d h:m');

  $add = $eleve->setEleve($mat,$nom,$prenom,$email,$sexe,$tel,$dob,$eco,$access,$dateins,$niv,$aa);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
