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
						<div class="col-md-4">
							<hr>
							<?php if ($getE->IMAGE == NULL) { ?>
								<form method="post" class="form-horizontal" action="Public/script/elevepic.php" id="eleve_pic" enctype="multipart/form-data">
									<div class="form-group">
										<label class="form-label" for="customFile">Ajouter une photo</label>
										<input type="file" required name="image" class="form-control" id="customFile" aria-label="Ajouter une photo">
									</div>
									<button class="btn btn-danger btn-xs" name="change"><span class="glyphicon  glyphicon-save"></span> Ajouter une photo</button>
								</form>
							<?php } else { ?>
								<img src="<?= $getE->IMAGE ?>" width="250px" class="img-thumbnail" alt="Photo de Profil">
							<?php } ?>
						</div>
						<div class="col-md-4">
							<b>Année Scolaire: </b> <?= $getE->AS ?><br>
							<hr>
							<h3>Info Générale</h3>
							<b>Matricule: </b> <?= $getE->MATRICULE ?><br>
							<b>Noms: </b> <?php echo $getE->NOM . ' ' . $getE->PRENOM; ?><br>
							<b>Sexe: </b><?php
											if ($getE->SEXE == 'M') {
												echo "Masculin";
											} else {
												echo "Feminin";
											}
											?> <br>
							<b>Classe: </b><span class="label label-info"> <?= $getE->CLASSE ?></span><br>
							<b>Option: </b> <?= $getE->OPT ?><br>
							<b>Section: </b> <?= $getE->SECTION ?><br>
							<b>Adresse: </b> <?= $getE->TEL ?><br>
							<b>Date de Nais.: </b> <?= $getE->DOB ?>
							<hr>
							<a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-print"></span> Visioner sa carte d'Elève</a>
						</div>
						<div class="col-md-4">
							<h3>Info sur le Tuteur</h3>
							<b>Père: </b> <br>
							<b>Téléphone: </b> <br>
							<b>Profession: </b> <br><br>
							<b>Mère: </b> <br>
							<b>Téléphone: </b> <br>
							<b>Profession: </b><br><br>
							<b>Autres: </b> <br>
							<b>Téléphone: </b> <br>
							<b>Profession: </b><br>
							<b>Lien: </b> <br>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php } else {
	  header('Location:index.php?page=non');
 } ?>

</html>