
<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter une sortie</h4>
      </div>
      <div class="modal-body">
		 <form  method="post" id='formulaire' enctype="multipart/form-data">
		
		 <input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa" class='form-control'>
		<div class="form-group">
		<select name="fac" id="fac" class='form-control'>
			<option value=''>Choisir une Faculte</option>
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
		<input type="date" name="dat" id="dat" class='form-control'>
		</div>
		<div class="form-group">
		<textarea  name="con" id="con" class='form-control' placeholder="Condition"></textarea>
		</div>
		<div class="form-group">
		<textarea name="des" id="des" class='form-control' placeholder="Déscription"></textarea> 
		</div>
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</form>
      </div>
    </div>
  </div>
</div>   