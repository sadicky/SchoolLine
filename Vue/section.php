<?php $title = "Section";
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php';
		?>

		<div class="col-sm-10">
			<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter Une Section</b></button>
			<div class="panel panel-default">
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Sections</b></div>
				<div class="panel-body">
					<div class="form-group"><br>
						<div class='col-sm-12' id="message"></div>
					</div>

					<div class="table-responsive">
						<table class="table table-condensed table-bordered table-striped no-wrap" id="dataTables-example" style="margin-top:20px">
							<thead>
								<tr>
									<th>#</th>
									<th>Sections</th>
									<th>Access</th>
									<th>Activer/Desactiver</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($getSect as $value) {
									echo "<tr><td><b><a href='#' data-toggle='popover' class='afficher'  id='$value->IDSECT' >SECT00" . $value->IDSECT . "</a></b></td>";
									echo "<td><b><a href='#' data-toggle='popover' class='afficher' data-trigger='focus' id='$value->IDSECT' > <b>" . $value->SECTION . "</b></a></td>";
									if ($value->ACCESS == 0) {
										echo "<td> <span class='label label-danger'> Innacif</span></td>";
									} else {
										echo "<td> <span class='label label-info'>Actif</span></td>";
									}
									if ($value->ACCESS == 0) {
										echo "<td><button type='button' id='" . $value->IDSECT . "' name='activer' class='btn btn-block btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span><b> Activer?</b></button></td>";
									} else {
										echo "<td>	<button type='button'  id='" . $value->IDSECT . "' name='desactiver' class='btn btn-block btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> <b>Desactiver?</b></button>
			</td>";
									}
									echo "<td>
	     		<a href='' type='submit' name='update' class='btn btn-block btn-xs btn-info update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></a>
		 </td></tr>";
								}
								?>
							</tbody>
						</table>
					</div>
					<button type="button" data-toggle="tooltip" data-placement="top" title="Imprimer" class="btn btn-danger">Imprimer</button>
				</div>
			</div>
</body>

</html>


<script>
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});

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
include_once 'Public/modals/addsect.php'; ?>
<script type="text/javascript" src="Public/ajax/section.js"></script>