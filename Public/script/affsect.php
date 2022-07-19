<?php
		require_once '../../Model/section.class.php';		
		$section = new Section();	
		$getSect = $section->getSection();
        foreach ($getSect as $value) {
		echo "<tr><td><b><a href='#' data-toggle='popover' class='afficher'  id='$value->IDSECT' >SECT00".$value->IDSECT."</a></b></td>";
		echo "<td><b><a href='#' data-toggle='popover' class='afficher' data-trigger='focus' id='$value->IDSECT' > <b>".$value->SECTION."</b></a></td>";
		if($value->ACCESS == 0){
        echo "<td> <span class='label label-danger'> Innacif</span></td>";
		}
		else{
		echo "<td> <span class='label label-info'>Actif</span></td>";
		}
		if($value->ACCESS == 0){
		echo "<td><button type='button'  id='".$value->IDSECT."' name='activer' class='btn btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span><b> Activer?</b></button></td>";}
		else {
			echo "<td>	<button type='button'  id='".$value->IDSECT."' name='desactiver' class='btn btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> <b>Desactiver?</b></button>
			</td>";}
        echo "<td>
	     		<a href='' type='submit' name='update' class='btn btn-xs btn-info update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></a>
		 </td></tr>";
      }	
?>
 
<script type="text/javascript" src="Public/ajax/popadmin.js"></script>