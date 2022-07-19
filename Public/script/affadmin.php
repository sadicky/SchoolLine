<?php
        require_once '../../Model/admin.class.php';
        $admin = new Admin();
        foreach ($data= $admin->getAllAdmin() as $value) {
		echo "<tr><td><b><a href='#' data-toggle='popover' class='afficher'  id='$value->ID' >ADMIN00".$value->ID."</a></b></td>";
		echo "<td><b><a href='#' data-toggle='popover' class='afficher' data-trigger='focus' id='$value->ID' >".$value->NOM." ".$value->PRENOM."</a></b></td>";
		echo "<td>".$value->TEL."</td>";
		echo "<td>".$value->EMAIL."</td>";
		echo "<td>".$value->LOGIN."</td>";
		if($value->ACCESS == 0){
        echo "<td> <span class='label label-danger'>".$value->ACCESS."</span></td>";
		}
		else{
		echo "<td> <span class='label label-info'>".$value->ACCESS."</span></td>";
		}
		if($value->ACCESS == 0){
		echo "<td><button type='button'  id='".$value->ID."' name='activer' class='btn btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";}
		else {
			echo "<td>	<button type='button'  id='".$value->ID."' name='desactiver' class='btn btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
			</td>";}
        echo "<td>
	     		<a href='index.php?page=modadmin&id=$value->ID' type='submit' name='update' class='btn btn-xs btn-info update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></a>
				<button type='button' name='delete' id='".$value->ID."' class='btn btn-xs btn-danger delete'  title='Supprimer Admin'><span class='glyphicon glyphicon-trash'></span></button>
		 </td></tr>";
      }	
?>
 
<script type="text/javascript" src="Public/ajax/popadmin.js"></script>