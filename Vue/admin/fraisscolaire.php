
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = 'Frais Scolaire';
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>

		<div class="col-sm-10">
			<div class="panel panel-default">
				<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter le Frais</b></button>
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Frais Academiques</b></div>
				<div class="panel-body">
					<div class="form-group">
						<div class='col-sm-12' id="message"></div>
					</div>
					<div class="table-responsive">
					<table class="table table-condensed table-bordered table-striped no-wrap" id="example" style="margin-top:20px">
						<thead>
							<tr>
								<th>#</th>
								<th>Frais</th>
								<th>Année Scolaire</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($getFs as $value) { ?>
								<tr>
									<td><b><?= $value->IDM ?></b></td>
									<td><b><a href='#'><?= $value->MONTANT ?>$</b></a></td>
									<td><?=$getAs->AS?></td>
									<td>
										<button type='button' name='update' id='" . $value->ID . "' class='btn btn-xs btn-info btn-block update' data-toggle='modal' data-target='#Update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
									</td>
								</tr>
							<?php	}	?>

						</tbody>
					</table>
					</div>
				</div>
			</div>
</body>

</html>
<?php
include_once 'Public/modals/addfs.php';
?>
<script type="text/javascript" src="Public/ajax/fs.js"></script>
<script type="text/javascript" src="Public/ajax/join2.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>