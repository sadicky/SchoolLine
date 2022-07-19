<?php
		require_once '../../Model/option.class.php';
		
        $opt = new Opt();
        foreach ($data= $opt->getOptions() as $value) {
		echo "<tr><td><b><a href='#' data-toggle='popover' class='afficher'  id='$value->ID' >DEP00".$value->ID."</a></b></td>";
		echo "<td><b><a href='#' data-toggle='popover' class='afficher' data-trigger='focus' id='$value->ID' > ".$value->OPT."</a></b></td>";
		echo "<td>".$value->SECTION."</td>";
		if($value->ACCESS == 0){
        echo "<td> <span class='label label-danger'>Innactif</span></td>";
		}
		else{
		echo "<td> <span class='label label-info'>Actif</span></td>";
		}
		if($value->ACCESS == 0){
		echo "<td><button type='button'  id='".$value->ID."' name='activer' class='btn btn-xs btn-default activer' ><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";}
		else {
			echo "<td>	<button type='button'  id='".$value->ID."' name='desactiver' class='btn btn-xs btn-default desactiver'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
			</td>";}
        echo "<td>
	     		<a href='' type='submit' name='update' class='btn btn-xs btn-info update' title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></a>
		 </td></tr>";
      }	
?>
 