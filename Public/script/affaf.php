<?php
 require_once '../../Model/af.class.php';
 $frais = new AutresF();
 foreach ($data= $frais->getAF() as $value) {
   echo "<tr><td><b>".$value->IDAF."</b></td>";
   echo "<td>".$value->MOTIF."</td>";
   echo "<td><b><a href='#'>".$value->MONTANT."FBU</b></a></td>";
        echo "<td>
	     		<button type='button' name='update' id='".$value->IDAF."' class='btn btn-xs btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
		 </td></tr>";
      }	
?>