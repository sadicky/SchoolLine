<?php

require_once '../../Model/notes.class.php';
require_once '../../Model/eleve.class.php';
$notes = new Note();
$getEleve = new Eleve();
$id = $_POST['id'];
// $getN = $notes->getNotesPeriode($id, 1);
$getInsc = $getEleve->getEleveId2($id);
// var_dump($getN);
?>
<div class="row">
	<div class="col-md-5">
		<b class="text-danger">Résultats par période pour la Classe:<?=$getInsc->CLASSE?></b>
		<div class="table-responsive">
			<table class="table table-bordered table-condensed table-stripped">
				<thead>
					<th>Périodes</th>
					<th>Intérrogations</th>
				</thead>
				<tbody>
					<tr>
						<td>Période 1</td>
						<td><button onclick="getPeriode(this.value);" id="<?=$getInsc->ID?>" name="idp" class="btn btn-xs btn-block btn-info p1">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Période 2</td>
						<td><button onclick="getPeriode(this.value);" id="2" name="idp" class="btn btn-xs btn-block btn-info p2">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Période 3</td>
						<td><button onclick="getPeriode(this.value);" id="4" name="idp" class="btn btn-xs btn-block btn-info p3">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Période 4</td>
						<td><button onclick="getPeriode(this.value);" id="5" name="idp" class="btn btn-xs btn-block btn-info p4">Voir les détails</button></td>
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
						<td><button id="3" onclick="getPeriode(this.value);" name="idp" class="btn btn-xs btn-block btn-info">Voir les détails</button></td>
					</tr>
					<tr>
						<td>Semestre 2</td>
						<td><button id="6" onclick="getPeriode(this.value);" name="idp" class="btn btn-xs btn-block btn-info">Voir les détails</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-7">
		<div class="resp"></div>
	</div>
</div>
<script>
	function getPeriode(val) {
		$.ajax({
			type: "POST",
			url: "Public/script/resp.php",
			data: 'periode=' + val,
			success: function(data) {
				$(".resp").html(data);
			}
		});
	}
</script>