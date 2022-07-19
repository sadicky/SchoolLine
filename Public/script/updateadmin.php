<?php

require_once '../../Model/admin.class.php';
$admin = new Admin();
$id=isset($_GET['id'])?$_GET['id']:'';

	$login=isset($_POST['login'])?$_POST['login']:"";
	$tel=isset($_POST['tel'])?$_POST['tel']:"";
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
	$email=isset($_POST['email'])?$_POST['email']:"";
if($id)
{
    $output = array();
    $update = $admin->updateAdmin($login,$nom,$prenom,$tel,$email,$id);
    foreach ($update as $value) {
        $output['login'] = $value->LOGIN;
        $output['nom'] = $value->NOM;
        $output['prenom'] = $value->PRENOM;
        $output['email'] = $value->EMAIL;
        $output['tel'] = $value->TEL;
    }
    if(!empty($update)){
		echo "<span class='alert alert-success alert-lg col-sm-12'>modfification effectuee<br></span>";
    }
    else{
    	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur de modification</span>";
    }
    
echo json_encode($output);
}
?>
