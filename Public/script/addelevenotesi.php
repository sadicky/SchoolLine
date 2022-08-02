<?php
require_once('../../Model/notes.class.php');
$notes = new Note();

$cours = htmlspecialchars(trim(isset($_POST['cours']))) ? $_POST['cours'] : '';
$id = htmlspecialchars(trim(isset($_POST['id']))) ? $_POST['id'] : '';
$note = htmlspecialchars(trim(isset($_POST['notes']))) ? $_POST['notes'] : 0;
$noted = htmlspecialchars(trim(isset($_POST['noted']))) ? $_POST['noted'] : 0;
$periode = htmlspecialchars(trim(isset($_POST['periode']))) ? $_POST['periode'] : '';
$type = htmlspecialchars(trim(isset($_POST["type"]))) ? $_POST["type"] : '';

$add = $notes->setNotes($id, $cours, $periode, $note,$noted, $type);
if ($add) {
	echo "<span class='alert alert-success alert-lg col-sm-12'>La note est ajoutée avec succes<button type='button' class='close' data-dismiss='alert'>x</button></span>";
	
} else {  
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion de notes <button type='button' class='close' data-dismiss='alert'>x</button></span>";
	
}
