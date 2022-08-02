<?php
        require_once '../../Model/connexion.php';
        $db = getConnection();

        if (isset($_POST['sem'])&& !empty($_POST['sem'])) {
        	$query = $db->prepare("SELECT * FROM periode where IDSEM = ? ");
        	$query->execute(array($_POST['sem']));
        	$rc = $query->rowCount();
        	if ($rc>0) {
        		echo "<option>Selectionner une période</option>";
        		while ($value=$query->fetchObject()) {
        			echo "<option value=".$value->ID.">".$value->PERIODE."</option>";
               		}
        	}
        	else{

        		echo "<option>Période non disponible</option>";
        	}
       }



?>
 
