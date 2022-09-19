<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Nouvelle Inscription</h4>
				<hr>
				<b><i class="text-danger">Les informations suivies d'un asteriste sont obligatoires</i></b>
			</div>
			<div class="modal-body">
				<form method="post" id="formulaire" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<b><label>Nom: </label> <span class="text-danger">*</span></b>
								<input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" required>
							</div>
							<div class="form-group">
								<b><label>Sexe: </label> <span class="text-danger">*</span></b>
								<select class="form-control" name="sexe" id="sexe">
									<option>M</option>
									<option>F</option>
								</select>
							</div>
							<div class="form-group">
							<input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa" class='form-control'>
							</div>
							<div class="form-group">
								<b><label>Section: </label> <span class="text-danger">*</span></b>
								<select name="fac" id="fac" class='form-control'>
									<option value=''>Choisir une section</option>
									<?php foreach ($getS as $f) { ?>
										<option value='<?= $f->IDSECT ?>'><?= $f->SECTION ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<b><label>Prenom: </label> <span class="text-danger">*</span></b>
								<input type="text" placeholder="Prénom" class="form-control" id="prenom" name="prenom" required>
							</div>
							<div class="form-group">
								<label><b>Adresse:</b></label>
								<input class="form-control" placeholder="adresse" type="tel" id="tel" name="tel">
							</div>
							<div class="form-group">
								<b><label>Option: </label> <span class="text-danger">*</span></b>
								<select name="dep" id="dep" class='form-control'>
									<option value=''>Choisir une option</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label><b>Provenance: </b></label>
								<input type="text" class="form-control" placeholder="Ecole de provenance" name="eco" id="eco">
							</div>
							<div class="form-group">
								<b><label>Né(e) à: </label></b>
								<input type="text" class="form-control" placeholder="Né(e) à" id="email" name="email">
							</div>

							<div class="form-group">
								<b><label>Classe: </label> <span class="text-danger">*</span></b>

								<select name="niv" id="niv" class='form-control'>
									<option value=''>Choisir un Niveau</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<b><label>Matricule : </label> <span class="text-danger"></span></b>
								<?php
								$string = "0123456789";
								$string = str_shuffle($string);
								$titre = substr($string, 0, 8);
								?>
								<input type="text" class="form-control" value="<?php echo "EL-" . $titre ?>" name="mat" id="mat" readonly>
							</div>
							<div class="form-group">
								<b><label>Date de Naissance: </label></b>
								<input class="form-control" type="date" name="dob" id="dob">
							</div>
							<div class="form-group">
								<label># </label>
								<button type="submit" class="btn btn-primary btn-block btn-md">Valider l'inscription</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>