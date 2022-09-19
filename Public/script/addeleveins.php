<?php
require_once('../../Model/eleve.class.php');
$eleve = new Eleve();
 $id=$_POST['id'];
 $montant=htmlspecialchars(trim(isset($_POST['montant'])))?$_POST['montant']:'';
 $add = null;  
 $dateins= date('Y-m-d h:m');
  $add = $eleve->setEleveIns($montant,$id,$dateins);
  if($add){	
		$access = 1;
		$e=$eleve->eleveInsUpdate($access,$id);
		echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   