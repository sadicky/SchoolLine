<div id="Categories" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter une Catégorie</h4>
      </div>
      <div class="modal-body">			
      <form  method="post" id='formcat' enctype="multipart/form-data">
			<div class="form-group">
				<label>Catégorie</label>
				<input class="form-control" type="text" name="cat" id="cat" placeholder='Libellé de la catégorie' autocomplete="off" required />
			</div>
			<div class="form-group">
				<label>Statut</label>
				<div class="radio">
				<label>
				<input type="radio" name="status" id="status" value="1" checked="checked">Actif
				</label>
				</div>
				<div class="radio">
				<label>
				<input type="radio" name="status" id="status" value="0">Inactif
				</label>
				</div>
			</div>
			<button type="submit" class="btn btn-info">Ajouter </button>
	  		<a href='' class="text text-danger pull-right ">Afficher Tous </a>
      </form>
      </div>
    </div>
  </div>
</div> 