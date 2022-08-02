<?php
require_once '../../Model/jc.class.php';
$getP = new JC();
$id = $_POST['id'];
$getJc = $getP->getJcId($id);
?>
<form  method="POST" id='formjc' enctype="multipart/form-data">
  <input type="hidden" value="<?= $getJc->IDJC ?>" name="id" id="id" />
  <div class="form-group">
  <label for="datedeb">Date Début</label>
  <input type="date" name="datedeb" value="<?=$getJc->DATEDEB?>" id="datedeb" class='form-control'>
  </div>
  <div class="form-group">
  <label for="datefin">Date Fin</label>
  <input type="date" name="datefin" value="<?=$getJc->DATEFIN?>" id="datefin" class='form-control'>
  </div>
  <div class="form-group">
  <label for="motif">Motif</label>
  <input type="text" name="motif" value="<?=$getJc->MOTIF?>" id="motif" class='form-control' placeholder="Motif">
  </div>
  <div class="form-group">		
	 <button type="submit" class="btn btn-danger btn-block submit">Modifier ce jour du congé</button>
  </div>
</form>