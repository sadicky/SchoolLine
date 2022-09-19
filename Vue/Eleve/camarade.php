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
					<table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
					<thead>
							<tr>
								<th>Photo</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Sexe</th>
							</tr>
						</thead>
						
						<tbody>
							<?php if($getCam):					
							foreach ($getCam as $value) {
								echo "<tr><td><img src='$value->IMAGE' class='img-circle' height='30px' alt='aucune image' width='30px'></td>";
								echo "<td><b>" . $value->NOM . "</b></td>";
								echo "<td><b>" . $value->PRENOM . "</b></td>";
								echo "<td>" . $value->SEXE . "</td></tr>";
							}
							else:
								echo "<h3>Aucun camarade</h3>";
							endif;
							?>
					</table>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php } else {
	  header('Location:index.php?page=non');
 } ?>

</html>