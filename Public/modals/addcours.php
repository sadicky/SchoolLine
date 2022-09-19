
<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter un Cours</h4>
      </div>
      <div class="modal-body">
      <form  method="post" id='formulaire' enctype="multipart/form-data">
	    <input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa" class='form-control'>
		<div class="form-group">
		<select name="fac" id="fac" class='form-control'>
			<option value=''>Choisir une section</option>
			<?php foreach ($getS as $f) {?>
				<option value='<?=$f->IDSECT?>'><?=$f->SECTION?></option>				
			<?php } ?>
		</select>
		</div>
		
		<div class="form-group">
		<select name="dep" id="dep" class='form-control'>
			<option value=''>Choisir un Departement</option>
		</select>
		</div>
		
		<div class="form-group">
		<select name="niv" id="niv" class='form-control'>
			<option value=''>Choisir un Niveau</option>
		</select>
		</div>
		<div class="form-group">		
           <input type="text" id="cours" name="cours" class="form-control" placeholder='Cours'>
		</div>
		<div class="form-group">		
           <input type="text" name="pond" id='pond' class="form-control" placeholder='Pondération'>
		</div>
		<div class="form-group">		
           <input type="text" name="nbh" id="nbh" class="form-control" placeholder='NombreHeure'>
		</div>
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</form>
      </div>
    </div>
  </div>
</div>  