<?php
 require_once '../../Model/jc.class.php';
 $frais = new JC();
 foreach ($data= $frais->getJC() as $value) {
   echo "<tr><td>".$value->DATEDEB."</td>";
   echo "<td>".$value->DATEFIN."</td>";   
      $deb = strtotime($value->DATEDEB);
	  $fin = strtotime($value->DATEFIN);
	   $dif =  $fin-$deb;
	   $days = abs(floor($dif/(60*60*24)))+1;
   echo "<td>".$days. "</td>";
   echo "<td>".$value->MOTIF."</td>";
        echo "<td>
	     		<button type='button' name='update' id='".$value->IDJC."' class='btn btn-xs btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
		 </td></tr>";
      }	
?>