
<?php if(isset($_SESSION['logged'])) { ?><?php $title = 'Rapport Caisse'; include 'public/includes/header.php';
				 include 'public/includes/menuadmin.php';?>
				 <!--Custom Font-->
	
    <body > 
		div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Rapport des Sorties</h2>
			</div>
		</div><!--/.row-->
		<div class="row main" style="margin-top:0px">  
			<div class="col-lg-12">
			  <div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sorties Journalières</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent=20 ><span class="percent">
						20</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sorties d'Hier</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="20" ><span class="percent">20</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sorties Hebdo</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="20"><span class="percent">20</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sorties Mensueles</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="20" ><span class="percent">20</span></div>
					</div>
				</div>
			</div>
		
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sorties Annuelles </h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="20" ><span class="percent">20</span>
						</div>
					</div>				
				</div>
			</div>

		<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Total Caisse</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="20" ><span class="percent">20</span>
						</div>
					</div>				
				</div>
			</div>
				</div>
		</div><br>
    </body>  
    </html>
	<?php } else {
	header('Location:index.php?page=non_a');
} ?>