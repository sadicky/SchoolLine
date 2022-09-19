<?php if (isset($_SESSION['logged'])) { ?><?php $title = "Récouvrements";
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
                  <option value='<?= $f->IDSECT ?>'><?= $f->SECTION ?></option>
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
            <div class="form-group">
              <input type="hidden" name="aa" value="<?= $getAs->ID ?>" id="aa" class='form-control'>
              <button type="submit" class="btn btn-block btn-primary afficher" name="valider" id="afficher"><i class="fa fa-eye"></i> Afficher</button>
            </div>
          </div>
        </div>
    </form>
  </div>
  <?php if (isset($_POST['valider'])) : ?>
    <div class="col-sm-10" style="padding-top:20px;">
      <div class="row">
        <div class="col-sm-9">
          <h2 class="page-header">Les Tranches</h2>
          <ul class="nav nav-pills">
            <li class="active"><a data-toggle="tab" href="#home">1ère Tranche</a></li>
            <li><a data-toggle="tab" href="#menu1">2è Tranche</a></li>
            <li><a data-toggle="tab" href="#menu2">3è Tranche</a></li>
            <li><a data-toggle="tab" href="#menu3">4è Tranche</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <p>
              <form id="cotes" class="form" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title"> LISTE D'ELEVES </h4>
                      </div>
                      <div class="panel-body">
                        <table id="example" class="table table-condensed" style="margin-top:5px">
                          <thead>
                            <tr>
                              <th>Matricule</th>
                              <th>Nom</th>
                              <th>Prenom</th>
                              <th>Classe</th>
                              <th>Option</th>
                              <th>Payé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (@$getEC) {
                              foreach (@$getEC as $ec) { ?>
                                <tr>
                                  <td><b><?= $ec->MATRICULE ?></b></td>
                                  <td><?= $ec->NOM ?></td>
                                  <td><?= $ec->PRENOM ?></td>
                                  <td><?= $ec->CLASSE ?></td>
                                  <td><?= $ec->OPT ?></td>
                                  <td>
                                    <?php $t1=$ec->MONTANT / 4;
                                     if ($ec->PMONTANT >= $t1) : ?>
                                      <label class="label label-success"><?= $t1 ?></label>
                                    <?php else : ?>
                                      <label class="label label-danger"><?= $ec->PMONTANT ?></label>
                                    <?php endif ?>
                                  </td>
                                </tr>
                            <?php }
                            } else {
                              echo "<h3>Aucun élève trouvé</h3>";
                            } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </p>
            </div>
            <div id="menu1" class="tab-pane fade">
              <p>
              <form id="cotes" class="form" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title"> LISTE D'ELEVES </h4>
                      </div>
                      <div class="panel-body">
                        <table id="example" class="table table-condensed" style="margin-top:5px">
                          <thead>
                            <tr>
                              <th>Matricule</th>
                              <th>Nom</th>
                              <th>Prenom</th>
                              <th>Classe</th>
                              <th>Option</th>
                              <th>Payé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (@$getEC) {
                              foreach (@$getEC as $ec) { ?>
                                <tr>
                                  <td><b><?= $ec->MATRICULE ?></b></td>
                                  <td><?= $ec->NOM ?></td>
                                  <td><?= $ec->PRENOM ?></td>
                                  <td><?= $ec->CLASSE ?></td>
                                  <td><?= $ec->OPT ?></td>
                                  <td>
                                    <?php $t2=$ec->PMONTANT - $t1;
                                     if ($ec->MONTANT / 4 <= $t2) : ?>
                                      <label class="label label-success"><?= $t1 ?></label>
                                    <?php else : ?>
                                      <label class="label label-danger"><?=$ec->PMONTANT?></label>
                                    <?php endif ?>
                                  </td>
                                </tr>
                            <?php }
                            } else {
                              echo "<h3>Aucun élève trouvé</h3>";
                            } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </p>
            </div>
            <div id="menu2" class="tab-pane fade">
              <p>
              <form id="cotes" class="form" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title"> LISTE D'ELEVES </h4>
                      </div>
                      <div class="panel-body">
                        <table id="example" class="table table-condensed" style="margin-top:5px">
                          <thead>
                            <tr>
                              <th>Matricule</th>
                              <th>Nom</th>
                              <th>Prenom</th>
                              <th>Classe</th>
                              <th>Option</th>
                              <th>Payé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (@$getEC) {
                              foreach (@$getEC as $ec) { ?>
                                <tr>
                                  <td><b><?= $ec->MATRICULE ?></b></td>
                                  <td><?= $ec->NOM ?></td>
                                  <td><?= $ec->PRENOM ?></td>
                                  <td><?= $ec->CLASSE ?></td>
                                  <td><?= $ec->OPT ?></td>
                                  <td>
                                    <?php $t3=$ec->PMONTANT - $t2;
                                     if ($ec->MONTANT / 4 <= $t3) : ?>
                                      <label class="label label-success"><?= $t3 ?></label>
                                    <?php else : ?>
                                      <label class="label label-danger"><?= $t2 ?></label>
                                    <?php endif ?>
                                    </td>                                  
                                </tr>
                            <?php }
                            } else {
                              echo "<h3>Aucun élève trouvé</h3>";
                            } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </p>
            </div>
            <div id="menu3" class="tab-pane fade">
              <p>
              <form id="cotes" class="form" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title"> LISTE D'ELEVES </h4>
                      </div>
                      <div class="panel-body">
                        <table id="example" class="table table-condensed" style="margin-top:5px">
                          <thead>
                            <tr>
                              <th>Matricule</th>
                              <th>Nom</th>
                              <th>Prenom</th>
                              <th>Classe</th>
                              <th>Option</th>
                              <th>Payé</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (@$getEC) {
                              foreach (@$getEC as $ec) { ?>
                                <tr>
                                  <td><b><?= $ec->MATRICULE ?></b></td>
                                  <td><?= $ec->NOM ?></td>
                                  <td><?= $ec->PRENOM ?></td>
                                  <td><?= $ec->CLASSE ?></td>
                                  <td><?= $ec->OPT ?></td>
                                  <td>                                    
                                  <?php $t4=$ec->PMONTANT - $t3;
                                  var_dump($t3);
                                     if ($ec->MONTANT / 4 <= $t4) : ?>
                                      <label class="label label-success"><?= $t4 ?></label>
                                    <?php else : ?>
                                      <label class="label label-danger"><?= $t3 ?></label>
                                    <?php endif ?>
                                    </td>  
                                    </td>
                                </tr>
                            <?php }
                            } else {
                              echo "<h3>Aucun élève trouvé</h3>";
                            } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </p>
            </div>
          </div>
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