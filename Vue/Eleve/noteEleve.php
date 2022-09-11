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
								<b class="text-danger">Résultats pour la Classe:<?= $getInsc->CLASSE ?></b><hr>
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
								<div class="resp"></div>
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