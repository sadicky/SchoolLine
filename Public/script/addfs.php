<?php
 require_once '../../Model/fs.class.php';

 $montant=isset($_POST['montant'])?$_POST['montant']:"";
 $aa=isset($_POST['aa'])?$_POST['aa']:"";
 $classe=isset($_POST['niv'])?$_POST['niv']:"";
$addc = new FS();
$add = $addc->setFS($montant,$classe,$aa);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>