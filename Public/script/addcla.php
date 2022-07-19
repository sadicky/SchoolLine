<?php
 require_once '../../Model/classe.class.php';
 $niv=isset($_POST['niv'])?$_POST['niv']:"";
 $dep=isset($_POST['dep'])?$_POST['dep']:"";
$niveau = new Classe();
$add = $niveau->setClasse($niv,$dep);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>
