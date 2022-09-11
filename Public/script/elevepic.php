<?php
session_start();
require_once('../../Model/connexion.php');

if (isset($_POST['change'])) {
                               

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../../Public/Images/eleve/" . $_FILES["image"]["name"]);
    $elevepic = "../../Public/Images/eleve/" . $_FILES["image"]["name"];
    $db = getConnection();
        $update = $db->prepare("UPDATE eleve SET IMAGE=?  WHERE ID =?");
        $ok = $update->execute(array($elevepic,$_SESSION['ID'])) or die(print_r($update->errorInfo()));
        if($ok){
            header('Location:../../index.php?page=detailElev');
        }else{
            echo "Erreur";
        }
        // print_r($ok);
    ?>

<?php     }  ?>