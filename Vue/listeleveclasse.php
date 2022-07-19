<?php include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="margin-top:60px; padding: 10px;">  
				<?php include 'public/includes/menuadmin.php';?>
				  <div class="col-sm-2">
				  	  <ul class="list-group">
						  <li class="list-group-item"> <a href="index.php?page=listeeleveclasse">Liste des Elèves-Classe</a></li>
						  <li class="list-group-item"> <a href="">Reprendre de Classe</a></li>
						  <li class="list-group-item"> <a href="">Monter de Classe</a></li>
					 </ul>
			  		</div>
			  		<div class="col-sm-10">
			  			<div class="form-group">
						    <div class="col-sm-4">
						      <select class="form-control">
						      	<option>Choisir Une...</option>
						      	<option>Commercial</option>
						      	<option>Scientifique</option>
						      </select>
						    </div>
						      <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#tableau">Valider</button>
						  </div>


				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				      		Liste des Eleves:  
				      </h4>
				    </div>
				      <div class="panel-body">
					<table class="table table-condensed table-responsive table-striped" style="margin-top:20px">
						<thead>
						<tr>
							<th>Matricule</th>
							<th>Noms</th>
							<th>Classe</th>
							<th>Tel</th>
							<th>Sexe</th>
							<th>DOB</th>
							<th>Date Inscr.</th>
							<th>Accès</th>
							<th>Activer/Desactiver</th>
							<th>Actions</th>
						</tr>
						</thead>
						
						<tbody class="collapse table-collapse" id="tableau">
						<tr>
							<td>ISH2019626517</td>
							<td>Sadicky Dave</td>
							<td>5e HL</td>
							<td>+257 61 22 12 44</td>
							<td>M</td>
							<td>1997-10-06</td>
							<td>2018-07-21</td>
							<td><label class="label label-danger">Desactiver</label></td>
							<td>
								<a href="" data-toggle="tooltip" data-placement="top" title="Activer" class="btn btn-sm btn-default" ><span class="glyphicon glyphicon-ok" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Desactiver" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove" ></span></a></td>
							<td>
								<button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#Details" ><span data-toggle="tooltip" data-placement="top" title="Details" class="glyphicon glyphicon-tasks"></span></button>
								<a href="" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" ></span></a>
							</td>
						</tr>
						<tr>
							<td>ISH2019872670</td>
							<td>Jimmy WAKI</td>
							<td>6e BC</td>
							<td>+257 71 00 98 19</td>
							<td>M</td>
							<td>1987-12-29</td>
							<td>2019-08-12</td>
							<td><label class="label label-success">Activer</label></td>
							<td>
								<a href="" data-toggle="tooltip" data-placement="top" title="Activer" class="btn btn-sm btn-default" ><span class="glyphicon glyphicon-ok" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Desactiver" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove" ></span></a></td>
							<td>
								<button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#Details" ><span data-toggle="tooltip" data-placement="top" title="Details" class="glyphicon glyphicon-tasks"></span></button>
								<a href="" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" ></span></a>
							</td>
						</tr>
						</tbody>
					</table>
						<button class="btn btn-danger btn-sm">Imprimer</button>			
				      </div>
				  </div>
				</div>

			  		</div>
			 	 
				  
					
    </body>  
    </html>  

<!-- Modal -->
<div id="Details" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      <div class="row">
      	<div class="col-md-6">
      		<h3>Info Générale</h3>
      		<b>Matricule: </b> ISH2019782170<br>
      		<b>Username: </b> @Sadicky<br>
      		<b>Password: </b> <?=sha1(123)?><br>
      		<b>Noms: </b> Sadicky Dave<br>
      		<b>Sexe: </b> M<br>
      		<b>Classe: </b> 4e HL<br>
      		<b>Option: </b> Litteraire<br>
      		<b>Adresse: </b> Ngagara<br>
      		<b>Tél: </b> 83786468<br>
      		<b>Access: </b> Activer<br>
      		<b>Nationalité: </b> Congolaise<br>
      		<b>Date de Nais.: </b> 1996-02-05<br>
      		<b>Maladie Particulière: </b> Aucun<br>
      		<hr>
      		<h3>Info sur le Tuteur</h3>
      		<b>Père: </b> Sammy Kabeya<br>
      		<b>Mère: </b> Soline Tuya<br>
      		<b>Tél. Père: </b> 3874438<br>
      		<b>Tél. Mère: </b> 9374644<br>
      		<b>Autres: </b> 83476783<br>
      		<b>Lien: </b> Oncle<br>
      	</div>
      	<div class="col-md-6">
      		<b>Année Academique: </b> 2019-2020<br>
      		<h3>Info sur le Paiement</h3>
      		 2019-02-28: => 16$<br><hr>
      		 Total à payer:  <b>200$</b><br>
      		 Déjà payé:  <b>16$</b><br>
      		 reste à payer: <b>184$</b><hr>
      		 <h3>Absence</h3><hr>
      		 <h3>Transport(Dernier Paiement)</h3><hr>
      		 <h3>Cantine(Dernier Paiement)</h3><hr>
      		
      	</div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
        <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Imprimer</button>
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
