<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter une option</h4>
      </div>
      <div class="modal-body">
      <form  method="post" id='formulaire' enctype="multipart/form-data">
		<div class="form-group">
		<select name="fac" id="fac" class='form-control'>
			<option value=''>Choisir une section</option>
			<?php foreach ($getS as $f) {?>
				<option value='<?=$f->IDSECT?>'><?=$f->SECTION?></option>				
			<?php } ?>
		</select>
		</div>
		<div class="form-group">
		<input type="text" name="dep" id="dep" class='form-control' placeholder="Option">
		</div>		
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Enregistrer une option</button>
		</div>
	</form>
      </div>
    </div>
  </div>
</div>  
 