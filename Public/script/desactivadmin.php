<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $delete = $admin->deactivAdmin($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>