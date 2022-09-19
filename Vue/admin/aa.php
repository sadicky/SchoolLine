
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = "Année Scolaire"; include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';
			include 'public/includes/liste.php';?> 
			<script type="text/javascript" src="public/ajax/aa.js"></script>
			  <div class="col-sm-10">
			  <div class="panel panel-default"> 
				  <div class="panel-heading"><b><span class="glyphicon glyphicon-edit"></span> Les Années Scolaires</b></div>
				  <div class="panel-body">
				    <div class="form-group">
				  <form action="" id="form" method="post">		  
				    <div class="form-group">
				    <div class="col-sm-2">
					 <input type="hidden" name="id" id='id'>
				      <input class="form-control" name="aa" id="aa" type="text" placeholder="Ex: 2020-2021">
				    </div>
				    <button name="ok" id="ok" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter</button>
				    </div>
				  </form>
				  <div class="message"></div>	
					<table class="table table-condensed table-responsive" style="margin-top:20px">
						<thead>
						<tr>
							<th>Année Scolaire</th>
						</tr>
						</thead>
						<tbody id="aa_data" class="myTable">
						</tbody>
				</table>
			  </div>
		</div> 
    </body>  
    </html>
	<?php } else {
	header('Location:index.php?page=non_a');
} ?>