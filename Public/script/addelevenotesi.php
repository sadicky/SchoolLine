<?php
require_once('../../Model/notes.class.php');
$note = new Note();

$string = "ABECDEFGHIJKLMN0123456789OPQRSTUVWXYZ";
$string = str_shuffle($string);
$codemod = substr($string, 0, 8);

$cours = htmlspecialchars(trim(isset($_POST['cours']))) ? $_POST['cours'] : '';
$eleve = htmlspecialchars(trim(isset($_POST['id'])))? $_POST['id'] : 0;
$notes = htmlspecialchars(trim(isset($_POST['notes']))) ? $_POST['notes'] : 0;
$noted = htmlspecialchars(trim(isset($_POST['noted']))) ? $_POST['noted'] : 0;
$periode = htmlspecialchars(trim(isset($_POST['periode']))) ? $_POST['periode'] : '';
$daten = date('Y-m-d');

$add = $note->setNotes($eleve, $cours, $periode, $notes,$noted, $daten,$codemod);
	

if($add){
		echo "<span class='alert alert-success alert-lg col-sm-12'>La note est ajoutée avec succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";	
}else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>Erreur!!<button type='button' class='close' data-dismiss='alert'>x</button></span>";	
}
