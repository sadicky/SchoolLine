<?php

require_once '../../Model/bib.class.php';
$getP = new Bibliotheque();
$id = $_POST['id'];
$getPi = $getP->getBibId($id);
?>
     <form method="post" id="formbib"  enctype="multipart/form-data">
  <input type="hidden" value="<?= $getPi->ID ?>" name="id" id="id" />
      	<div class="row">
      		<div class="col-sm-4">
      			<div class="form-group"> 
      				<b><label>Noms : </label> <span class="text-danger">*</span></b>
      			<input type="text" class="form-control" value="<?= $getPi->NOMS ?>" placeholder="noms" name="noms" id="noms" required>
      			</div>
      			<div class="form-group">      				
      				<b><label>Sexe: </label> <span class="text-danger">*</span></b>
        <select class="form-control" name="sexe" id="sexe">
          <?php if ($getPi->SEXE == 'F') { ?>
            <option value="<?= $getPi->SEXE ?>" selected><?= $getPi->SEXE ?></option>
            <option value="M">M</option> <?php
                                        } else { ?>
            <option value="<?= $getPi->SEXE ?>" selected><?= $getPi->SEXE ?></option>
            <option value="F">F</option>

          <?php }
          ?>
        </select>
      			</div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<label><b>Téléphone:</b></label> 
      				<input class="form-control" placeholder="numero de telephone" value="<?= $getPi->TEL ?>" type="tel" name="tel" id="tel" required>
      			</div> 
            <div class="form-group">              
              <label><b>E-mail: </b></label> 
              <input type="email" class="form-control" placeholder="e-mail" value="<?= $getPi->EMAIL ?>" name="email" id="email">
            </div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>MATRICULE: </label> <span class="text-danger">*</span></b>
      				<input type="texte" class="form-control" value="<?= $getPi->MAT ?>"name="mat" id="mat" readonly>
      			</div> 
      			<div class="form-group">      				
      				<b><label>Age: </label></b>
      				<input class="form-control" placeholder="Age" value="<?= $getPi->DOB ?>" type="number" name="dob" id="dob" required>
      			</div> 
      		</div>
      	</div>
        <div class="form-group"><br>
          <button type="submit" class="btn btn-primary btn-block up"><span class="glyphicon glyphicon-plus"></span> Modifier le Bibliothecaire</button>
        </div>
      </form>