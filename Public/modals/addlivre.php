<div id="Livre" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter un Livre</h4>
      </div>
      <div class="modal-body">
        <form role="formliv" method="post">
          <div class="form-group">
            <label>Désignation<span style="color:red;">*</span></label>
            <input class="form-control" type="text" id="liv" name="liv" autocomplete="off" required />
          </div>
          <div class="form-group">
            <label> Catégorie<span style="color:red;">*</span></label>
            <select class="form-control" id="cat" name="cat" required="required">
              <option value=""> Selectioner Categorie</option>
              <?php
              foreach ($getCat as $value) { ?>
                <option value='<?= $value->ID ?>'><?= $value->LIBELLE ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label> Auteur<span style="color:red;">*</span></label>
            <input class="form-control" type="text" id="aut" name="aut" required="required">
          </div>
          <div class="form-group">
            <label>ISBN<span style="color:red;">*</span></label>
            <input class="form-control" type="text" id="isbn" name="isbn" required="required" autocomplete="off" />
            <p class="help-block">l'ISBN est un numéro standard et international du livre.ISBN est unique</p>
          </div>
          <button type="submit" class="btn btn-info">Ajouter </button>
          <a href='' class="text text-danger pull-right ">Afficher Tous </a>

        </form>
      </div>
    </div>
  </div>
</div>