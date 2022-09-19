
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = "Horaire";
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
        <div class="col-sm-3">
          <div class="form-group">
            <select name="fac" id="fac" class='form-control' required>
              <option value=''>Choisir une section</option>
              <?php foreach ($getS as $f) { ?>
                <option value='<?= $f->IDSECT ?>' ><?= $f->SECTION ?></option>
              <?php } ?>
            </select>
          </div>
          </div>
        <div class="col-sm-3">
          <div class="form-group">
            <select name="dep" id="dep" class='form-control' required>
              <option value=''>Choisir une option</option>
            </select>
          </div>
          </div>
        <div class="col-sm-3">
          <div class="form-group">
            <select name="niv" id="niv" class='form-control' required>
              <option value=''>Choisir une classe</option>
            </select>
          </div>
          </div>
        <div class="col-sm-3">           
          <input type="hidden" name="aa" value="<?=$getAs->ID?>" id="aa">        
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary afficher" name="valider" id="afficher"><i class="fa fa-eye"></i> Afficher</button>
          </div>
        </div>
      </div>
    </form>
    </div>
    <?php if(isset($_POST['valider'])):?>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-9"> 
  <div>  
    <form id="horaire" class="form" enctype="multipart/form-data" method="post">
      <div class="row">
        <div class="col-sm-12">
          <div class="well"> 
         <?php  if(@$getEC2->IDSECT=='4'):?>                     
              <table class="table table-condensed table-bordered">
                <thead>
                  <tr>
                    <th>Heure</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>07h00-07h15</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>07h00-07h15</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>07h00-07h15</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td colspan="7" align="center"><b>LA RECREATION</b></td>
                  </tr>
                  <tr>
                    <td><b>07h00-07h15</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>07h00-07h15</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>07h00-07h15</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                      <?php foreach ($getEC as $f) { ?>
                        <option value='<?= $f->IDCO ?>' ><?= $f->COURS ?></option>
                      <?php } ?>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td colspan="7" align="center"><button class="btn btn-xs btn-primary">VALIDER CETTE HORAIRE</button></td>
                  </tr>
                </tbody>
              </table>
           <?php else: ?>                    
              <table class="table table-condensed table-bordered">
                <thead>
                  <tr>
                    <th>Heure</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>12h15-13h00</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>12h15-13h00</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>12h15-13h00</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>12h15-13h00</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>12h15-13h00</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                  </tr>
                  <tr>
                    <td><b>12h15-13h00</b></td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                    <td>
                      <select type="text" class="form-control" id="" name="">
                        <option value="">d</option>
                      </select>
                      </td>
                  </tr>
                </tbody>
              </table>          
           <?php endif ?>
            </div>
        </div>
      </div>
      </form>  
      </p>  
    </div>  
        </div>
      </div> 
    <?php endif ?>
  </div>
</body>

</html>
<script>
  
</script>
<script type="text/javascript" src="Public/ajax/recouvrement.js"></script>
<script type="text/javascript" src="Public/ajax/join3.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>