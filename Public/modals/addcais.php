<!-- Modal -->
<div id="ajoute" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nouvel Encodeur</h4><hr>
        <b><i class="text-danger">Les informations suivies d'un asteriste sont obligatoires</i></b>
      </div>
      <div class="modal-body">
      <form method="post" id="formenc" enctype="multipart/form-data">
      	<div class="row">
      		<div class="col-sm-4">
      			<div class="form-group">      				
					  <b><label>Matricule : </label> <span class="text-danger"></span></b>
					  <?php					  
						$string="0123456789";
						$string=str_shuffle($string);
						$titre=substr($string,0,8);					  
					  ?>
					  <input type="text" class="form-control" value="<?php echo "E-".$titre?>" name="titre" id="titre" readonly>
      			</div>
      			<div class="form-group">      				
      				<b><label>Sexe: </label> <span class="text-danger">*</span></b>
      				<select class="form-control" name="sexe" id="sexe" required>
      					<option value="M">M</option>
      					<option value="F">F</option>
      				</select>
      			</div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<label>Noms : </label> <span class="text-danger">*</span>
      				<input type="text" class="form-control" placeholder="noms" name="noms" id="noms" required>
      			</div>
      			<div class="form-group">      				
      				<label><b>Téléphone:</b></label> 
      				<input class="form-control" placeholder="numero de telephone" type="text" name="tel" id="tel" >
      			</div> 
      		</div>
      		<div class="col-sm-4">
            <?php
            $string = "0123456789";
            $string = str_shuffle($string);
            $titre = substr($string, 0, 8);

            $pwd = password_hash('123456', PASSWORD_DEFAULT);
            ?>
            <input type="hidden" value="<?=$pwd?>" name="pwd" id="pwd">
      			<div class="form-group">      				
      				<label><b>E-MAIL: </b></label> 
      				<input type="email" class="form-control" placeholder="e-mail" name="email" id="email">
      			</div>
				<div class="form-group">		
      				<label>#</label> 
					<button type="submit" class="btn btn-danger btn-block valider"><span class="glyphicon glyphicon-plus"></span> Enregistrer</button>
				</div>
      		</div>
      	</div>
      </form>
      </div>
    </div>
  </div>
</div>