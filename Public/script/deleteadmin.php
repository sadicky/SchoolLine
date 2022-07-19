<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $delete = $admin->deleteAdmin($id);
    if(!empty($delete)){
		echo "<span class='alert alert-success alert-lg col-sm-12'>Suppression avec succes</span>";
    }
    else{
    	echo "<span class='alert alert-danger alert-lg col-sm-12'>erreur de suppression</span>";
	}
}
	
?>
