<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = 'Accueil - Admin'; include 'public/includes/header.php';
				 include 'public/includes/menuadmin.php';?>
    <body > 
		<div class="row" style="margin-top:60px">  
				<div class="col-sm-12">
               		<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info text-center">
                            <span class="glyphicon glyphicon-user"></span><h1>
							<?=count($getEA)?></h1>
                           Elèves Admis
					  </div>
					</div>	
               		<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                           <span class="glyphicon glyphicon-usd"></span><h1>
							<?php echo 400000;?>$</h1>
                          Caisse
					  </div>
					</div>				
               		<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <span class="glyphicon glyphicon-book"></span><h1>
							<?=count($getClasse);?></h1>
                          Classes
					  </div>
					</div>				
               		<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-warning back-widget-set text-center">
                            <span class="glyphicon glyphicon-user"></span><h1>
							<?=count($getP);?></h1>
                          Professeurs
					  </div>
					</div>				
				</div>
			</div><br>
				<div class="container"> 
				<div class="panel panel-default">
				  <div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Derniers Etudiants Inscrits</b></div>
				  <div class="panel-body" style="text-align:center;">
				  	<table class="table table-condensed table-bordered table-striped">
						<thead>
						<tr>
							<th>#</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Matricule</th>
							<th>Sexe</th>
							<th>Date Nais</th>
							<th>Niveau</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							<td>1</td>
							<td>Dave</td>
							<td>Sadicky</td>
							<td>ELV20182768</td>
							<td>M</td>
							<td>05-02-1996</td>
							<td>5e BC</td>
						</tr>
					</tbody>
				</table>

				  </div>
				</div>
				
			</div>	
    </body>  
    </html>  
	<?php } else {
	header('Location:index.php?page=non_a');
} ?>