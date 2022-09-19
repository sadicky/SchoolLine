
<?php if(isset($_SESSION['logged'])) { ?>

<?php $title = "Formulaire de Présence";
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
		<div class="row">
			<div class="col-sm-8">
				<h3 class="page-header">Formulaire de Présence</h3>
				<div class="form-group">
					<div class="col-sm-12">
						<div class='col-sm-12' id="message"></div>
						<form id="formnotes" class="form" enctype="multipart/form-data" method="post">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="">Section</label>
										<select name="fac" id="fac" class='form-control' required>
											<option value=''>Choisir une section</option>
											<?php foreach ($getS as $f) { ?>
												<option value='<?= $f->IDSECT ?>'><?= $f->SECTION ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label for="">Date</label>
										<input type="date" id="date" name="date" required class="form-control">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="">Option</label>
										<select name="dep" id="dep" class='form-control' required>
											<option value=''>Choisir une option</option>
										</select>
										<input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa" class='form-control'>
									</div>
									<div class="form-group">
										<label for="">&nbsp;</label>
										<button type="submit" class="btn btn-block btn-primary afficher" name="valider" id="afficher"><i class="fa fa-eye"></i> Afficher</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="">Classe</label>
										<select name="niv" id="niv" class='form-control' required>
											<option value=''>Choisir une classe</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Détail</label>
										<a href="index.php?page=detAbs" class="btn btn-block btn-danger"><span class="glyphicon glyphicon-list"></span> <b>Voir Details Absence</b></a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php if (isset($_POST['valider'])) : ?>
    		<form id="absences" class="form" enctype="multipart/form-data" method="post">
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-10">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										Liste d'Elèves
									</h4>
								</div>
								<div class="panel-body">
									<table id="example" class="table table-condensed table-bordered" style="margin-top:5px">
										<thead>
											<tr>
												<th>Nom</th>
												<th>Prenom</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php if (@$getEC) {
												foreach (@$getEC as $ec) { ?>
													<tr>
														<td><?=$ec->NOM?></td>
														<td><?=$ec->PRENOM?></td>
														<input type="hidden" value="<?=$ec->ID?>" name="eleve[]" id="eleve" class="form-control">
														<input type="hidden" value="<?=$_POST['date']?>" name="date" id="date">
														<input type="hidden" value="<?=$_POST['niv']?>" name="niv" id="niv">
														<input type="hidden" value="<?=$_POST['aa']?>" name="aa" id="aa">
														<td>
															<div class="checkbox">
															<input class="largerCheckbox abs" id="abs" name="p<?=$ec->ID?>" type="checkbox" />
															</div>
														</td>
													</tr>
											<?php }
											} else {
												echo "Aucun élève trouvé";
											} ?>
										</tbody>
									</table>
									<button type="submit" class="btn btn-primary btn-sm pull-right validate"><i class="fa fa-edit"></i> Enregistrer</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

			<?php endif ?>
		</div>
	</div>
</body>

</html>

<script type="text/javascript" src="Public/ajax/join2.js"></script>
<script type="text/javascript" src="Public/ajax/absence.js"></script>

<?php } else {
	header('Location:index.php?page=non_a');
} ?>