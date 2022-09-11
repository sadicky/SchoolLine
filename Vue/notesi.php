<?php $title = "Fiche de cotes";
include 'Public/includes/header.php';
// var_dump($getEC);
?>

<body>
  <div class="row" style="padding-top: 60px;margin: 8px;">
    <?php include 'Public/includes/menuadmin.php';
    include 'Public/includes/liste.php'; ?>
    <div class="col-sm-7">
          <div class='col-sm-12' id="message"></div>
    <form id="formnotes" class="form" enctype="multipart/form-data" method="post">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <select name="fac" id="fac" class='form-control' required>
              <option value=''>Choisir une section</option>
              <?php foreach ($getS as $f) { ?>
                <option value='<?= $f->IDSECT ?>' ><?= $f->SECTION ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <select name="dep" id="dep" class='form-control' required>
              <option value=''>Choisir une option</option>
            </select>
          </div>
          <div class="form-group">
            <select name="niv" id="niv" class='form-control' required>
              <option value=''>Choisir une classe</option>
            </select>
          </div>
          <div class="form-group">
            <select name="cours" id="cours" class='form-control' required>
              <option value=''>Choisir un Cours</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
					<input type="text" readonly name="type" required class="form-control select2">
          </div>
          <div class="form-group">
            <input type="number" required placeholder="point demandé" id="noted" name="noted" class="form-control">
          </div>
          <div class="form-group">
            <input type="date"  id="daten" name="daten" required class="form-control">
          </div>
          <div class="form-group">
            <?php
								$string = "ABECDEFGHIJKLMN0123456789OPQRSTUVWXYZ";
								$string = str_shuffle($string);
								$codemat = substr($string, 0, 8);
								?>
            <input type="text" class="form-control" value="<?=$codemat?>" name="codemat" id="codemat" readonly>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <select name="aa" id="aa" class='form-control' required>
              <option value=''>Choisir une Annee Scolaire</option>
              <?php foreach ($getAa as $a) { ?>
                <option value='<?= $a->ID ?>'><?= $a->AS ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <select id="sem" name="sem" class="form-control select2" required>
              <option value=''>Choisir un semestre</option>
              <?php
              foreach ($getN as $a) { ?>
                <option value='<?= $a->ID ?>'><?= $a->SEMESTRE ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <select id="periode" name="periode" class="form-control select2" required>
              <option value=''>Choisir Une Période</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary afficher" name="valider" id="afficher"><i class="fa fa-eye"></i> Afficher</button>
          </div>
        </div>
      </div>
    </form>
    </div>
    <?php if(isset($_POST['valider'])):?>
    <div class="col-sm-10" style="padding-top:20px;">
    <form id="cotes" class="form" enctype="multipart/form-data" method="post">
      <div class="row">
        <div class="col-sm-10">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <?php 
                $periode = $_POST['periode'];
                $codemat = $_POST['codemat'];
                $cours = $_POST['cours'];                  
                $noted = $_POST['noted'];
                $daten = $_POST['daten'];
                // echo $codemat;
                ?>
                FICHE DE COTE: Date: <b><?=$daten?></b>
              </h4>
            </div>
            <div class="panel-body">              
              <table id="dataTables-example" class="table table-condensed" style="margin-top:5px">
                <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Obtenu</th>
                    <th>Demandé</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                
                  if(@$getEC){ foreach(@$getEC as $ec){?>
                  <tr>
                    <td><img src="<?=$ec->IMAGE?>" width="20px" class="img-rounded" alt="Photo"></td>
                    <td><b><?=$ec->MATRICULE?></b></td>
                    <td><?=$ec->NOM?></td>
                    <td><?=$ec->PRENOM?></td>
                    <td>
                      <input type="hidden" value="<?=$cours?>" name="cours" id="cours" >
                      <input type="hidden" value="<?=$periode?>" name="periode" id="periode" >
                      <input type="hidden" value="<?=$daten?>" name="daten" id="daten" >
                      <input type="hidden" value="<?=$codemat?>" name="codemod" id="codemod" >
                      <input type="hidden" value="<?=$ec->ID?>" name="eleve[]" id="eleve" class="form-control">
                      <input type="text" name="notes[]" id="notes" class="form-control">
                    </td>
                    <td> <input type="text" readonly value="<?=$noted?>" name="noted" class="form-control" id="noted">
                    </td>
                  </tr>
                  <?php } }else{ echo "Aucun élève trouvé";} ?>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-sm pull-right validate"><i class="fa fa-edit"></i>Ajouter Notes</button>
            </div>
          </div>
        </div>
      </div>
      </form>            
    </div>
    <?php endif ?>
  </div>
</body>

</html>
<script>
  
</script>
<script type="text/javascript" src="Public/ajax/note.js"></script>
<script type="text/javascript" src="Public/ajax/join3.js"></script>
<script type="text/javascript" src="Public/ajax/joinnote.js"></script>