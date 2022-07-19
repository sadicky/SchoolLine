<?php
 require_once '../../Model/cours.class.php';
 $cours=isset($_POST['cours'])?$_POST['cours']:"";
 $pond=isset($_POST['pond'])?$_POST['pond']:"";
 $nbh=isset($_POST['nbh'])?$_POST['nbh']:"";
 $aa=isset($_POST['aa'])?$_POST['aa']:"";
 $classe=isset($_POST['niv'])?$_POST['niv']:"";
$addc = new Cours();
$add = $addc->setCours($cours,$pond,$nbh,$classe,$aa);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>