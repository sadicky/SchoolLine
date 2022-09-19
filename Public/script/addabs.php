<?php
require_once('../../Model/presence.class.php');
$pres = new Presence();
$eleve = array();
$add = null;
$eleve = htmlspecialchars(trim(isset($_POST['eleve'])))? $_POST['eleve'] : 0;

for ($i = 0; $i < count($eleve); $i++) {	
	$id = $eleve[$i];
	if (isset($_POST['p'.$id])):
	   $c="P";		
   else:
	  $c="A";
   endif;
   $classe = htmlspecialchars(trim(isset($_POST['niv']))) ? $_POST['niv'] : 0;
   $aa = htmlspecialchars(trim(isset($_POST['aa']))) ? $_POST['aa'] : '';
   $datea = htmlspecialchars(trim(isset($_POST["date"]))) ? $_POST["date"] : '';
	$add = $pres-> setPresence($id,$classe,$aa,$c,$datea);
}
if($add){
		echo "<span class='alert alert-success alert-lg col-sm-12'>Les présences sont ajoutées avec succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";	
}else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>Erreur!!<button type='button' class='close' data-dismiss='alert'>x</button></span>";	
}
