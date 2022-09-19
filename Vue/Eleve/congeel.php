
<?php $title = 'Jours de Congés';
include 'public/includes/header.php'; ?>
<?php if (isset($_SESSION['logged'])) { ?>

	<body>
		<div class="row">
			<?php include 'Public/includes/menueleve.php'; ?>
			<div style="padding-top: 60px;margin: 8px;">
				<?php include 'Public/includes/listeeleve.php'; ?>
				<div class="container-fluid col-sm-9">
					<div class="row well" style="padding-top: 15px;">
					<table class="table table-condensed table-responsive table-bordered" id="example" style="margin-top:20px">
						<thead>
							<tr>
								<th>Date Debut</th>
								<th>Date Fin</th>
								<th>Nbre de Jours</th>
								<th>Motif</th>
							</tr>
						</thead>

						<tbody>
							<?php
							foreach ($Jco as $value) {
								echo "<tr><td>" . $value->DATEDEB . "</td>";
								echo "<td>" . $value->DATEFIN . "</td>";
								$deb = strtotime($value->DATEDEB);
								$fin = strtotime($value->DATEFIN);
								$dif =  $fin - $deb;
								$days = abs(floor($dif / (60 * 60 * 24))) + 1;
								echo "<td>" . $days . "</td>";
								echo "<td>" . $value->MOTIF . "</td>
								</tr>";
							}
							?>
						</tbody>
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

<script type="text/javascript" src="public/ajax/jc.js"></script>