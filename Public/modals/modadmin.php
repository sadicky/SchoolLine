
<div id="Update" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier Admin</h4>
      </div>
      <div class="modal-body">
	  <form  method="post" id='formulaire' enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class='form-control' name="login" id="login" required>
        </div>
        <div class="form-group">
          <input type="text" class='form-control' placeholder='Entrez votre Nom' name="nom" required id="nom">
        </div>
        <div class="form-group">
          <input type="text" class='form-control' placeholder='Entrez votre Prenom' required name="prenom" id="prenom">
        </div>
        <div class="form-group">
          <input type="text" class='form-control' placeholder='Numero Tel' name="tel" id="tel">
        </div>
        <div class="form-group">
          <input type="email" class='form-control'  placeholder='E-Mail'  name="email" id="email">
        </div>
        <div class="form-group">
          <input type="hidden" class='form-control'  name="id" id="id">
          <button type="submit" id='mod' name='mod' class='btn btn-primary btn-sm btn-block'>Modifier</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>