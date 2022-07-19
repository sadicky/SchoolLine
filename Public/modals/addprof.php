<!-- Modal -->
<div id="ajoutprof" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nouveau Professeur</h4><hr>
        <b><i class="text-danger">Les informations suivies d'un asteriste sont obligatoires</i></b>
      </div>
      <div class="modal-body">
      <form method="post" id="formulaire"  enctype="multipart/form-data">
      	<div class="row">
      		<div class="col-sm-3">
      			<div class="form-group">      				
      				<b><label>Noms : </label> <span class="text-danger">*</span></b>
      				<input type="text" class="form-control" placeholder="noms" name="noms" id="noms" required>
      			</div>
      			<div class="form-group">      				
      				<b><label>Sexe: </label> <span class="text-danger">*</span></b>
      				<select class="form-control" name="sexe" id="sexe" required>
      					<option value="M">M</option>
      					<option value="F">F</option>
      				</select>
      			</div>
      		</div>
      		<div class="col-sm-3">
      			<div class="form-group">      				
					  <b><label>Matricule : </label> <span class="text-danger"></span></b>
					  <?php					  
						$string="0123456789";
						$string=str_shuffle($string);
						$titre=substr($string,0,8);					  
					  ?>
					  <input type="text" class="form-control" value="<?php echo "P-".$titre?>" name="titre" id="titre" readonly>
      			</div>
      			<div class="form-group">      				
      				<label><b>Téléphone:</b></label> 
      				<input class="form-control" placeholder="numero de telephone" type="tel" name="tel" id="tel" >
      			</div> 
      		</div>
      		<div class="col-sm-3">
      			<div class="form-group">      				
      				<b><label>Mot de passe : </label> <span class="text-danger">*</span></b>
      				<input type="text" class="form-control" value="123456" placeholder="mot de passe" name="pwd" id="pwd" readonly>
      			</div>
      			<div class="form-group">      				
      				<label><b>E-MAIL: </b></label> 
      				<input type="email" class="form-control" placeholder="e-mail" name="email" id="email">
      			</div>
      		</div>
      		<div class="col-sm-3">
      			<div class="form-group">      				
      				<b><label>Date de Naissance: </label></b>
      				<input class="form-control" type="date" name="dob" id="dob">
      			</div> 
      			<div class="form-group">      				
      				<b><label>Niveau: </label> <span class="text-danger"></span></b>
      				<select class="form-control" name="niveau" id="niveau" >
      					<option value="A2">A2</option>
      					<option value="Baccalauréat">Baccalauréat</option>
      					<option value="Grade">Grade</option>
      					<option value="Licence">Licence</option>
      					<option value="Master">Master</option>
      					<option value="Maitrise">Maitrise</option>
      					<option value="Doctorat">Doctorat</option>
      				</select>
      			</div>
				<div class="form-group"><br>
					<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-plus"></span> Ajouter</button>
				</div>
      		</div>
      	</div>
      </form>
      </div>
    </div>
  </div>
</div>