<?php if (isset($_SESSION['logged'])) { ?>
	<?php $title = "Professeur";
	include 'Public/includes/header.php'; ?>

	<body>
		<div class="row" style="padding-top: 60px;margin: 8px;">
			<?php include 'public/includes/menuadmin.php';
			include 'public/includes/liste.php'; ?>
			<div class="col-sm-10">
				<div class="panel panel-default">
					<button type="button" data-toggle="modal" data-target="#ajoutprof" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
					<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Professeurs</b></div>
					<div class="panel-body">
						<div class='col-sm-12' id="message"></div>
						<table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
							<thead>
								<tr>
									<th>Matricule</th>
									<th>Nom et Prénom</th>
									<th>Sexe</th>
									<th>Nveau</th>
									<th>Tel</th>
									<th>Accès</th>
									<th>Activer/Desactiver</th>
									<th>Affecter</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($getP as $value) {
									echo "<tr><td><b><a href='index.php?page=profdet&id=" . $value->MATRICULE . "' > " . $value->MATRICULE . "</b></a></td>";
									echo "<td><b><a href='index.php?page=profdet&id=" . $value->MATRICULE . "' >" . $value->NOMS . "</b></a></td>";
									echo "<td><b>" . $value->SEXE . "</b></td>";
									echo "<td><b>" . $value->NIVEAU . "</b></td>";
									echo "<td><b>" . $value->TEL . "</b></td>";

									if ($value->ACCESS == 0) {
										echo "<td> <span class='label label-danger'>Innactif</span></td>";
									} else {
										echo "<td> <span class='label label-info'>Actif</span></td>";
									}
									if ($value->ACCESS == 0) {
										echo "<td><button type='button'  id='" . $value->ID . "' name='activer' class='btn btn-xs btn-default btn-block activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";
									} else {
										echo "<td>	<button type='button'  id='" . $value->ID . "' name='desactiver' class='btn btn-xs btn-block btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
									 </td>";
									}

									echo "<td>
								 <button type='button' name='update' id='" . $value->MATRICULE . "' class='btn btn-block btn-xs btn-danger view_p'
								 title='Lui affecter un cours'><span class='glyphicon glyphicon-random'></span></button>
						</td>";
									echo "<td>
										  <button type='button' name='update' id='" . $value->ID . "' class='btn btn-block btn-xs btn-primary view_data' title='Modifier Prof'><span class='glyphicon glyphicon-edit'></span></button>
								 </td></tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>

	</html>
	<?php

	include_once 'Public/modals/addprof.php';
	include_once 'Public/modals/modprof.php';
	include_once 'Public/modals/addprofcours.php'; ?>
	<script type="text/javascript" src="Public/ajax/prof.js"></script>
	<script type="text/javascript" src="Public/ajax/popprof.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>