<?php
 require_once '../../Model/bib.class.php';
 $bib = new Bibliotheque();
 foreach ($data= $bib->getBib() as $value) {
   echo "<tr><td><b><a href='#' id='$value->ID' title='$value->NOMS' data-toggle='popover' class='afficher'  > BIB000".$value->ID."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->NOMS."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->SEXE."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->TEL."</b></a></td>";
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
	     		<button type='button' name='update' id='".$value->ID."' class='btn btn-xs btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
				<button type='button' name='delete' id='".$value->ID."' class='btn btn-xs btn-danger delete'  title='Supprimer Admin'><span class='glyphicon glyphicon-trash'></span></button>
		 </td></tr>";
      }	
?>
