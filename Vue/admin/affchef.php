
<?php if(isset($_SESSION['logged'])) { ?>
	<?php include 'public/includes/header.php';?>
    <body > 
		<div class="row">  
			</div><br>
				<?php include 'public/includes/menuadmin.php';?>
				<div class="container" style="margin-top:60px" > 
				 <div class="form-group">
				    <div class="col-sm-2">
				      <input class="form-control" id="myInput" type="text" placeholder="Rechercher...">
				  		<br>
				    </div>
				  </div>
				  
					<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter</b></button>
					<table class="table table-condensed table-responsive table-striped" style="margin-top:20px">
						<thead>
						<tr>
							<th>#</th>
							<th>Noms</th>
							<th>Tel</th>
							<th>Sexe</th>
							<th>Adresse</th>
							<th>Activer</th>
							<th>Actions</th>
						</tr>
						</thead>
						
						<tbody id="myTable">
						<tr>
							<td>1</td>
							<td>Sadicky Dave</td>
							<td>+257 61 22 12 44</td>
							<td>M</td>
							<td>Cibitoke</td>
							<td>
								<a href="" data-toggle="tooltip" data-placement="top" title="Activer" class="btn btn-sm btn-default" ><span class="glyphicon glyphicon-ok" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Desactiver" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove" ></span></a>
							</td>
							<td>
								<button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#Details" ><span data-toggle="tooltip" data-placement="top" title="Details" class="glyphicon glyphicon-tasks"></span></button>
								<a href="" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" ></span></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jimmy Waki</td>
							<td>+257 71 00 98 19</td>
							<td>M</td>
							<td>Ngagara</td>
							<td>
								<a href="" data-toggle="tooltip" data-placement="top" title="Activer" class="btn btn-sm btn-default" ><span class="glyphicon glyphicon-ok" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Desactiver" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove" ></span></a>
							</td>
							<td>
								<button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#Details" ><span data-toggle="tooltip" data-placement="top" title="Details" class="glyphicon glyphicon-tasks"></span></button>
								<a href="" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" ></span></a>
								<a href="" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" ></span></a>
							</td>
						</tr>
						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Noms</th>
							<th>Tel</th>
							<th>Sexe</th>
							<th>Adresse</th>
							<th>Activer</th>
							<th>Actions</th>
						</tr>
						</tfoot>
					
					</table>			
				</div>
    </body>  
    </html>  

<!-- Modal -->
<div id="Ajouter" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="Details" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sadicky Dave</h4>
      </div>
      <div class="modal-body">
      	<table class="table-condensed table-bordered">
      		<tr>
      			<th>Noms</th>
      			<td>Sadicky Dave</td>
      		</tr>
      		<tr>
      			<th>Telephone</th>
      			<td>61 22 12 44</td>
      		</tr>
      		<tr>
      			<th>Sexe</th>
      			<td>M</td>
      		</tr>
      		<tr>
      			<th>Email</th>
      			<td>sdst@gst.d</td>
      		</tr>
      		<tr>
      			<th>Adresse</th>
      			<td>Cibitoke</td>
      		</tr>
      		<tr>
      			<th>UserName</th>
      			<td>Admin123</td>
      		</tr>
      		<tr>
      			<th>Password</th>
      			<td><?=md5(123) ?></td>
      		</tr>
      		<tr>
      			<th>Access</th>
      			<td>1</td>
      		</tr>
      		<tr>
      			<th>Photo</th>
      			<td><img src="" alt="photo eleve" class="img-circle"></td>
      		</tr>
      	</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>
