<div id="Emprunt" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Empunter un Livre</h4>
      </div>
      <div class="modal-body">	
        <form role="form" method="post">
        <div class="form-group">
        <label>Matricule Etudiant<span style="color:red;">*</span></label>
        <input class="form-control" type="text" name="studentid" id="studentid" onBlur="getstudent()" autocomplete="off"  required />
        </div>
        <div class="form-group">
        <span id="get_student_name" style="font-size:16px;"></span> 
        </div>
        <div class="form-group">
        <label>numéro ISBN ou Titre du livre<span style="color:red;">*</span></label>
        <input class="form-control" type="text" name="booikid" id="bookid" onBlur="getbook()"  required="required" />
        </div>
        <div class="form-group">
        <select  class="form-control" name="bookdetails" id="get_book_name" readonly>
        </select>
        </div>
        <button type="submit" name="issue" id="submit" class="btn btn-info">Emprunter </button>
	  		<a href='' class="text text-danger pull-right ">Afficher Tous </a>
        </form>
      </div>
    </div>
  </div>
</div> 