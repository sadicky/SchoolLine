<?php include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';?>  
			  <div class="col-sm-2">
			  	  <ul class="list-group">
					  <li class="list-group-item"><span class="badge">12</span> Etudiants Admis</li>
					  <li class="list-group-item"><span class="badge">5</span> Garçons</li>
					  <li class="list-group-item"><span class="badge">3</span> Filles</li>
					  <li class="list-group-item"><span class="badge">12</span> Auditoires</li>
					  <li class="list-group-item"><span class="badge">5</span> Profs</li>
					  <li class="list-group-item"><span class="badge">0 $</span> Caisse Aujourd'hui</li>
				 </ul>
			  </div>
			  <div class="row">
			  	<div class="col-sm-7">
				  <h3>Absence Journalière</h3>
				  <div class="form-group">
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Une Faculty</option>
				          <option>Droit</option>
				          <option>Medecine</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Un Departement</option>
				          <option>BioMed</option>
				          <option>2020-2021</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Un Niveau</option>
				          <option>G1</option>
				          <option>G2</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				      <input class="form-control" name="date" type="date">
				     </div>
					 <label for="disabledSelect" class="col-sm-1 control-label"></label>		  
				  </div>	
				  </div>
				  <div class="col-sm-7">
				  <div class="row">
				  	<div class="col-sm-10">				  		
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				      		Ajouter une Absence
				      </h4>
				    </div>
				      <div class="panel-body">
				      <?php 
				      		$sexe='M';
				      		$text=null;
				      		if($sexe='M') $text='Absent';
				      		else if($sexe='F') $text='Absente';
				       ?>

					<table width="100px" class="table table-condensed table-responsive table-striped" style="margin-top:20px">
						<thead>
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Absence</th>
							<th>Motif</th>
						</tr>
						</thead>
						
						<tbody id="myTable">
						<tr>
							<td>Placide</td>
							<td> Waki</td>
							<td>
								 <label class="checkbox-inline">  
							        <input type="checkbox" value=""><?=$text ?>
							     </label> 
							</td>
							<td>
								<div class="col-sm-4">
									<input type="text" class="form-control">
								</div>
								<label type="hidden" class="col-sm-8"></label>
							</td>
						</tr>
						<tr>
							<td>Samy</td>
							<td>Kabeya</td>
							<td>   
								 <label class="checkbox-inline">  
							        <input type="checkbox" value=""><?=$text ?> 
							     </label> 
							</td>
							<td>
								<div class="col-sm-4">
									<input type="text" class="form-control">
								</div>
								<label type="hidden" class="col-sm-8"></label>
							</td>
						</tr>
					</tbody>
				</table>
				<button class="btn btn-primary btn-sm pull-right">Ajouter Absence</button>
				    </div>
				  </div>
				  	</div>
				  <div class="col-sm-2">
					<button type="button" data-toggle="modal" data-target="#Detail" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-list"></span> <b>Voir Details Absence</b></button>
				  </div>
				  </div>
				  </div>
			  </div>
		</div> 
    </body>  
    </html>



<!-- Modal -->
<div id="Detail" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
			  <div class="row">
			  	<div class="col-sm-12">
				  <div class="form-group">
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Une Faculty</option>
				          <option>Droit</option>
				          <option>Medecine</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Un Departement</option>
				          <option>BioMed</option>
				          <option>2020-2021</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Un Niveau</option>
				          <option>G1</option>
				          <option>G2</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				      <input class="form-control" name="date" type="date">
				     </div>
					 <label for="disabledSelect" class="col-sm-1 control-label"></label>		  
				  </div>	
				  </div>
				  <div class="col-sm-12">				  		
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				      		Absence / Jour
				      </h4>
				    </div>
				      <div class="panel-body">
				      <div class="form-group">
				      	<div class="col-sm-3 pull-right">
				  			<input class="form-control" id="myInput" type="text" placeholder="Search..">
				  		</div>
				  		<label class="col-sm-6"></label>
				      </div>
				      <?php 
				      		$sexe='M';
				      		$text=null;
				      		if($sexe='M') $text='Absent';
				      		else if($sexe='F') $text='Absente';
				       ?>

					<table class="table table-condensed table-responsive table-striped" style="margin-top:20px">
						<thead>
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Absence</th>
							<th>Motif</th>
							<th>Modification</th>
						</tr>
						</thead>
						
						<tbody id="myTable">
						<tr>
							<td>Placide</td>
							<td> Waki</td>
							<td>
								 <label class="checkbox-inline">  <?=$text ?>
							     </label> 
							</td>
							<td>
								<div class="col-sm-4">
									Aucun
								</div>
								<label type="hidden" class="col-sm-8"></label>
							</td>
							<td>							
								<a href="" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" ></span> <b>Modifier</b></a>
							</td>
						</tr>
						<tr>
							<td>Samy</td>
							<td>Kabeya</td>
							<td>   
								 <label class="checkbox-inline">  <?=$text ?> 
							     </label> 
							</td>
							<td>
								<div class="col-sm-4">
								Maladie
								</div>
								<label type="hidden" class="col-sm-8"></label>
							</td>
							<td>								
								<a href="" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" ></span> <b>Modifier</b></a>
							</td>
						</tr>
					</tbody>
				</table>
				    </div>
				  </div>
				  </div>
			  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left">Imprimer</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div> 
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>