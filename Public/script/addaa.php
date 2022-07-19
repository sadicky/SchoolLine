<?php
 $id=isset($_POST['id'])?$_POST['id']:"";
 $aa=isset($_POST['aa'])?$_POST['aa']:"";
 require_once '../../Model/aa.class.php';
$annee = new AA();
$add = $annee->setAA($id,$aa);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>
