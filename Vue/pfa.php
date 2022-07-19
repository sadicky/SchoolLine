<?php include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menucaissier.php';?>  
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
				  <h3>Payer le Frais Academique</h3>				  
				    <div class="form-group">
				      <div class="col-sm-3">
                      <label for="matricule">Matricule</label>
				        <input type="text" class="form-control">
				      <label for="disabledSelect" class="col-sm-9 control-label"></label>
                      <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#tableau">Chercher</button>
				      </div>
				    </div>
					<table id="tableau" class="table table-bordered collapse" style="margin-top:20px">
						<thead>
						<tr>
							<th>Matricule</th>
							<th>Noms</th>
							<th>Classe</th>
							<th>Sexe</th>
							<th>Année Académique</th>
							<th>Action</th>
						</tr>
						</thead>
						
						<tbody id="pfa"></tbody>
					</table>	
			  </div>
		</div> 
    </body>  
    </html>
 

<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
