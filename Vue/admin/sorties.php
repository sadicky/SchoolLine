
<?php if(isset($_SESSION['logged'])) { ?><?php
$title= 'Sorties';
 include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php';?>  
			  <div class="col-sm-10">
				  <h3>Sorties disponibles</h3>			  
				    <div class="form-group">
				      <div class="col-sm-3">
				        <select id="disabledSelect" class="form-control">
				          <option>Choisir Une Année Academique</option>
				          <option>2019-2020</option>
				          <option>2020-2021</option>
				        </select>
				        </div>
				    <div class="col-sm-2">
				      <input class="form-control" id="myInput" type="text" placeholder="Rechercher...">
				    </div>
				      <label for="disabledSelect" class="col-sm-7 control-label"></label>
				    </div>	
					<button type="button" data-toggle="modal" data-target="#Ajouter" class="btn btn-sm btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> <b>Ajouter une Sortie</b></button>
					<table width="100px" class="table table-condensed table-responsive" style="margin-top:20px">
						<thead>
						<tr>
							<th>Date</th>
							<th>Départements</th>
							<th>Concerné</th>
							<th>Modifier</th>
							<th>Details</th>
						</tr>
						</thead>
						
						<tbody id="sorties" class='myTable'></tbody>
				</table>
			  </div>
		</div> 
    </body>  
    </html>
<?php
include_once 'Public/modals/addsortie.php';
include_once 'Public/modals/modadmin.php';
include_once 'Public/modals/detadmin.php';
?>
<script type="text/javascript" src="public/ajax/sorties.js"></script>
<script type="text/javascript" src="public/ajax/join.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>