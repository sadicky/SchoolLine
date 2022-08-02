<?php $title = "Cours";
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>
		<div class="col-sm-10">
			<div class="panel panel-default">
				<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter Un Cours</b></button>
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Cours</b></div>
				<div class="panel-body">
					<div class="form-group">
						<div class='col-sm-12' id="message"></div>
					</div>
					<div class="table-responsive">
						<table class="table table-condensed table-bordered table-striped no-wrap" id="example" style="margin-top:10px">
							<thead>
								<tr>
									<th>#</th>
									<th>Section</th>
									<th>Option</th>
									<th>Classe</th>
									<th>Cours</th>
									<th>Pondération</th>
									<th>Nombre d'Heures</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($getCo as $value) {
									echo "<tr><td><b><a href='#' id='$value->ID' title='$value->COURS' data-toggle='popover' class='afficher'  > COURS000" . $value->ID . "</b></a></td>";
									echo "<td><b>" . $value->SECTION . "</b></td>";
									echo "<td><b>" . $value->OPT . "</b></td>";
									echo "<td><b>" . $value->CLASSE . "</b></td>";
									echo "<td><b>" . $value->COURS . "</b></td>";
									echo "<td>" . $value->POND . "</td>";
									echo "<td>" . $value->NBH . "</td>";
									echo "<td>
											  <button type='button' name='update' id='" . $value->ID . "' class='btn btn-block btn-xs btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
									  </td></tr>";
								}


								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>


<?php
include_once 'Public/modals/addcours.php'; ?>
<script type="text/javascript" src="Public/ajax/cours.js"></script>
<script type="text/javascript" src="Public/ajax/join2.js"></script>