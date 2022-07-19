<?php
 require_once '../../Model/bib.class.php';
 $bib = new Bibliotheque();
 $data= count($bib->getAut());
   echo $data;
  
?>
