<?php
require_once('../../Model/bib.class.php');
$bib = new Bibliotheque();
 $aut=isset($_POST['aut'])?$_POST['aut']:"";
 $add = null;
  $add = $bib->setAut($aut);
  if(!empty($add)){
	echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
  else{
	  echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	}
?>
   