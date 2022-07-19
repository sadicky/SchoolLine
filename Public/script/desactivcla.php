<?php
require_once '../../Model/classe.class.php';
$fac = new Classe();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $fac->deactivCla($id);
}
	
?>