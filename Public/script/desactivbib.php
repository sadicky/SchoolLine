<?php
 require_once '../../Model/bib.class.php';
 $bib = new Bibliotheque();
$id=isset($_POST['id'])?$_POST['id']:'';
// $id=1;
if($id)
{
    $delete = $bib->deactivbib($id);
	if($delete) echo "avec succes";
	else echo "non ajoute";
}
	
?>