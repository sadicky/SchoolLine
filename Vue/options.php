<?php $title = "Options" ; include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';			
		include 'public/includes/liste.php';
			?>  
			  <div class="col-sm-10">  
				  <button type="button" data-toggle="modal" data-target="#Ajouter"  class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter une option</b></button>
				  <h3>Options</h3>
				<div class="form-group">
     				 <div class='col-sm-12' id="message"></div>	
				  </div>					  
					<div class="table-responsive">                  	
					<table id="dataTables-example" class="table table-condensed table-striped table-bordered" style="margin-top:20px">
						<thead>
						<tr>
							<th>#</th>
							<th>Option</th>
							<th>Section</th>
							<th>Access</th>
							<th>Activer</th>
							<th>Actions</th>
						</tr>
						</thead>
						
						<tbody>
							<?php
							     foreach ($getO as $value) {
									echo "<tr><td><b><a href='#' data-toggle='popover' class='afficher'  id='$value->ID' >DEP00".$value->ID."</a></b></td>";
									echo "<td><b><a href='#' data-toggle='popover' class='afficher' data-trigger='focus' id='$value->ID' > ".$value->OPT."</a></b></td>";
									echo "<td>".$value->SECTION."</td>";
									if($value->ACCESS == 0){
									echo "<td> <span class='label label-danger'>Innactif</span></td>";
									}
									else{
									echo "<td> <span class='label label-info'>Actif</span></td>";
									}
									if($value->ACCESS == 0){
									echo "<td><button type='button'  id='".$value->ID."' name='activer' class='btn btn-block btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";}
									else {
										echo "<td>	<button type='button'  id='".$value->ID."' name='desactiver' class='btn btn-block btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
										</td>";}
									echo "<td>
											 <a href='' type='submit' name='update' class='btn btn-block btn-xs btn-info update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></a>
									 </td></tr>";
								  }	
							
							?>						
						</tbody>
				</table>
					</div>
           <button type="button" data-toggle="tooltip" data-placement="top" title="Imprimer" class="btn btn-danger">Imprimer</button>
			  </div>
		</div> 
    </body>  
    </html>


<?php
include_once 'Public/modals/addopt.php';?>

<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});

		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $(".myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>

<script type="text/javascript" src="Public/ajax/option.js"></script>