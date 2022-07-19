<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=6;
if($id)
{
    $update = $admin->getAdId($id);
	echo json_encode($update);
}
?>
