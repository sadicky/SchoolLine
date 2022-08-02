<?php
session_start();
require_once '../../Model/jc.class.php';

$id = isset($_POST['id']) ? $_POST['id'] : "";
$motif = isset($_POST['motif']) ? $_POST['motif'] : "";
$datedeb = isset($_POST['datedeb']) ? $_POST['datedeb'] : "";
$datefin = isset($_POST['datefin']) ? $_POST['datefin'] : "";
$addc = new JC();
$add = $addc->updateJC($motif, $datefin, $datedeb, $id);
if (!empty($add)) {
    echo "<span class='alert alert-success alert-lg col-sm-12'>modifification effectuée<br></span>";
} else {
    echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur de modification</span>";
}
