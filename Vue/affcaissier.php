<?php  $title = "Caissiers";include 'public/includes/header.php';?>
    <body > 
		<div class="row">  
			</div><br>
				<?php include 'public/includes/menuadmin.php';?>
				<div class="container" style="margin-top:60px" >
				<div class="panel panel-default"> 
				  <div class="panel-heading"><b><span class="glyphicon glyphicon-usd"></span> Les Caissiers</b></div>
				  <div class="panel-body">
     				 <div class='col-sm-12' id="message"></div>				 
				<div align="right">
					<button type="button" data-toggle="modal" data-target="#ajoutprof" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
				</div>
				<table id="data-table" class="table table-condensed table-striped" style="margin-top:20px">
					<thead>
						<tr>
							<th>Matricule</th>
							<th>Noms</th>
							<th>Sexe</th>
							<th>Tel</th>
							<th>Nationalité</th>
							<th>Accès</th>
							<th>Activer/Desactiver</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody id="profs" class="myTable">
					</tbody>
				</table>
			</div>
			</div>
			</div>
		
 		 </div>
    </body>  
    </html>  
<?php
include_once 'Public/modals/addcais.php';
include_once 'Public/modals/modcaiss.php';
include_once 'Public/modals/detcais.php';?>
<script type="text/javascript" src="public/ajax/caissier.js"></script>

