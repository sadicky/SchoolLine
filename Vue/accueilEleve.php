<?php $title='Accueil - Eleve'; include 'public/includes/header.php';?>
    <body > 
		<div class="row"> 
			<?php include 'public/includes/menueleve.php';?>
			<div style="padding-top: 60px;margin: 8px;">  
			  <div class="col-sm-2">
			  	 <div class="panel-group" id="accordion">
				  <div class="panel panel-primary">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				        Photo de Profil</a>
				      </h4>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse in">
				      <div class="panel-body">
				      	<img src="" alt="Photo de Profil">
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-primary">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				        Info Génèrale</a>
				      </h4>
				    </div>
				    <div id="collapse2" class="panel-collapse collapse">
				      <div class="panel-body">
				  	  <ul class="list-group">
						  <li class="list-group-item"><a href="">Details</a></li>
						  <li class="list-group-item"><a href="">Mes Tuteurs</a></li>
						  <li class="list-group-item"><a href="">Mes Camarades</a></li>
						  <li class="list-group-item"><a href="">Nos Cours</a></li>
						  <li class="list-group-item"><a href="">Mes Resultats</a></li>
					 </ul>
				      </div>
				    </div>
				  </div>
				</div> 

			  </div>
			  <div class="col-sm-10">
				  <h2>Camarades</h2> 
				  <input class="form-control" id="myInput" type="text" placeholder="Search..">
				  <br>
				  <table class="table table-bordered table-striped">
				    <thead>
				      <tr>
				        <th>Nom</th>
				        <th>Prenom</th>
				        <th>Phone</th>
				      </tr>
				    </thead>
				    <tbody id="myTable">

				    </tbody>
				  </table>
				  
				</div>
			  </div>
		</div> 
    </body>  
    </html>  
