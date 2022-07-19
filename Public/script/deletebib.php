<?php
require_once('../../Model/bib.class.php');
$bib = new Bibliotheque();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $delete = $bib->deleteBib($id);
    if(!empty($delete)){
		echo "<span class='alert alert-success alert-sm col-sm-12'><b>Suppression avec succes <button type='button' class='close' data-dismiss='alert'>x</button></b></span>";
    }
    else{
    	echo "<span class='alert alert-danger alert-sm col-sm-12'><b>erreur de suppression <button type='button' class='close' data-dismiss='alert'>x</button></b></span>";
	}
}
	
?>
