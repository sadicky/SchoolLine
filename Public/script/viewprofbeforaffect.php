<?php

$id = $_POST['id'];
require_once '../../Model/prof.class.php';
require_once('../../Model/aa.class.php');
require_once('../../Model/section.class.php');
require_once('../../Model/option.class.php');
require_once('../../Model/classe.class.php');
require_once('../../Model/cours.class.php');
$getP = new Prof();		
$getAa= new AA();
$getS= new Section();
$getO= new Opt();
$getC = new Classe();	
$getCo = new Cours();

$getO = $getO->getOptions();	
$getPa = $getP->getProfsActif();
$getS = $getS->getSection();
$getC = $getC->getClasse();	
$getCo = $getCo->getsCours();
$getAa = $getAa->getAllAA();
$getPr = $getP->getProfs();
$getPi = $getP->getProfId($id);
// var_dump($getPi->ID);
?>
<form method="post" id='formaffcours' enctype="multipart/form-data">
  <input type="hidden" value="<?= $getPi->ID ?>" name="id" id="id" />
  <div class="form-group">
    <select name="aa" id="aa" class='form-control'>
      <option value=''>Choisir une Annee Scolaire</option>
      <?php foreach ($getAa as $a) { ?>
        <option value='<?= $a->ID ?>'><?= $a->AS ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <select name="fac" id="fac" class='form-control'>
      <option value=''>Choisir une section</option>
      <?php foreach ($getS as $f) { ?>
        <option value='<?= $f->IDSECT ?>'><?= $f->SECTION ?></option>
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
    <select name="cours" id="cours" class='form-control'>
      <option value=''>Choisir un Cours</option>
    </select>
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block submit">Valider <span class="glyphicon glyphicon-ok"></span></button>
  </div>
</form>


<script type="text/javascript" src="Public/ajax/join3.js"></script>