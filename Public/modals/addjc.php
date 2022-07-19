<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajout date</h4>
      </div>
      <div class="modal-body">
      <form  method="post" id='formulaire' enctype="multipart/form-data">
		<div class="form-group">
		<label for="datedeb">Date Début</label>
		<input type="date" name="datedeb" id="datedeb" class='form-control'>
		</div>
		<div class="form-group">
		<label for="datefin">Date Fin</label>
		<input type="date" name="datefin" id="datefin" class='form-control'>
		</div>
		<div class="form-group">
		<label for="motif">Motif</label>
		<input type="text" name="motif" id="motif" class='form-control' placeholder="Motif">
		</div>
		<div class="form-group">		
           <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</form>
      </div>
    </div>
  </div>
</div>  