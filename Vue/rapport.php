<?php $title = 'Rapport Caisse'; include 'public/includes/header.php';
				 include 'public/includes/menuadmin.php';?>
				 <!--Custom Font-->
	
    <body > 
		div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Rapport des Entrées</h2>
			</div>
		</div><!--/.row-->
		<div class="row main" style="margin-top:0px">  
			<div class="col-lg-12">
			  <div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Entrées Journalières</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent=20 ><span class="percent">
						20</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Entrées d'Hier</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="20" ><span class="percent">20</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Entrées Hebdo</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="20"><span class="percent">20</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Entrées Mensueles</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="20" ><span class="percent">20</span></div>
					</div>
				</div>
			</div>
		
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Entrées Annuelles </h4>
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
    <script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>