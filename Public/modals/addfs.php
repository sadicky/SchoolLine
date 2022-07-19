
<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter le frais Scolaire</h4>
      </div>
      <div class="modal-body">
      <form  method="post" id='formulaire' enctype="multipart/form-data">
		<div class="form-group">
		<select name="aa" id="aa" class='form-control'>
			<option value=''>Annee Scolaire</option>
			<?php foreach ($getAa as $a) {?>
				<option value='<?=$a->ID?>'><?=$a->AS?></option>				
			<?php } ?>
		</select>
		</div>
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
			<option value=''>Choisir une section en premier</option>
		</select>
		</div>
		
		<div class="form-group">
		<select name="niv" id="niv" class='form-control'>
			<option value=''>Choisir une option en premier</option>	
		</select>
		</div>
		<div class="form-group">		
           <input type="text" id="montant" name="montant" class="form-control" placeholder='Montant'>
		</div>
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</form>
      </div>
    </div>
  </div>
</div>  
