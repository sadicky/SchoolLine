<?php
 require_once '../../Model/fs.class.php';
 $eleve=htmlspecialchars(trim($_POST['eleve']));
 $bord=htmlspecialchars(trim($_POST['bord']));
 $det=htmlspecialchars(trim($_POST['det']));
 $as=htmlspecialchars(trim($_POST['aa']));
 $classe=htmlspecialchars(trim($_POST['classe']));
 $bord=htmlspecialchars(trim($_POST['bord']));
 $fs=htmlspecialchars(trim($_POST['min']));
 $montant=htmlspecialchars(trim($_POST['montant']));
 $rec=htmlspecialchars(trim($_POST['rec']));
$addm = new FS();
$add = $addm->setMinerval($eleve,$fs,$classe,$as,$bord,$rec,$montant,$det);
if($add){
        echo "<span class='alert alert-success alert-lg col-sm-12'>Enregistrement reussi <button type='button' class='close' data-dismiss='alert'>x</button></span>";
}
else{
	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur d'insertion</span>";
}
?>