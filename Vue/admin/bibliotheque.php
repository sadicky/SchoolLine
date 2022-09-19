
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = 'Bibliothèque';
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="margin-top:60px; padding: 10px;">
		<?php include 'public/includes/menuadmin.php'; ?>
		<div class="col-sm-2">
			<ul class="list-group">
				<li class="list-group-item"> <a href="#categories" data-toggle="modal" data-target="#Categories">Catégories</a></li>
				<li class="list-group-item"> <a href="#auteurs" data-toggle="modal" data-target="#Auteur">Auteurs</a></li>
				<li class="list-group-item"> <a href="#livres" data-toggle="modal" data-target="#Livre">Livres</a></li>
				<li class="list-group-item"> <a href="#emprunt" data-toggle="modal" data-target="#Emprunt">Emprunt</a></li>
			</ul>
		</div>
		<div class="col-sm-10">
			<div class="form-group">
				<div class="col-sm-2">
				</div>
				<div class='col-sm-12' id="message"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="alert alert-success text-center">
					<span class="glyphicon glyphicon-list"></span>
					<h1>
						<span id="nbrlivredispo"></span></h1>
					Livres Disponible
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="alert alert-info back-widget-set text-center">
					<i class="glyphicon glyphicon-random"></i>
					<h1>
						<?php echo 4; ?></h1>
					Livres Empruntés
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="alert alert-warning back-widget-set text-center">
					<span class="glyphicon glyphicon-book"></span>
					<h1>
						<span id="nbrCat"></span></h1>
					Catégories
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="alert alert-danger back-widget-set text-center">
					<span class="glyphicon glyphicon-user"></span>
					<h1>
						<span id="nbrAut"></span></h1>
					Auteur
				</div>
			</div>
		</div>

	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading"><b>Les livres Disponibles</b></div>
					<div class="panel-body">
						<table class="table table-condensed table-bordered table-striped" id="dataTables-example">
							<thead>
								<tr>
									<th>ISBN</th>
									<th>LIVRE</th>
									<th>CATEGORIE</th>
									<th>AUTEUR</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($getLivres as $value) {
									echo "<tr><td><b> " . $value->ISBNNum . "</b></td>";
									echo "<td><b><a href='index.php?page=livrdet&id=" . $value->ID . "' >" . $value->DESIGNATION . "</b></a></td>";
									echo "<td><b>" . $value->LIBELLE . "</b></td>";
									echo "<td><b>" . $value->AUTEUR . "</b></td>";
									echo "<td>
										  <button type='button' name='update' id='" . $value->ID . "' class='btn btn-block btn-xs btn-primary view_data' title='Modifier Prof'><span class='glyphicon glyphicon-log-in'></span></button>
								 </td></tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading"><b>Les livres empruntés</b></div>
					<div class="panel-body">
						<table class="table table-condensed table-bordered table-striped" id="dataTables">
							<thead>
								<tr>
									<th>ISBN</th>
									<th>DESIGNATION</th>
									<th>CATEGORIE</th>
									<th>ELEVES</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>


<!-- Modal -->
<?php
include_once 'Public/modals/addcategorie.php';
include_once 'Public/modals/addauteur.php';
include_once 'Public/modals/addlivre.php';
include_once 'Public/modals/addemprunt.php';
?>
<script type="text/javascript" src="Public/ajax/bibcat.js"></script>
<script type="text/javascript" src="Public/ajax/bibaut.js"></script>
<script type="text/javascript" src="Public/ajax/livre.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>