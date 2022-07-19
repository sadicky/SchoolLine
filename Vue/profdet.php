<?php $title = "Affecter Prof-Cours";
include 'public/includes/header.php';
?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'Public/includes/menuadmin.php';
		include 'Public/includes/liste.php'; ?>
		<div class="col-sm-10">
			<div class="panel panel-default">
				<div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Prof <?= $getPi->NOMS ?> </b></div>
				<div class="panel-body">
					<div class="form-group">
						<div class='col-sm-12' id="message"></div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="panel panel-primary">
								<div class="panel-heading"></div>
								<div class="panel-body">
									<div class="panel-group">
										<ul class="list-group">
											<li class="list-group-item">One</li>
											<li class="list-group-item">Two</li>
											<li class="list-group-item">Three</li>
											<li class="list-group-item">Three</li>
											<li class="list-group-item">Three</li>
											<li class="list-group-item">Three</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading"></div>
								<div class="panel-body">
									<ul class="nav nav-tabs ">
										<li class="active"><a data-toggle="tab" href="#home">Mes Cours</a></li>
										<li><a data-toggle="tab" href="#menu1">Mes Cours</a></li>
										<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
										<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
									</ul>

									<div class="tab-content">
										<div id="home" class="tab-pane fade in active">
											<h4 class="text-primary">&nbsp;&nbsp;&nbsp;Cours Affectés</h4>
											<p>
												<?php if($getPc==false){
													echo "Aucun Cours affecté";}
													else{														
														foreach($getPc as $pc){
															echo "<ul><li><b>";
																	echo $pc->COURS." -> ". $pc->CLASSE;
																echo "</b></li></ul>";}
													}
													?>
											</p>
										</div>
										<div id="menu1" class="tab-pane fade">
											<h3>Menu 1</h3>
											<p>Java is a high level, robust, secured and object-oriented programming language.</p>
										</div>
										<div id="menu2" class="tab-pane fade">
											<h3>Menu 2</h3>
											<p>SQL is just a query language, it is not a database. To perform SQL queries,
												you need to install any database for example Oracle, MySQL, MongoDB, PostGre SQL, SQL Server, DB2 etc.</p>
										</div>
										<div id="menu3" class="tab-pane fade">
											<h3>Menu 3</h3>
											<p>The C Language is developed for creating system applications that direct
												interacts to the hardware devices such as drivers, kernals etc.</p>
										</div>
									</div>
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
include_once 'Public/modals/addcla.php'; ?>
<script type="text/javascript" src="Public/ajax/prof.js"></script>
<script type="text/javascript" src="Public/ajax/joinniv.js"></script>