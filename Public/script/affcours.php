<?php
 require_once '../../Model/cours.class.php';
 $cours = new Cours();
 foreach ($data= $cours->getsCours() as $value) {
   echo "<tr><td><b><a href='#' id='$value->ID' title='$value->COURS' data-toggle='popover' class='afficher'  > COURS000".$value->ID."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->FAC."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->DEP."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->NIV."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'>".$value->COURS."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->PONDERATION."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->NBH."</b></a></td>";
   echo "<td><b><a href='#' data-toggle='tooltip' data-placement='top'  >".$value->PROF."</b></a></td>";
        echo "<td>
	     		<button type='button' name='update' id='".$value->ID."' class='btn btn-xs btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
		 </td></tr>";
      }	
?>
<script type="text/javascript" src="Public/ajax/popprof.js"></script>