<?php
require_once '../../Model/prof.class.php';
$prof = new Prof();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $delete = $prof->deactivProf($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>