<?php

$title = 'Les Admins'; 
include 'public/includes/header.php';

?>
    <body > 
		<div class="row">  
			</div><br>
				<?php include 'public/includes/menuadmin.php';?>
				<div class="container" style="margin-top:60px" > 
				 <div class="form-group"><br><br>
     				 <div class='col-sm-12' id="message"></div>		
				  </div>
				  <div class='row'>
     				 <div class='col-sm-4'></div>	
     				 <div class='col-sm-4'>	
					 <fieldset><legend>Modification</legend>
					  <form  method="post" id='formulaire' enctype="multipart/form-data">
						<div class="form-group">
						  <input type="text" class='form-control' value='<?=$data->ID?>' name="login" id="login" required>
						</div>
						<div class="form-group">
						  <input type="text" class='form-control' placeholder='Entrez votre Nom' name="nom" required id="nom">
						</div>
						<div class="form-group">
						  <input type="text" class='form-control' placeholder='Entrez votre Prenom' required name="prenom" id="prenom">
						</div>
						<div class="form-group">
						  <input type="text" class='form-control' placeholder='Numero Tel' name="tel" id="tel">
						</div>
						<div class="form-group">
						  <input type="email" class='form-control'  placeholder='E-Mail'  name="email" id="email">
						</div>
						<div class="form-group">
						  <input type="hidden" class='form-control'  name="id" id="id">
						  <button type="submit" id='mod' name='mod' class='btn btn-primary btn-sm btn-block'>Modifier</button>
						</div>
					  </form>
					  </fieldset>
					  </div>	
     				 <div class='col-sm-4'></div>
					</div>
				</div>
    </body>  
    </html> 
<?php print_r($data->PWD);?>	
    <script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $(".myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
<?php
include_once 'Public/modals/addadmin.php';
include_once 'Public/modals/modadmin.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="public/ajax/admin.js"></script>
