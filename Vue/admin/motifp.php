
<?php if(isset($_SESSION['logged'])) { ?>
<?php
$title = 'Autre Motif de Paiement';
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php';
		?>
		<div class="col-sm-10">
			<h3>Autres Motif de Paiement</h3>
			<div class="form-group">
				<div class="panel panel-default">
					<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
					<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Elèves</b></div>
					<div class="panel-body">
						<div class='col-sm-12' id="message"></div>
						<table class="table table-condensed table-bordered table-striped" id="dataTables-example" style="margin-top:20px">
							<thead>
								<tr>
									<th>#</th>
									<th>Motif</th>
									<th>Montant</th>
									<th>Actions</th>
								</tr>
							</thead>

							<tbody>
								<?php
									foreach ($getAF as $value) {
										echo "<tr><td><b>".$value->IDAF."</b></td>";
										echo "<td>".$value->MOTIF."</td>";
										echo "<td><b><a href='#'>".$value->MONTANT."$</b></a></td>";
											 echo "<td>
													  <button type='button' name='update' id='".$value->IDAF."' class='btn btn-xs btn-block btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
											  </td></tr>";
										   }
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</body>

</html>
<?php
include_once 'Public/modals/addmotifp.php';
include_once 'Public/modals/modadmin.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="Public/ajax/motifp.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>