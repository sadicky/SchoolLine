<?php 
$title ='SchoolLine - Paiement'; include 'public/includes/header.php';?>
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
				  <h3>Payer le Frais Academique pour <?=$_GET['id']?></h3>				  
				    <div class="form-group">
				      <div class="col-sm-3">
                        <label for="matricule">Montant</label>
                            <input type="text" class="form-control" placeholder="Montant"><br>
                            <a href='index.php?page=recu' id='payer' class="btn btn-primary btn-sm">Payer</a>
				      </div>
				    </div>
			  </div>
		</div> 
    </body>  
    </html>
 

<script>

		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
            $('#payer').click(function(){
                alert('Paiement effectué');
            });
		});
	</script>
