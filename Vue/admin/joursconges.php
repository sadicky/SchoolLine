
<?php if(isset($_SESSION['logged'])) { ?><?php
$title = 'Jours Congé';
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>
		<div class="col-sm-10">
			<div class="panel panel-default">
				<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Jours Congés</b></div>
				<div class="panel-body">
					<div class='col-sm-12' id="message"></div>
					<table class="table table-condensed table-responsive table-bordered" id="dataTables-example" style="margin-top:20px">
						<thead>
							<tr>
								<th>Date Debut</th>
								<th>Date Fin</th>
								<th>Nbre de Jours</th>
								<th>Motif</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							<?php
							foreach ($Jco as $value) {
								echo "<tr><td>" . $value->DATEDEB . "</td>";
								echo "<td>" . $value->DATEFIN . "</td>";
								$deb = strtotime($value->DATEDEB);
								$fin = strtotime($value->DATEFIN);
								$dif =  $fin - $deb;
								$days = abs(floor($dif / (60 * 60 * 24))) + 1;
								echo "<td>" . $days . "</td>";
								echo "<td>" . $value->MOTIF . "</td>";
								echo "<td>
								<button type='button' name='update' id='" . $value->IDJC . "' class='btn btn-xs btn-danger btn-block view_jc'><span class='glyphicon glyphicon-edit'></span></button>
								</td></tr>";
							}
							?>
						</tbody>
					</table>
					<button type="button" data-toggle="tooltip" data-placement="top" title="Imprimer" class="btn btn-danger">Imprimer</button>
				</div>
			</div>
</body>

</html>
<?php
include_once 'Public/modals/addjc.php';
include_once 'Public/modals/modjc.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="public/ajax/jc.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>