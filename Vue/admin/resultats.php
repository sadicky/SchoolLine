
<?php if(isset($_SESSION['logged'])) { ?><?php $title='Resultats'; include 'public/includes/header.php';?>
    <body > 
		<div class="row"> 
			<?php include 'public/includes/menuadmin.php';?>
			<div style="padding-top: 60px;margin: 8px;"> 
			  <div class="col-sm-2">
			  	 <div class="panel-group" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				        Résultats</a>
				      </h4>
				    </div>
				    <div id="collapse2" class="panel-collapse collapse">
				      <div class="panel-body">
				  	  <ul class="list-group">
						  <li class="list-group-item"><a href="">Semestres</a></li>
						  <li class="list-group-item"><a href="">Facultés</a></li>
					 </ul>
				      </div>
				    </div>
				  </div>
				</div> 
			  </div>
			  <div class="col-sm-10">
        <h3>TOP 10 LAUREATS TOUTES FACULTES</h3> 
          <table width="100px" class="table table-condensed table-responsive table-striped" style="margin-top:5px">
            <thead>
            <tr>
              <th>Matricule</th>
              <th>Noms</th>
              <th>Facultés</th>
              <th>Résultats</th>
              <th>Mention</th>
            </tr>
            </thead>
            
            <tbody id="myTable">
            <tr>
              <td>ELV201828726</td>
              <td>Placide Waki</td>
              <td>Genie Info</td>
              <td>87,8%</td>
              <td><span class="label label-success">Distinction</span></td>
            </tr>
            <tr>
              <td>ELV201825602</td>
              <td>Samy Kabeya</td>
              <td>Bio Med</td>
              <td>87,7%</td>
              <td><span class="label label-success">Distinction</span></td>
            </tr>
          </tbody>
          <tfooter>
          <button class="btn btn-danger btn-sm ">Imprimer</button>
          </tfooter>
        </table>
				</div>
			  </div>
		</div> 
    </body>  
    </html>  


    <?php } else {
	header('Location:index.php?page=non_a');
} ?>