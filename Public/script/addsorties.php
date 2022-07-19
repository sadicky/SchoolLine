<?php
 require_once '../../Model/sorties.class.php';
 $con=isset($_POST['con'])?$_POST['con']:"";
 $des=isset($_POST['des'])?$_POST['des']:"";
 $dat=isset($_POST['dat'])?$_POST['dat']:""; 
 $niv=isset($_POST['niv'])?$_POST['niv']:"";
$addc = new Sortie();
// $add = $addc->setSortie('da','df','df',6);
 $add = $addc->setSortie($con,$des,$dat,$niv);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>