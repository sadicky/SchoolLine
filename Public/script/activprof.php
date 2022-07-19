<?php
require_once '../../Model/prof.class.php';
$prof = new Prof();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $prof->activProf($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>