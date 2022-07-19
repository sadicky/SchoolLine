<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $admin->activAdmin($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>