<?php if(isset($_SESSION['logged'])) { ?>
<?php include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';?>  
			  <div class="col-sm-2">
			  	  <ul class="list-group">
					  <li class="list-group-item"><span class="badge">12</span> Etudiants Admis</li>
					  <li class="list-group-item"><span class="badge">5</span> Garçons</li>
					  <li class="list-group-item"><span class="badge">3</span> Filles</li>
					  <li class="list-group-item"><span class="badge">12</span> Niveaux</li>
					  <li class="list-group-item"><span class="badge">5</span> Profs</li>
					  <li class="list-group-item"><span class="badge">0 $</span> Caisse Aujourd'hui</li>
				 </ul>
			  </div>
			  	<div class="col-sm-10">
				  <div class="form-group">
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Une Faculté</option>
				          <option>Droit</option>
				          <option>Medecine</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Un Département</option>
				          <option>BioMed</option>
				        </select>
				     </div>
				     <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Un Niveau</option>
				          <option>G1</option>
				          <option>G3</option>
				        </select>
				     </div>
					 <label for="disabledSelect" class="col-sm-4 control-label"></label>		  
				  </div>	
				  </div>
				  <div class="col-sm-10">				  		
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				      		Paiement Cantine
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
							<th>Montant</th>
							<th>Status</th>
							<th>Modification</th>
						</tr>
						</thead>
						
						<tbody id="myTable">
						<tr>
							<td>Placide</td>
							<td> Waki</td>
							<td>
								 <label class="text-danger">  10$</label> 
							</td>
							<td>
								<div class="col-sm-4">
									<label class="label label-danger">Dette</label>
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
								 <label class="text-success">  20$
							     </label> 
							</td>
							<td>
								<div class="col-sm-4">
									<label class="label label-success">Payé</label>
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
    </body>  
    </html>
     </div>
</div> 
<?php } else {
	header('Location:index.php?page=non_a');
} ?>