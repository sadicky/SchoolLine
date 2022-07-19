<?php 
$title ='SchoolLine - Communiqué'; include 'public/includes/header.php';?>
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
				  <h3>Liste de Communiqués</h3>			  
				    <div class="form-group">
				      <div class="col-sm-3">
				        <select class="form-control">
				          <option>Choisir Une Année Academique</option>
				          <option>2019-2020</option>
				          <option>2020-2021</option>
				        </select>
				        </div>
				    <div class="col-sm-2">
				      <input class="form-control" id="myInput" type="text" placeholder="Rechercher...">
				    </div>
				      <label for="disabledSelect" class="col-sm-7 control-label"></label>
				    </div>	
					<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Nouveau Communiqué</b></button>
					<table width="100px" class="table table-condensed table-responsive" style="margin-top:20px">
						<thead>
						<tr>
							<th>Sujet</th>
							<th>Concernés</th>
							<th>Date Communiqué</th>
							<th>Voir</th>
						</tr>
						</thead>
						
						<tbody id="myTable">
						<tr>
							<td>Paiement</td>
							<td>L1,G2</td>
							<td>2019-11-20</td>
							<td>
								<a href="" data-toggle="modal" data-target="#Details" title="Details" class="btn btn-sm btn-block btn-info"><span  data-toggle="tooltip" data-placement="top" class="glyphicon glyphicon-list" ></span> <b>Voir Details</b></a>
							</td>
						</tr>
					</tbody>
				</table>
			  </div>
		</div> 
    </body>  
    </html>


<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter un Communiqué</h4>
      </div>
      <div class="modal-body">
		<div class="form-group">
		<input type="text" name="" id="" class='form-control' placeholder="Sujet">
		</div>
		<div class="form-group">
		<input type="text" name="" id="" class='form-control' placeholder="Concernés,Ex: Parent,Toutes,Etudiants">
		</div>
		<div class="form-group">
		<select name="" id="" class='form-control'>
			<option value=''>Niveau d'Urgence</option>
			<option value=''>Normal</option>
			<option value=''>Important</option>
			<option value=''>Très Important</option>
		</select>
		</div>
		<div class="form-group">
		<textarea name="" id="" class='form-control' placeholder="Détail du Communiqué"></textarea>
		</div>
		<div class="form-group">		
           <button type="button" class="btn btn-primary btn-block">Ajouter</button>
		</div>
      </div>
    </div>
  </div>
</div>  


<!-- Modal -->
<div id="Details" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Détail Communiqué</h4>
      </div>
      <div class="modal-body">
		<div class="form-group">
		<input type="text" name="" id="" class='form-control' placeholder="Sujet">
		</div>
		<div class="form-group">
		<input type="text" name="" id="" class='form-control' placeholder="Concernés,Ex: Parent,Toutes,Etudiants">
		</div>
		<div class="form-group">
		<select name="" id="" class='form-control'>
			<option value=''>Niveau d'Urgence</option>
			<option value=''>Normal</option>
			<option value=''>Important</option>
			<option value=''>Très Important</option>
		</select>
		</div>
		<div class="form-group">
		<textarea name="" id="" class='form-control' placeholder="Détail du Communiqué"></textarea>
		</div>
		<div class="form-group">		
           <button type="button" class="btn btn-primary btn-block">Ajouter</button>
		</div>
      </div>
    </div>
  </div>
</div>  

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
