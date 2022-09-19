<?php
require_once '../../Model/enc.class.php';
$prof = new Encodeur();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $delete = $prof->deactivEnc($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>