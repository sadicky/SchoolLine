<?php
 require_once '../../Model/section.class.php';
 $fac=isset($_POST['fac'])?$_POST['fac']:"";
$faculte = new Section();
$add = $faculte->setSection($fac);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>
