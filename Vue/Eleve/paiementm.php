<?php $title = $_SESSION['NOM'] . ' ' . $_SESSION['PRENOM'];
include 'public/includes/header.php'; ?>
<?php if (isset($_SESSION['logged'])) { ?>

	<body>
		<div class="row">
			<?php include 'Public/includes/menueleve.php'; ?>
			<div style="padding-top: 60px;margin: 8px;">
				<?php include 'Public/includes/listeeleve.php'; ?>
				<div class="container-fluid col-sm-9">
					<?php 
					// $rest = "abcdef";
					// $rest = substr($rest, 0,1);
					//  echo $rest; ?>
					<h3 class='page-header'>Mes Paiements Totaux</h3>
					<div class="row well" style="padding-top: 15px;">	
					<?php if($getE){	?>					
					<table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
					<thead>
							<tr>
								<th>N° RECU</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Montant</th>
								<th>Details</th>
								<th>Date</th>
							</tr>
						</thead>
						
						<tbody>
						<?php					
								foreach ($getE as $value) {
									echo "<tr>";
									echo "<td>" . $value->RECU . "</td>";
									echo "<td>" . $value->NOM . "</td>";
									echo "<td>" . $value->PRENOM . "</td>";
									echo "<td><b class='text-muted'>" . $value->PMONTANT. "$</b></td>";
									echo "<td>" . $value->DET . "</td>";
									echo "<td>" . $value->DATEA . "</td></tr>";
								}					
							?>
					</table>
					<?php 
							}else{
								echo "<h2>Aucun Paiement effectué</h2>";
							}?>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php } else {
	  header('Location:index.php?page=non');
 } ?>

</html>