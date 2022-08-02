<?php $title = "Apercu du compte";
include 'Public/includes/header.php';
?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'Public/includes/menuadmin.php';
		include 'Public/includes/liste.php'; ?>
		<div class="col-sm-10">
			<div class="panel panel-default">
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> L'Elève <?php echo $getE->NOM . " " . $getE->PRENOM; ?> </b></div>
				<div class="panel-body">
					<div class="form-group">
						<div class='col-sm-12' id="message"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-pills">
								<li class="active"><a data-toggle="pill" href="#home">Situation générale</a></li>
								<li><a data-toggle="pill" href="#menu1">Informations Personnelles</a></li>
								<li><a data-toggle="pill" href="#menu2">Mes Classes</a></li>
								<li><a data-toggle="pill" href="#menu3">Rémarques</a></li>
								<li><a data-toggle="pill" href="#menu4">Congés et fériers</a></li>
								<li><a data-toggle="pill" href="#menu5">Evènements et sorties</a></li>
							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<div class="row" style="padding-top: 20px;">
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 800 ?>$</h1>
												Minerval Annuel
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 200 ?>$</h1>
												Minerval déjà payé
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 300 ?>$</h1>
												Reste à payer
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 200 ?>$</h1>
												Total Confondu
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= "2022-2023" ?></h1>
												Année scolaire
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 0 ?></h1>
												Punitions
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 0 ?></h1>
												Absences
											</div>
										</div>
										<div class="col-md-3 pt-20">
											<div class="alert alert-primary text-center">
												<h1>
													<?= 0 ?></h1>
												Convocations
											</div>
										</div>
									</div>
								</div>
								<div id="menu1" class="tab-pane fade">
									<div class="row" style="padding-top: 15px;">
										<div class="col-md-6">
											<h3>Info Générale</h3>
											<b>Matricule: </b> <?= $getE->MATRICULE ?><br>
											<b>NOM: </b> <?= $getE->NOM ?><br>
											<b>Prénom: </b> <?= $getE->PRENOM ?><br>
											<b>Sexe: </b><?= $getE->SEXE ?> <br>
											<b>Classe: </b> <?= $getE->CLASSE ?><br>
											<b>Option: </b> <?= $getE->OPT ?><br>
											<b>Section: </b> <?= $getE->SECTION ?><br>
											<b>Adresse: </b> Ngagara<br>
											<b>Tél: </b> <?= $getE->TEL ?><br>
											<b>Access: </b> <?= $getE->ACCESS ?><br>
											<b>Date de Nais.: </b> <?= $getE->DOB ?><br>
											<hr>
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
										<div class="col-md-6">
											<b>Année Scolaire: </b> <?= $getE->AS ?><br>
											<h3>Info sur le Paiement</h3>
											<u>*Inscription</u><br>
											<?php if ($getInsc) { ?>
												<?= $getInsc->DATEINS ?>: => <b><?= $getInsc->MONTANT ?>$</b><br>
												<hr>
											<?php } else {
												echo "<b>Non Inscrit</b>";
											} ?><br><br>
											Total à payer: <b>200$</b><br>
											Déjà payé: <b>16$</b><br>
											reste à payer: <b>184$</b>
											<hr>
											<h3>Absence</h3>
											<hr>

										</div>
									</div>
								</div>
								<div id="menu2" class="tab-pane fade">
									<h4><b>Classe: </b> <?= $getE->CLASSE ?></h4>
									<div class="table-responsive">
									<table class="table table-condensed table-bordered table-striped">
											<thead>
												<th>Matricule</th>
												<th>Section</th>
												<th>Option</th>
												<th>Classe</th>
												<th>Année Scolaire</th>
												<th>Mes paiements</th>
												<th>Mes Résultats</th>
											</thead>
											<tbody>
												<td><?= $getE->MATRICULE ?></td>
												<td><?= $getE->SECTION ?></td>
												<td><?= $getE->OPT ?></td>
												<td><?= $getE->CLASSE ?></td>
												<td><?= $getE->AS ?></td>
												<td>
													<a href="#" id='<?= $getE->ID ?>' class="btn btn-block btn-xs btn-danger detp">Détails</a>
												</td>
												<td>
													<a href="#" id='<?= $getE->ID ?>' class="btn btn-block btn-xs btn-primary resultats">Résultats</a>
												</td>
											</tbody>
									</table>
									</div>
								</div>
								<div id="menu3" class="tab-pane fade">
									<h3>Menu 3</h3>
									<p>The C Language is developed for creating system applications that direct
										interacts to the hardware devices such as drivers, kernals etc.</p>
								</div>
								<div id="menu4" class="tab-pane fade">
									<h3>Menu 4</h3>
									<p>The C Language is developed for creating system applications that direct
										interacts to the hardware devices such as drivers, kernals etc.</p>
								</div>
								<div id="menu5" class="tab-pane fade">
									<h3>Menu 5</h3>
									<p>The C Language is developed for creating system applications that direct
										interacts to the hardware devices such as drivers, kernals etc.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
</body>

</html>
<?php
include_once 'Public/modals/reseleve.php';
// include_once 'Public/modals/paieleve.php'; ?>
<script type="text/javascript" src="Public/ajax/etudiant.js"></script>
<script type="text/javascript" src="Public/ajax/joinniv.js"></script>