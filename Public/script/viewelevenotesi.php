<?php

require_once '../../Model/eleve.class.php';
require_once '../../Model/notes.class.php';
require_once '../../Model/cours.class.php';
$notes = new Note();
$getEleve = new Eleve();
$getC = new Cours();
$id = $_POST['id'];
$getN = $notes->getSemestre();
$getInsc = $getEleve->getEleveIns($id);
$getEId = $getEleve->getEleveId2($id);

$idclasse=$getEId->IDCLA;
$getCC = $getC->getCoursClasse($idclasse);
// var_dump($getCC);

?>
<form id="formnotesi" class="form" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Semestre</label>
					<input type="hidden" value="<?= $getInsc->ID; ?>" id="id" name="id">
					<select id="sem" name="sem" class="form-control select2" required>
						<option>Choisir un semestre</option>
						<?php
						foreach ($getN as $a) { ?>
							<option value='<?= $a->ID ?>'><?= $a->SEMESTRE ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Période</label>
					<select id="periode" name="periode" class="form-control select2" required>
						<option>Choisir Une Période</option>
					</select>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Cours/Matières</label>
					<select id="cours" name="cours" required class="form-control select2">
						<option>Choisir Un cours</option>
						<?php foreach ($getCC as $a) { ?>
							<option value='<?= $a->ID ?>'><?= $a->COURS ?></option>
						<?php } ?>
					</select>

				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Type</label>
					<select id="type" name="type" required class="form-control select2">
						<option value='Devoir'>Devoir</option>
						<option value='Interro'>Interro</option>
						<option value='Examen'>Examen</option>
					</select>

				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">

					<label for="">Note demandée</label>
					<input type="number" id="noted" name="noted" required class="form-control">

				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="">Note Obtenue</label>
					<input type="text" id="notes" name="notes" required class="form-control">

				</div>
			</div>
					<label for=""></label>
					<button type="submit" name="valider" class="btn btn-danger btn-block valider">Ajouter note</button>
				
		</div>
	</div>
</form>

<script type="text/javascript" src="Public/ajax/joinnote.js"></script>