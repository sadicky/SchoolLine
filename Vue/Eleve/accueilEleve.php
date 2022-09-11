<?php @$title = $_SESSION['NOM'].' '.$_SESSION['PRENOM'];
include 'public/includes/header.php'; ?>

<?php  if (isset($_SESSION['logged'])){ ?>
<body>
	<div class="row">
		<?php include 'public/includes/menueleve.php'; ?>
		<div style="padding-top: 60px;margin: 8px;">
		<?php include 'Public/includes/listeeleve.php'; ?>
			<div class="container-fluid col-sm-10">
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
		</div>
	</div>
</body>
<?php }else{ 
header('Location:index.php?page=non');
 } ?>

</html>