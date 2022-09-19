<?php $title = $_SESSION['NOM'] . ' ' . $_SESSION['PRENOM'];
include 'public/includes/header.php'; ?>
<?php if (isset($_SESSION['logged'])) { ?>

	<body>
		<div class="row">
			<?php include 'Public/includes/menueleve.php'; ?>
			<div style="padding-top: 60px;margin: 8px;">
				<?php include 'Public/includes/listeeleve.php'; ?>
				<div class="container-fluid col-sm-9">
					<h3 class='page-header'> Absences Totaux: <?=$getAbs->STATUT?></h3>
					<div class="row well" style="padding-top: 15px;">	
					<?php if($getE){	?>					
					<table class="table table-condensed table-bordered table-striped" id="example" style="margin-top:20px">
					<thead>
							<tr>
								<th>Date</th>
								<th>Statut</th>
							</tr>
						</thead>
						
						<tbody>
						<?php					
								foreach ($getE as $value) {?>
									<tr>
									<td><?=$value->DATEA?></td>
									<td><?php 
										if($value->STATUT=='A'){
											if($value->SEXE=='M')
											echo "<label class='label label-danger'>Absent</label>";
											else echo "<label class='label label-danger'>Absente</label>";
										}
										else{
											if($value->SEXE=='M')
											echo "<label class='label label-primary'>Présent</label>";
											else echo "<label class='label label-primary'>Présente</label>";
											}
										?></td>
										</tr>
								<?php }	?>
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