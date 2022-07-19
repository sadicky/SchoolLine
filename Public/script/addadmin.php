<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
	$add = null;
	$dateins= null;
	$access= 1 ;
	$login=isset($_POST['login'])?$_POST['login']:"";
	$tel=isset($_POST['tel'])?$_POST['tel']:"";
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
	$email=isset($_POST['email'])?$_POST['email']:"";
	$pwd= md5($_POST['pwd']);
	$cpwd= md5($_POST['cpwd']);
		if($pwd == $cpwd){
			$add = $admin->setAdmin($login,$pwd,$nom,$prenom,$tel,$email,$access,$dateins);
			if($add){
			echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
			}
			else{
				echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
			}
		}
		else{
			echo "<span class='alert alert-danger alert-lg col-sm-12'>Mot de pass non Identique</span>";
		}
	
?>
