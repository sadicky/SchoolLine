<?php
 require_once '../../Model/bib.class.php';
 $bib = new Bibliotheque();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $delete = $bib->activbib($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>