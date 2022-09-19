
<?php if(isset($_SESSION['logged'])) { ?><?php $title = 'Paiement FS'; include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php'; 
		include 'public/includes/liste.php'; ?>  
			  <div class="col-sm-10">
				<div class="row">
				  <h3 class="page-header">Enregistre le bordereau du Paiement du Minerval</h3>	
				  <form id="affpfa" action="" class="form-horizontal" method="post">
				      <div class="col-sm-2">		  
						<div class="form-group">
						<label for="matricule">Matricule</label>
							<input type="text" id="mat" name="mat" autocomplete="off" class="form-control">
						</div>  		  
						<div class="form-group">
						<label for=''><br></label>
						<button class="btn btn-primary btn-sm" type="submit" name="valider">Chercher</button>
						</div> 
				    </div>
					  <div class="col-sm-10"></div>	
					</form>
					</div>			
    <?php if(isset($_POST['valider'])):?>
		<div class="well">
					<table id="example" class="table table-condensed table-bordered" style="margin-top:20px">
						<thead>
						<tr>
							<th>Matricule</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Classe</th>
							<th>Option</th>
							<th>Section</th>
							<th>Sexe</th>
							<th>Année Scolaire</th>
							<th>Action</th>
						</tr>
						</thead>						
						<tbody>
                  <?php
                
                  if(@$getEC){ foreach(@$getEC as $ec){?>
                  <tr>
					<td><b><?=$ec->MATRICULE?></b></td>
                    <td><?=$ec->NOM?></td>
                    <td><?=$ec->PRENOM?></td>
                    <td><?=$ec->CLASSE?></td>
                    <td><?=$ec->OPT?></td>
                    <td><?=$ec->SECTION?></td>
                    <td><?=$ec->SEXE?></td>
                    <td><?=$ec->AS?></td>
                   <td> <a class="btn btn-primary btn-xs btn-block" href="index.php?page=payer&id=<?=$ec->MATRICULE?>">Enregister</a></td>
                  </tr>
                  <?php } }else{ echo "<h2>Aucun élève trouvé</h2>";} ?>

						</tbody>
					</table>
				  </div>							  
		<?php endif ?>
			  </div>
		</div> 
    </body>  
    </html>
	<?php } else {
	header('Location:index.php?page=non_a');
} ?>