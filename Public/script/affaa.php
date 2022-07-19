<?php
        require_once '../../Model/aa.class.php';
        $annee = new AA();

        foreach ($data= $annee->getAllAA() as $value) {
            
              echo 
              "<tr><td>"
              .$value->AS."</td>            
              </tr>";
        }	
?>
