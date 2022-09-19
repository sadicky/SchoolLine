
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = 'Affichage Etudiant';
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="margin-top:60px; padding: 10px;">
		<?php include 'public/includes/menuadmin.php';include 'public/includes/liste.php'; ?>
		<div class="col-sm-10">
			<div class="panel panel-primary">
				<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Elèves</b></div>
				<div class="panel-body">
					<div class='col-sm-12' id="message"></div>
					<table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
						<thead>
							<tr>
								<th>Matricule</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Sexe</th>
								<th>Classe</th>
								<th>Option</th>
								<th>Section</th>
								<th>Etat</th>
								<th>Payer</th>
								<th>Notes</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							<?php
							foreach ($getE as $value) {
								echo "<tr><td><b><a href='index.php?page=elevedet&id=" . $value->MATRICULE . "' >" . $value->MATRICULE . "</b></a></td>";
								echo "<td><b>" . $value->NOM . "</b></td>";
								echo "<td><b>" . $value->PRENOM . "</b></td>";
								echo "<td>" . $value->SEXE . "</td>";
								echo "<td>" . $value->CLASSE . "</td>";
								echo "<td>" . $value->OPT . "</td>";
								echo "<td>" . $value->SECTION . "</td>";
								if ($value->ACCESS == 0) {
									echo "<td> <span class='label label-danger'>Innactif</span></td>";
								} else {
									echo "<td> <span class='label label-info'>Actif</span></td>";
								}
								if ($value->ACCESS == 0) {
									echo "<td><button type='button'  id='" . $value->ID . "' name='activer' class='btn btn-xs btn-danger btn-block payer' ><span class='glyphicon glyphicon-remove' ></span> Inscription</button></td>";
								} else {
									echo "<td>	<button type='button'  id='" . $value->ID . "' name='desactiver' class='btn btn-xs btn-block btn-default disabled'><span class='glyphicon glyphicon-ok' ></span> Admis(e)</button>
									 </td>";
								}
								echo "<td><button type='button' id='" . $value->ID . "' class='btn btn-block btn-xs btn-success notesind'><span class='glyphicon glyphicon-folder-open'></span></button>
								 </td>";
								 echo "<td><button type='button' id='" . $value->ID . "' class='btn btn-block btn-xs btn-primary view_data'><span class='glyphicon glyphicon-list'></span></button>
								  </td></tr>";
							}
							?>

					</table>
				</div>
			</div>
		</div>
	</div>

	</div>



</body>

</html>
<?php
include_once 'Public/modals/addetudiant.php';
include_once 'Public/modals/inscription.php';
include_once 'Public/modals/affetudiant.php';
include_once 'Public/modals/notesind.php';
// include_once 'Public/modals/resultat.php';
?>
<script type="text/javascript" src="Public/ajax/etudiant.js"></script>	
<script type="text/javascript" src="Public/ajax/join2.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>