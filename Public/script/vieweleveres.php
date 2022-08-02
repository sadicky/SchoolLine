<?php

require_once '../../Model/notes.class.php';
$notes = new Note();
$id = $_POST['id'];
$getN = $notes->getNotesPeriode($id, 1);
// $getInsc = $getEleve->getEleveIns($id);
// var_dump($getN);
?>
<div class="row">
	<div class="col-md-5">
		<b class="text-danger">Résultats par période pour la Classe:</b>
		<div class="table-responsive">
			<table class="table table-bordered table-condensed table-stripped">
				<thead>
					<th>Périodes</th>
					<th>Intérrogations</th>
				</thead>
				<tbody>
					<tr>
						<td>Période 1</td>
						<td><button id="1" class="btn btn-xs btn-block btn-info p1">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Période 2</td>
						<td><button id="2" class="btn btn-xs btn-block btn-info p2">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Période 3</td>
						<td><button id="4" class="btn btn-xs btn-block btn-info p3">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Période 4</td>
						<td><button id="5" class="btn btn-xs btn-block btn-info p4">Voir les détails</button></td>
					</tr>
				</tbody>
			</table>
		</div>
		<hr>
		<b class="text-danger">Résultats d'Examens:</b>
		<div class="table-responsive">
			<table class="table table-bordered table-condensed table-stripped">
				<thead>
					<th>Semestres</th>
					<th>Examens</th>
				</thead>
				<tbody>
					<tr>
						<td>Semestre 1</td>
						<td><button class="btn btn-xs btn-block btn-info">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Semestre 2</td>
						<td><button class="btn btn-xs btn-block btn-info">Voir les détails</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-7">
		<div class="resp1"></div>
		<div class="resp2"></div>
		<div class="resp3"></div>
		<div class="resp4"></div>
		<div class="ress1"></div>
		<div class="ress2"></div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$(".p1").click(function(event) {
			event.preventDefault();
			var id = $(this).attr("id");
			$.post(
				"Public/script/resp1.php",
				function(donnees) {
					$(".resp1").html(donnees);
					$(".resp2").hide();
				}
			);
			return false;
		});
		
		$(".p2").click(function(event) {
			event.preventDefault();
			var id = $(this).attr("id");
			$.post(
				"Public/script/resp2.php",
				function(donnees) {
					$(".resp2").html(donnees);
					$(".resp1").hide();
				}
			);
			return false;
		});

	});
</script>