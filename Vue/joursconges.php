<?php 
$title = 'Jours Congé';
include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';?>  
			  <div class="col-sm-2">
			  	  <ul class="list-group">
					  <li class="list-group-item"><span class="badge">12</span> Etudiants Admis</li>
					  <li class="list-group-item"><span class="badge">5</span> Garçons</li>
					  <li class="list-group-item"><span class="badge">3</span> Filles</li>
					  <li class="list-group-item"><span class="badge">12</span> Classes</li>
					  <li class="list-group-item"><span class="badge">5</span> Profs</li>
					  <li class="list-group-item"><span class="badge">0 $</span> Caisse Aujourd'hui</li>
				 </ul>
			  </div>
			  <div class="col-sm-10">
				  <h3>Jours de Congés disponibles</h3>
				  <div class="form-group">
				    <div class="col-sm-2">
				      <input class="form-control" id="myInput" type="text" placeholder="Rechercher...">
				  		<br>
				    </div>
				  </div>	
					<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter une Date</b></button>
					<table width="100px" class="table table-condensed table-responsive" style="margin-top:20px">
						<thead>
						<tr>
							<th>Date Debut</th>
							<th>Date Fin</th>
							<th>Nbre Jours</th>
							<th>Motif</th>
							<th>Actions</th>
						</tr>
						</thead>
						
						<tbody id='jc' class="myTable">
					</tbody>
				</table>
           <button type="button" data-toggle="tooltip" data-placement="top" title="Imprimer" class="btn btn-danger">Imprimer</button>
			  </div>
		</div> 
    </body>  
    </html>
<?php
include_once 'Public/modals/addjc.php';
include_once 'Public/modals/modadmin.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="public/ajax/jc.js"></script>

<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});

		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
