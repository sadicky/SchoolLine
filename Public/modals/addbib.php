<!-- Modal -->
<div id="ajoutbib" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nouveau Bibliothecaire</h4><hr>
        <b><i class="text-danger">Les informations suivies d'un asteriste sont obligatoires</i></b>
      </div>
      <div class="modal-body">
      <form method="post" id="formulaire"  enctype="multipart/form-data">
      	<div class="row">
      		<div class="col-sm-4">
      			<div class="form-group"> 
				  <?php					  
						$string="0123456789";
						$string=str_shuffle($string);
						$titre=substr($string,0,8);					  
					  ?>     				
      				<b><label>Noms : </label> <span class="text-danger">*</span></b>
					  <input type="hidden" class="form-control" value="<?php echo "BI".$titre ;?>" name="mat" id="mat">
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
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<label><b>Téléphone:</b></label> 
      				<input class="form-control" placeholder="numero de telephone" type="tel" name="tel" id="tel" required>
      			</div> 
            <div class="form-group">              
              <label><b>E-mail: </b></label> 
              <input type="email" class="form-control" placeholder="e-mail" name="email" id="email">
            </div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Mot de passe : </label> <span class="text-danger">*</span></b>
      				<input type="password" class="form-control" value="123" name="pwd" id="pwd" readonly>
      			</div> 
      			<div class="form-group">      				
      				<b><label>Age: </label></b>
      				<input class="form-control" placeholder="Age" type="number" name="dob" id="dob" required>
      			</div> 
      		</div>
      	</div>
        <div class="form-group"><br>
          <button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-plus"></span> Ajouter un Bibliothecaire</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>