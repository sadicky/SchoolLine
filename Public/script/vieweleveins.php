<?php

$id = $_POST['id'];
require_once('../../Model/prof.class.php');
require_once('../../Model/aa.class.php');
require_once('../../Model/section.class.php');
require_once('../../Model/option.class.php');
require_once('../../Model/classe.class.php');
require_once('../../Model/cours.class.php');
require_once('../../Model/af.class.php');
require_once('../../Model/eleve.class.php');

$getS= new Section();
$getO= new Opt();
$getP= new Prof();
$getC = new Classe();	
$getCo = new Cours();		
$getAa= new AA();
$frais = new AutresF();	
$getE= new Eleve();

$getO = $getO->getOptions();	
$getP = $getP->getProfsActif();
$getS = $getS->getSection();
$getC = $getC->getClasse();	
$getCo = $getCo->getsCours();
$getAa = $getAa->getAllAA();
$getAF= $frais->getAFS();
$getEl = $getE->getEleveId($id);
// echo ($getEl->ID);
?>
     
	 <form  method="post" id='formeleveins' enctype="multipart/form-data">
  <input type="hidden" value="<?= $getEl->ID ?>" name="id" id="id" />
		<div class="form-group">		
           <input type="text" name="montant" id="montant" value="<?=$getAF->MONTANT;?>" readonly class="form-control">
		</div>
		<div class="form-group">		
           <button type="submit"  class="btn btn-primary btn-block submit">Payer</button>
		</div>
	</form>
	