<?php
 require_once '../../Model/af.class.php';
 $montant=isset($_POST['montant'])?$_POST['montant']:"";
 $aa=isset($_POST['aa'])?$_POST['aa']:"";
 $motif=isset($_POST['motif'])?$_POST['motif']:"";
$addc = new AutresF();
$add = $addc->setAF($montant,$motif,$aa);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi</span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>