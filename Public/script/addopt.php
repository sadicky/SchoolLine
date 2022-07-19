<?php
 require_once '../../Model/option.class.php';
 $fac=isset($_POST['fac'])?$_POST['fac']:"";
 $dep=isset($_POST['dep'])?$_POST['dep']:"";
$departement = new Opt();
$add = $departement->setOption($dep,$fac);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>
