<?php
require_once '../../Model/option.class.php';
$dep = new Opt();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $dep->deactivOpt($id);
}
	
?>