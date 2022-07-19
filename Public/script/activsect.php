<?php
require_once '../../Model/section.class.php';
$fac = new Section();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $fac->activSection($id);
}
	
?>