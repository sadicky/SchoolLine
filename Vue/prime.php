<?php $title = 'Prime'; include 'public/includes/header.php'; include 'public/includes/menuadmin.php';?>
    <body > 
 	    <div class="container" style="margin-top:60px" > 
             <div class="container">
                <div class="masthead">
                    <nav>
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a data-toggle="tab" href="#employe" >Employés</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#deduction">Déduction/s</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#salaire">Révenu</a>
                        </li>
                    </ul>
                    </nav>
                </div>
                <div class="tab-content">  
                        <div id="employe" class="tab-pane fade in active"> 
                            <div class="well">
                                <button type="button" data-toggle="modal" data-target="#addEmployee" class="btn btn-success">Nouvel Employé</button>
                                <h3 align="center"><b>Liste des Employés</b></h3>
                                <div class="table-responsive">
                                    <form method="post" action="" >
                                        <table class="table table-bordered table-hover table-condensed" id="myTable">
                                        <!-- <h3><b>Ordinance</b></h3> -->
                                        <thead>
                                            <tr>
                                            <th><p align="center">Noms</p></th>
                                            <th><p align="center">Sexe</p></th>
                                            <th><p align="center">Type</p></th>
                                            <th><p align="center">Role</p></th>
                                            <th><p align="center">Action</p></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td align="center"><a href="view_employee.php?emp_id=<?php echo 1; ?>" title="Update"><?php echo 'Sadicky' ?>,  <?php echo 'dave' ?></a></td>
                                            <td align="center"><a href="view_employee.php?emp_id=<?php echo 2; ?>" title="Update"><?php echo 'M' ?></a></td>
                                            <td align="center"><a href="view_employee.php?emp_id=<?php echo 3; ?>" title="Update"><?php echo 'Regulier' ?></a></td>
                                            <td align="center"><a href="view_employee.php?emp_id=<?php echo 4; ?>" title="Update"><?php echo 'Professeur' ?></a></td>
                                            <td align="center">
                                                <a class="btn btn-primary" href="view_account.php?emp_id=<?php echo $row["emp_id"]; ?>">Account</a>
                                                <a class="btn btn-danger" href="delete.php?emp_id=<?php echo $row["emp_id"]; ?>">Delete</a>
                                            </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>  
                        <div id="deduction" class="tab-pane fade">  
                        <div class="well" style="text-align:center;">
                        <form class="form-horizontal" action="#" name="form">
                            <div class="form-group">
                            <label class="control-label">PhilHealth  :</label>
                                <?php echo 1; ?>.00
                            </div>
                            <div class="form-group">
                            <label class="control-label">BIR :</label>
                                <?php echo 2; ?>.00
                            </div>
                            <div class="form-group">
                            <label class="control-label">GSIS  :</label>
                                <?php echo 3; ?>.00
                            </div>
                            <div class="form-group">
                            <label class="control-label">PAG-IBIG  :</label>
                                <?php echo 4; ?>.00
                            </div>
                            <div class="form-group">
                            <label class="control-label">Loans :</label>
                                <?php echo 5; ?>.00
                            </div><br><br>
                            <div class="form-group">
                            <label class="control-label">Total Deductions :</label>
                                <?php echo 15; ?>.00
                            </div>

                            <div class="form-group">
                            <label class="control-label"><button type="button" data-toggle="modal" data-target="#deductions" class="btn btn-danger">Mis à Jours</button></label>
                            </div>
                        </form> 
                        </div> 
                        </div>  
                        <div id="salaire" class="tab-pane fade">
                            
          <div class="well bs-component">
            <form class="form-horizontal">
              <fieldset>
                <button type="button" data-toggle="modal" data-target="#overtime" class="btn btn-success">Modifier Taux Heure Sup</button>
                
                <p class="pull-right">Heure supplemtaire: <big><b><?php echo 10; ?>.00</b></big></p><br>
                <p class="pull-right">Salary rate: <big><b><?php echo 15000; ?>.00</b></big></p>
                <p align="center"><big><b>Account</b></big></p>
                <div class="table-responsive">
                  <form method="post" action="" >
                    <table class="table table-bordered table-hover table-condensed" id="myTable">
                      <!-- <h3><b>Ordinance</b></h3> -->
                      <thead>
                        <tr class="info">
                         <th><p align="center">Noms</p></th>
                         <th><p align="center">Déduction</p></th>
                         <th><p align="center">Overtime</p></th>
                         <th><p align="center">bonus</p></th>
                         <th><p align="center">Salaire Net</p></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td align="center"><?php echo 'Sadicky'?>, <?php echo 'Dave'?></td>
                          <td align="center"><big><b><?php echo 1?></b></big>.00</td>
                          <td align="center"><big><b><?php echo 12?></b></big> hrs</td>
                          <td align="center"><big><b><?php echo 0?></b></big>.00</td>
                          <td align="center"><big><b><?php echo 15000?></b></big>.00</td>
                        </tr>
                      </tbody>

                        <tr class="info">
                         <th><p align="center">Noms</p></th>
                         <th><p align="center">Déduction</p></th>
                         <th><p align="center">Overtime</p></th>
                         <th><p align="center">bonus</p></th>
                         <th><p align="center">Salaire Net</p></th>
                        </tr>
                    </table>
                  </form>
                </div>
              </fieldset>
            </form>
          </div>
                        </div>   
                    </div>  

                    <br>
    </body>  
    </html> 
    <script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});

		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
