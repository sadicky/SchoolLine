<?php
require_once '../../Model/admin.class.php';
$admin = new Admin();
$id=isset($_POST['id'])?$_POST['id']:'';
//$id=4;
if($id)
{
    $output = '';
    $ad = $admin->getAdId($id);
    foreach($ad as $v){
        $output ="
		<table class='table table-bordered table-condensed table-stripped'>
		<tr>
			<td>ID</td>
			<td><label>ADMIN00".$v->ID."</label></td>
		</tr>
		<tr>
			<td>NOMS</td>
			<td><label>".$v->NOM." ".$v->PRENOM."</label></td>
		</tr>
		<tr>
			<td>LOGIN</td>
			<td><label>".$v->LOGIN."</label></td>
		</tr>
		<tr>
			<td>TEL</td>
			<td><label>".$v->TEL."</label></td>
		</tr>
		<tr>
			<td>DATE AJOUT</td>
			<td><label>".$v->DATEINS."</label></td>
		</tr>
		<tr>
			<td>ACCESS</td>
			<td><label>".$v->ACCESS."</label></td>
		</tr>
        </table>";
    }
    echo $output;
}
?>
