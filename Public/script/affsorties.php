<?php
 require_once '../../Model/sorties.class.php';
 $frais = new Sortie();
 foreach ($data= $frais->getSorties() as $value) {
   echo "<tr><td>".$value->DAT."</td>";
   echo "<td>".$value->DEP."</td>";  
   echo "<td>".$value->NIV."</td>";
        echo "<td>
	     		<button type='button' name='update' id='".$value->ID."' class='btn btn-sm btn-success update' data-toggle='modal' data-target='#Update'  title='Modifier Admin'><span class='glyphicon glyphicon-edit'></span></button></td><td>
          <button data-toggle='modal' id='".$value->ID."' data-target='#Details'  class='btn btn-sm btn-info btn-block'> <span class='glyphicon glyphicon-list'></span> <b>Voir Details</b></button>
		 </td></tr>";
      }	
?>