<?php
require_once 'Model/admin.class.php';
$admin = new Admin();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $output = '';
    $ad = $admin->getAdId($id);
    foreach($ad as $v){
        $output ="
		<div id='details' class='modal fade' role='dialog'>
		  <div class='modal-dialog modal-sm'>
			<!-- Modal content-->
			<div class='modal-content'>
			  <div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>&times;</button>
				<h4 class='modal-title'>".$v->NOM." ".$v->PRENOM."</h4>
			  </div>
			  <div class='modal-body' >
				<table class='table-condensed table-bordered' id='adminid'>
				<img src='' class='img-thumbnail' width='50' height='35'alt='photo'>
					<tr>
						<th>Adresse</th>
						<td>ADMIN00".$v->ID."</td>
					</tr>
					<tr>
						<th>Noms</th>
						<td>".$v->NOM." ".$v->PRENOM."</td>
					</tr>
					<tr>
						<th>Telephone</th>
						<td>".$v->TEL."</td>
					</tr>
					<tr>
						<th>Acess</th>
						<td>".$v->ACCESS."</td>
					</tr>
					<tr>
						<th>Login</th>
						<td>".$v->LOGIN."</td>
					</tr>
					<tr>
						<th>Password</th>
						<td>".$v->PWD."</td>
					</tr>
					<tr>
						<th>Date d'inscription</th>
						<td>".$v->DATEINS."</td>
					</tr>
					</table>
			  </div>
			  <div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Fermer</button>
			  </div>
			</div>
  </div>
</div>
        ";
    }
    echo $output;
}
?>

		
      	