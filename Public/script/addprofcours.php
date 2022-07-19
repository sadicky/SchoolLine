<?php
require_once('../../Model/prof.class.php');
$profs = new Prof();
 $prof=$_POST['id'];
 $cours=isset($_POST['cours'])?$_POST['cours']:"";
 $classe=isset($_POST['niv'])?$_POST['niv']:"";
 $aa=isset($_POST['aa'])?$_POST['aa']:'';
 $access = 1;
 $add = null;
 $dateins= date('Y-m-d h:m:s');
  $add = $profs->setProfCours($prof,$classe,$cours,$aa,$access,$dateins);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   