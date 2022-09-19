<?php $title = $_SESSION['NOM'] . ' ' . $_SESSION['PRENOM'];
include 'public/includes/header.php'; ?>
<?php if (isset($_SESSION['logged'])) { ?>

	<body>
		<div class="row">
			<?php include 'Public/includes/menueleve.php'; ?>
			<div style="padding-top: 60px;margin: 8px;">
				<?php include 'Public/includes/listeeleve.php'; ?>
				<div class="container-fluid col-sm-9">
					<div class="row well" style="padding-top: 15px;">
						<div class="row">
							<div class="col-md-5">
								<b class="text-danger">Résultats pour la Classe:<?= $getInsc->CLASSE ?></b>
								<hr>
								<form id="formnotesi" class="form-horizontal" method="post">
									<div class="row">
										<div class="col-md-12">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="">Semestre</label>
													<input type="hidden" value="<?= $getInsc->ID; ?>" id="id" name="id">
													<select id="sem" name="sem" class="form-control select2" required>
														<option>Choisir un semestre</option>
														<?php
														foreach ($getN as $a) { ?>
															<option value='<?= $a->ID ?>'><?= $a->SEMESTRE ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="">Période</label>
													<select id="periode" name="periode" class="form-control select2" required>
														<option>Choisir une période</option>
													</select>
												</div>
											</div>
											<label for=""></label>
											<button type="submit" name="valider" class="btn btn-primary btn-block valider">Voir Notes</button>

										</div>
									</div>
								</form>
								<hr>
							</div>
							<div class="col-md-7">
								<?php if (isset($_POST['valider'])) :
									if ($notesPeriode2 != null) { ?>
										Résultat du 
										<b><?= $notesPeriode2->SEMESTRE . ' : ' . $notesPeriode2->PERIODE ?></b>
										<hr>

									<?php }
									?>

									<table class="table table-hover table-bordered">
										<thead>
											<tr style="text-align: center">
												<th style="text-align: center">#</th>
												<th> Cours</th>
												<th style="text-align: center">Point Obtenu</th>
												<th style="text-align: center">Demandé</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// Code for result
											$totlcount = 0;
											$totlpos = 0;

											$cnt = 1;
											// var_dump($notesPeriode);
											if ($countrow = count($notesPeriode) > 0) {
												foreach ($notesPeriode as $result) {
											?>
													<tr>
														<th scope="row" style="text-align: center"><?php echo htmlentities($cnt); ?></th>
														<th><?php echo htmlentities($result->COURS); ?></th>
														<td style="text-align: center"><?php echo htmlentities($totalmarks = $result->NOTES); ?></td>
														<td style="text-align: center"><?php echo htmlentities($totalpos = $result->NOTED); ?></td>
													</tr>
												<?php
													$totlcount += $totalmarks;
													$totlpos += $totalpos;
													$cnt++;
												}
												?>
												<tr>
													<th scope="row" colspan="2" style="text-align: center">Total général</th>
													<td colspan="2" style="text-align: center"><b><?php echo htmlentities($totlcount); ?></b> / <b><?php echo htmlentities($outof = $totlpos); ?></b></td>
												</tr>


											<?php } else { ?><hr>
												<div class="alert alert-warning left-icon-alert" role="alert">
													<strong>Désolé!</strong> Résultat indisponible
												<?php }
												?>
												</div>

							</div>



							</tbody>
							</table>
						<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
<?php } else {
	header('Location:index.php?page=non');
} ?>

<script type="text/javascript" src="Public/ajax/joinnote.js"></script>

</html>