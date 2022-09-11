<?php $title="Fiche de cotes";
 include 'public/includes/header.php';
 ?>
    <body > 
    <div class="row" style="padding-top: 60px;margin: 8px;"> 
      <?php include 'public/includes/menuadmin.php';			
		include 'public/includes/liste.php';?>  
        <div class="row">
          <div class="col-sm-7">
          <h3>Ajout Notes</h3>
          <div class="form-group">
             <div class="col-sm-3">
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Une Annee Academique</option>
                  <option>2019-2020</option>
                  <option>2020-2021</option>
                </select><br>
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Un Cours</option>
                  <option>Droit des Affaires</option>
                  <option>Chimie</option>
                </select><br>
             </div>
             <div class="col-sm-3">
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Une Faculty</option>
                  <option>Droit</option>
                  <option>Economie</option>
                </select><br>    
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Une Categorie</option>
                  <option>TP</option>
                  <option>TD</option>
                  <option>Examen</option>
                </select>
             </div>
             <div class="col-sm-3">
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Un Departement</option>
                  <option>BioMed</option>
                  <option>Finance</option>
                </select><br>
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Un Semestre</option>
                  <option>1</option>
                  <option>2</option>
                </select>
             </div>
             <div class="col-sm-3">
                <select id="disabledSelect" class="form-control">
                  <option>Choisir Un Niveau</option>
                  <option>G1</option>
                  <option>G2</option>
                </select><br>
                <input type="date" class="form-control">
             </div>
           <label for="disabledSelect" class="col-sm-1 control-label"></label>      
          </div>  
          </div><br>
          <div class="col-sm-8" style="padding-top:20px;">
          <div class="row">
            <div class="col-sm-10">             
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                  Ajouter une Note
              </h4>
            </div>
              <div class="panel-body">
          <table width="100px" class="table table-condensed table-responsive table-striped" style="margin-top:5px">
            <thead>
            <tr>
              <th>Matricule</th>
              <th>Noms</th>
              <th>Notes</th>
            </tr>
            </thead>
            
            <tbody id="myTable">
            <tr>
              <td>ELV201828726</td>
              <td>Placide Waki</td>
              <td>
                <div class="col-sm-4">
                  <input type="text" class="form-control">
                </div>
                <label type="hidden" class="col-sm-8"></label>
              </td>
            </tr>
            <tr>
              <td>ELV201825602</td>
              <td>Samy Kabeya</td>
              <td>
                <div class="col-sm-4">
                  <input type="text" class="form-control">
                </div>
                <label type="hidden" class="col-sm-8"></label>
              </td>
            </tr>
          </tbody>
        </table>
        <button class="btn btn-primary btn-sm pull-right">Ajouter Note</button>
            </div>
          </div>
            </div>  
          </div>
          </div>
        </div>
    </div> 
    </body>  
    </html>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>