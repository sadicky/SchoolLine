<?php
session_start();
require_once '../../Model/bib.class.php';
$admin = new Bibliotheque();
$id = $_POST['id'];
// echo $id;
if(empty($id)){
    echo "<strong style='color:red;'>Ce bibliothecaire n'existe pas!</strong>";
   }
   else{
    $noms=isset($_POST['noms'])?$_POST['noms']:"";
    $dob=isset($_POST['dob'])?$_POST['dob']:date('Y-m-d');
    $sexe=isset($_POST['sexe'])?$_POST['sexe']:"M";
    $tel=isset($_POST['tel'])?$_POST['tel']:"";
    $email=isset($_POST['email'])?$_POST['email']:"";
    $access = 0;
    
   
        $update = $admin->updateBib($noms,$email,$sexe,$tel,$dob,$id);
        if(!empty($update)){
            echo "<span class='alert alert-success alert-lg col-sm-12'>modifification effectuée<br></span>";
        }
        else{
            echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur de modification</span>";
        }
        
    }
