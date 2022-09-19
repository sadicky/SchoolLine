
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = 'Bibliothecaire';
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php';
		?>
		<div class="col-sm-10">
		<div class="panel panel-default">
			<button type="button" data-toggle="modal" data-target="#ajoutbib" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
			<div class="panel-heading"><b><span class="glyphicon glyphicon-book"></span> Les Bibliothecaires</b></div>
			<div class="panel-body">
				<div class='col-sm-12' id="message"></div>
				<table class="table table-condensed table-bordered table-striped" id="dataTables-example">
					<thead>
						<tr>
							<th>Matricule</th>
							<th>Noms</th>
							<th>Tel</th>
							<th>Sexe</th>
							<th>Acces</th>
							<th>Activer</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($getBib as $value) {
							echo "<tr><td><b><a href='#' id='$value->ID' title='$value->NOMS' data-toggle='popover' class='afficher'  >" . $value->MAT . "</b></a></td>";
							echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >" . $value->NOMS . "</b></a></td>";
							echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >" . $value->TEL . "</b></a></td>";
							echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >" . $value->SEXE . "</b></a></td>";
							if ($value->ACCESS == 0) {
								echo "<td> <span class='label label-danger'>Innactif</span></td>";
							} else {
								echo "<td> <span class='label label-info'>Actif</span></td>";
							}
							if ($value->ACCESS == 0) {
								echo "<td><button type='button'  id='" . $value->ID . "' name='activer' class='btn btn-xs btn-block btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";
							} else {
								echo "<td>	<button type='button'  id='" . $value->ID . "' name='desactiver' class='btn  btn-block btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
								</td>";
							}
							echo "<td>
								<button type='button' name='update' id='" . $value->ID . "' class='btn btn-xs btn-info update' title='Modifier Bibliothecaire'><span class='glyphicon glyphicon-edit'></span></button>
								<button type='button' name='delete' id='" . $value->ID . "' class='btn btn-xs btn-danger delete'  title='Supprimer Admin'><span class='glyphicon glyphicon-trash'></span></button>
							 </td></tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
</body>

</html>
<?php
include_once 'Public/modals/addbib.php';
include_once 'Public/modals/modbib.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="Public/ajax/bib.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>