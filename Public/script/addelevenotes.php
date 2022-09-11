<?php
require_once('../../Model/notes.class.php');
$note = new Note();
$n = array();
$eleves = array();
$cours = htmlspecialchars(trim(isset($_POST['cours']))) ? $_POST['cours'] : '';
$eleve = htmlspecialchars(trim(isset($_POST['eleve'])))? $_POST['eleve'] : 0;
$notes = htmlspecialchars(trim(isset($_POST['notes']))) ? $_POST['notes'] : 0;
$noted = htmlspecialchars(trim(isset($_POST['noted']))) ? $_POST['noted'] : 0;
$periode = htmlspecialchars(trim(isset($_POST['periode']))) ? $_POST['periode'] : '';
$daten = htmlspecialchars(trim(isset($_POST["daten"]))) ? $_POST["daten"] : '';
$codemod = htmlspecialchars(trim(isset($_POST["codemod"]))) ? $_POST["codemod"] : '';
// var_dump($eleve);
for ($i = 0; $i < count($notes); $i++) {
	$n = $notes[$i];
	$eleves = $eleve[$i];
	$add = $note->setNotes($eleves, $cours, $periode, $n,$noted, $daten,$codemod);
	
}
if($add){
		echo "<span class='alert alert-success alert-lg col-sm-12'>La note est ajoutée avec succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";	
}else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>Erreur!!<button type='button' class='close' data-dismiss='alert'>x</button></span>";	
}
