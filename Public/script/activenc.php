<?php
require_once '../../Model/enc.class.php';
$prof = new Encodeur();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $prof->activEnc($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>