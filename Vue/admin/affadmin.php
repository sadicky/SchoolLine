
<?php if(isset($_SESSION['logged'])) { ?>
<?php
$title = 'Les Admins';
include 'Public/includes/header.php';
?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
	<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>		
	<div class="col-sm-10">
	<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
		<div class="panel panel-default">
			<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Administrateurs</b></div>
			<div class="panel-body">
				<div class='col-sm-12' id="message"></div>
				<table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
					<thead>
						<tr>
							<th>Matricule</th>
							<th>Noms</th>
							<th>Tel</th>
							<th>E-Mail</th>
							<th>Access</th>
							<th>Activer</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($getAd as $value) {
							echo "<tr><td><b><a href='#'  id='$value->ID' >" . $value->MATRICULE . "</a></b></td>";
							echo "<td><b><a href='#'  id='$value->ID' >" . $value->NOM . " " . $value->PRENOM . "</a></b></td>";
							if ($value->TEL == '') {
								echo "<td> <b>Aucun</b></td>";
							} else {
								echo "<td>" . $value->TEL . "</td>";
							}if ($value->EMAIL == '') {
								echo "<td> <b>Aucun</b></td>";
							} else {
								echo "<td>" . $value->EMAIL . "</td>";
							}
							if ($value->ACCESS == 0) {
								echo "<td> <span class='label label-danger'>Innactif</span></td>";
							} else {
								echo "<td> <span class='label label-info'>Actif</span></td>";
							}
							if ($value->ACCESS == 0) {
								echo "<td><button type='button'  id='" . $value->ID . "' name='activer' class='btn btn-block btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";
							} else {
								echo "<td>	<button type='button'  id='" . $value->ID . "' name='desactiver' class='btn btn-block btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
			</td>";
							}
							echo "</tr>";
						}	?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
	</div>
</body>

</html>
<script>
	$(document).ready(function() {
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$(".myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>
<?php
include_once 'Public/modals/addadmin.php';
include_once 'Public/modals/modadmin.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="public/ajax/admin.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>