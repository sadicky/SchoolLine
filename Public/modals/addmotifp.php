<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Motif de Paiement</h4>
      </div>
      <div class="modal-body">
      <form  method="post" id='formulaire' enctype="multipart/form-data">
		<input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa" class='form-control'>
		<div class="form-group">
		<input type="text" name="motif" id="motif" class='form-control' placeholder="Motif">
		</div>
		<div class="form-group">
		<input type="text" name="montant" id="montant" class='form-control' placeholder="Montant">
		</div>
		
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</form>
      </div>
    </div>
  </div>
</div>  
