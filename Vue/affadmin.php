<?php

$title = 'Les Admins'; 
include 'Public/includes/header.php';
?>
    <body > 
		<div class="row">  
			</div><br>
				<?php include 'public/includes/menuadmin.php';?>
				<div class="container" style="margin-top:60px" >
				<div class="panel panel-default"> 
				  <div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Administrateurs</b></div>
				  <div class="panel-body">
     				     <div class='col-sm-12' id="message"></div>	
					<button type="button" data-toggle="modal" id='ajouter' data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>

					<table class="table table-condensed table-responsive table-striped" style="margin-top:20px">
						<thead>
						<tr>
							<th>Matricule</th>
							<th>Noms</th>
							<th>Tel</th>
							<th>E-Mail</th>
							<th>Login</th>
							<th>Access</th>
							<th>Activer</th>
							<th>Actions</th>
						</tr>
						</thead>
						<tbody id="admin_data" class="myTable">
						</tbody>
					</table> 
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
		    $(".myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
<?php
include_once 'Public/modals/addadmin.php';
include_once 'Public/modals/modadmin.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="public/ajax/admin.js"></script>
