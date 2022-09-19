
<?php if(isset($_SESSION['logged'])) { ?>

<?php $title = "Liste de Présences";
include 'public/includes/header.php'; ?>
  <style> 
          input.largerCheckbox { 
              width: 25px; 
              height: 25px; 
          } 
         </style> 
<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>
			<div class="col-sm-9">
				<h3 class="page-header">Liste de Présences</h3>
					<div class="col-sm-12">
						<form id="formnotes" class="form" enctype="multipart/form-data" method="post">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Section</label>
										<select name="fac" id="fac" class='form-control' required>
											<option value=''>Choisir une section</option>
											<?php foreach ($getS as $f) { ?>
												<option value='<?= $f->IDSECT ?>'><?= $f->SECTION ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Option</label>
										<select name="dep" id="dep" class='form-control' required>
											<option value=''>Choisir une option</option>
										</select>
										<input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa" class='form-control'>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Classe</label>
										<select name="niv" id="niv" class='form-control' required>
											<option value=''>Choisir une classe</option>
										</select>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Date</label>
										<input type="date" id="date" name="date" required class="form-control">
									</div>
								</div>
									<div class="form-group">
										<label for="">&nbsp;</label>
										<button type="submit" class="btn btn-block btn-primary afficher" name="valider" id="afficher"><i class="fa fa-eye"></i> Afficher</button>
									</div>
							</div>
						</form>
					</div>
			</div>
			<?php if (isset($_POST['valider'])) : ?>
				<div class="col-sm-10">
					<div class="row">
							<div class="well">
								<h3 class="page-header"> Liste de Présence - Classe: <?=$getEC2->CLASSE?> du <?=$getEC2->DATEA?></h3>
									<table id="example" class="table table-condensed table-bordered" style="margin-top:5px">
										<thead>
											<tr>
												<th>Matricule</th>
												<th>Nom</th>
												<th>Prenom</th>
												<th>Classe</th>
												<th>Statut</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>

											<?php if (@$getEC) {
												foreach (@$getEC as $ec) { ?>
													<tr>
														<td><?=$ec->MATRICULE?></td>
														<td><?=$ec->NOM?></td>
														<td><?=$ec->PRENOM?></td>
														<td><?=$ec->CLASSE?></td>
														<td><?php 
															if($ec->STATUT=='A'){
																if($ec->SEXE=='M')
																echo "<label class='label label-danger'>Absent</label>";
																else echo "<label class='label label-danger'>Absente</label>";
															}
															else{
																if($ec->SEXE=='M')
																echo "<label class='label label-primary'>Présent</label>";
																else echo "<label class='label label-primary'>Présente</label>";
																}
															?></td>
														<td><?=$ec->DATEA?></td>
													</tr>
											<?php }
											} else {
												echo "<h3 class='alert alert-danger'>Aucun élève trouvé</h3>";
											} ?>
										</tbody>
									</table>
						</div>
					</div>
				</div>

			<?php endif ?>
	</div>
</body>
</html>

<script type="text/javascript" src="Public/ajax/join2.js"></script>
<script type="text/javascript" src="Public/ajax/absence.js"></script>

<?php include('Public/modals/detabs.php');?>

<?php } else {
	header('Location:index.php?page=non_a');
} ?>