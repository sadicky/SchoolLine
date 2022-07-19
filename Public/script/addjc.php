<?php
 require_once '../../Model/jc.class.php';
 $motif=isset($_POST['motif'])?$_POST['motif']:"";
 $datedeb=isset($_POST['datedeb'])?$_POST['datedeb']:"";
 $datefin=isset($_POST['datefin'])?$_POST['datefin']:"";
$addc = new JC();
$add = $addc->setJC($motif,$datefin,$datedeb);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>