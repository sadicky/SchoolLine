<?php

require_once '../../Model/prof.class.php';
$getP = new Prof();
session_start();
$id = $_POST['id'];
$_SESSION['id'] = $id;
$getPi = $getP->getProfId($id);
?>
<form method="post" id="formprof" enctype="multipart/form-data">
  <input type="hidden" value="<?= $getPi->ID ?>" name="id" id="id" />
  <div class="row">
    <div class="col-sm-3">
      <div class="form-group">
        <b><label>Noms : </label> <span class="text-danger">*</span></b>
        <input type="text" class="form-control" value="<?= $getPi->NOMS ?>" placeholder="noms" name="noms" id="noms" required>
      </div>
      <div class="form-group">
        <b><label>Sexe: </label> <span class="text-danger">*</span></b>
        <select class="form-control" name="sexe" id="sexe">
          <?php if ($getPi->SEXE == 'F') { ?>
            <option value="<?= $getPi->SEXE ?>" selected><?= $getPi->SEXE ?></option>
            <option value="M">M</option> <?php
                                        } else { ?>
            <option value="<?= $getPi->SEXE ?>" selected><?= $getPi->SEXE ?></option>
            <option value="F">F</option>

          <?php }
          ?>
        </select>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
        <b><label>Matricule : </label> <span class="text-danger"></span></b>
        <input type="text" class="form-control" value="<?= $getPi->MATRICULE ?>" name="titre" id="titre" readonly>
      </div>
      <div class="form-group">
        <label><b>Téléphone:</b></label>
        <input class="form-control" value="<?= $getPi->TEL ?>" type="tel" name="tel" id="tel">
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
        <label><b>E-MAIL: </b></label>
        <input type="email" class="form-control" value="<?= $getPi->EMAIL ?>" placeholder="e-mail" name="email" id="email">
      </div>
      <div class="form-group">
        <b><label>Niveau: </label> <span class="text-danger"></span></b>
        <select class="form-control" value="<?= $getPi->NIVEAU ?>" name="niveau" id="niveau">
          <option value="<?= $getPi->NIVEAU ?>" selected><?= $getPi->NIVEAU ?></option>
          <option value="A2">A2</option>
          <option value="Baccalauréat">Baccalauréat</option>
          <option value="Grade">Grade</option>
          <option value="Licence">Licence</option>
          <option value="Master">Master</option>
          <option value="Maitrise">Maitrise</option>
          <option value="Doctorat">Doctorat</option>
        </select>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
        <b><label>Date de Naissance: </label></b>
        <input class="form-control" type="date" value="<?= $getPi->DOB ?>" name="dob" id="dob">
      </div>
      <div class="form-group">
        <b><label># </label></b>
        <button type="submit" class="btn btn-primary btn-block update"><span class="glyphicon glyphicon-download"></span> <b>Modifier</b></button>
      </div>
    </div>
  </div>
</form>