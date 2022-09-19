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
								<th>Cours</th>
								<th>Prof</th>
							</tr>
						</thead>
						
						<tbody>
							<?php						
							foreach ($getCc as $value) {
								echo "<tr><td><b>" . $value->COURS . "</b></td>";
								echo "<td>" . $value->NOMS . "</td></tr>";
							}
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