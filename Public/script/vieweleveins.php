<?php

require_once('../../Model/prof.class.php');
require_once('../../Model/aa.class.php');
require_once('../../Model/section.class.php');
require_once('../../Model/option.class.php');
require_once('../../Model/classe.class.php');
require_once('../../Model/cours.class.php');
require_once('../../Model/af.class.php');
$getS= new Section();
$getO= new Opt();
$getP= new Prof();
$getC = new Classe();	
$getCo = new Cours();		
$getAa= new AA();
$frais = new AutresF();

$getO = $getO->getOptions();	
$getP = $getP->getProfsActif();
$getS = $getS->getSection();
$getC = $getC->getClasse();	
$getCo = $getCo->getsCours();
$getAa = $getAa->getAllAA();
$getAF= $frais->getAF();
?>
     
	 <form  method="post" id='formulaire' enctype="multipart/form-data">
      <div class="form-group">
		<select name="aa" id="aa" class='form-control'>
			<option value=''>Choisir une Annee Academique</option>
			<?php foreach ($getAa as $a) {?>
				<option value='<?=$a->ID?>'><?=$a->AS?></option>				
			<?php } ?>
		</select>
		</div>
		<div class="form-group">
		<select name="fac" id="fac" class='form-control'>
			<option value=''>Choisir une section</option>
			<?php foreach ($getS as $f) {?>
				<option value='<?=$f->IDSECT?>'><?=$f->SECTION?></option>				
			<?php } ?>
		</select>
		</div>
		
		<div class="form-group">
		<select name="dep" id="dep" class='form-control'>
			<option value=''>Choisir un Departement</option>
		</select>
		</div>
		
		<div class="form-group">
		<select name="niv" id="niv" class='form-control'>
			<option value=''>Choisir un Niveau</option>
		</select>
		</div>
		<div class="form-group">		
           <input type="text" id="cours" name="cours" class="form-control" placeholder='Cours'>
		</div>
		<div class="form-group">		
           <input type="text" name="pond" id='pond' class="form-control" placeholder='Pondération'>
		</div>
		<div class="form-group">		
           <input type="text" name="nbh" id="nbh" class="form-control" placeholder='NombreHeure'>
		</div>
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</form>
	
<script type="text/javascript" src="../../Public/ajax/join2.js"></script>