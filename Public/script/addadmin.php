<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
	$add = null;
	$access= 0 ;
	$login=htmlspecialchars(trim(isset($_POST['login'])))?$_POST['login']:"";
	$tel=htmlspecialchars(trim(isset($_POST['tel'])))?$_POST['tel']:"";
    $nom=htmlspecialchars(trim(isset($_POST['nom'])))?$_POST['nom']:"";
    $prenom=htmlspecialchars(trim(isset($_POST['prenom'])))?$_POST['prenom']:"";
	$email=htmlspecialchars(trim(isset($_POST['email'])))?$_POST['email']:"";
	$pwd=htmlspecialchars(trim(isset($_POST['pwd'])))?$_POST['pwd']:"";
	$add = $admin->setAdmin($login,$pwd,$nom,$prenom,$tel,$email,$access);
	if($add){
		echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
    }
	else{
		echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
	}
	?>
