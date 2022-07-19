<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nouvel Admin</h4>
      </div>
      <div class="modal-body">
      <form  method="post" id='formulaire' enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class='form-control' placeholder='Entrez votre Login' name="login" id="login" required>
        </div>
        <div class="form-group">
          <input type="password" class='form-control' autocomplete='off'  placeholder='Entrez votre Password' required name="pwd" id="pwd">
        </div>
        <div class="form-group">
          <input type="password" class='form-control' autocomplete='off'  placeholder='confirmer votre Password' required name="cpwd" id="cpwd">
        </div><hr>
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
          <button type="submit" class='btn btn-primary btn-sm btn-block'>Ajouter Admin</button>
        </div>      
      </form>
      </div>
    </div>
  </div>
</div>