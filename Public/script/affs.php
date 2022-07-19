<?php
 require_once '../../Model/fs.class.php';
 $frais = new FS();
 foreach ($data= $frais->getsFS() as $value) {
   echo "<tr><td><b> FA000".$value->ID."</b></td>";
   echo "<td>".$value->SECTION."</td>";
   echo "<td><b>".$value->OPT."</b></td>";
   echo "<td><b>".$value->CLASSE."</b></td>";
   echo "<td><b><a href='#'>".$value->MONTANT."FBU</b></a></td>";
   echo "<td>".$value->AS."</td>";
        echo "<td>
	     		<button type='button' name='update' id='".$value->ID."' class='btn btn-xs btn-info update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button>
		 </td></tr>";
      }	
?>