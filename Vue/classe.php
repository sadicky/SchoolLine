<?php $title = "Classe";
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>
		<div class="col-sm-10">
			<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter une classe</b></button>
			<div class="panel panel-default">
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Classes</b></div>
				<div class="panel-body">
					<div class="form-group">
						<div class='col-sm-12' id="message"></div>
					</div>					
					<div class="table-responsive">
					<table class="table table-condensed table-bordered table-striped" id="dataTables-example" style="margin-top:20px">
						<thead>
							<tr>
								<th>#</th>
								<th>Classe</th>
								<th>Option</th>
								<th>Section</th>
								<th>Access</th>
								<th>Activer</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($getC as $value) {
								echo "<tr><td><b><a href='#' data-toggle='popover' class='afficher'  id='$value->ID' >CLASSE00" . $value->ID . "</a></b></td>";
								echo "<td><b><a href='#' data-toggle='popover' class='afficher' data-trigger='focus' id='$value->ID' > " . $value->CLASSE . "</a></b></td>";
								echo "<td>" . $value->OPT . "</td>";
								echo "<td>" . $value->SECTION . "</td>";
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
								echo "<td>
										 <a href='' type='submit' name='update' class='btn btn-block btn-xs btn-info update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></a>
								 </td></tr>";
							}

							?>
						</tbody>
					</table>
					</div>
					<button type="button" class="btn btn-danger">Imprimer</button>
				</div>
			</div>
</body>

</html>
<?php
include_once 'Public/modals/addcla.php'; ?>
<script type="text/javascript" src="Public/ajax/classe.js"></script>
<script type="text/javascript" src="Public/ajax/joinniv.js"></script>