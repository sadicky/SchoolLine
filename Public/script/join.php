<?php
        require_once '../../Model/connexion.php';
        $db = getConnection();

        if (isset($_POST['fac'])&& !empty($_POST['fac'])) {
        	$query = $db->prepare("SELECT * FROM options where IDSECT = ? and ACCESS='1'");
        	$query->execute(array($_POST['fac']));
        	$rc = $query->rowCount();
        	if ($rc>0) {
        		echo "<option>Selectionner une option</option>";
        		while ($value=$query->fetchObject()) {
        			echo "<option value=".$value->IDOPT.">".$value->OPT."</option>";
               		}
        	}
        	else{

        		echo "<option>option non disponible</option>";
        	}
       }


    //     if (isset($_POST['dep'])&& !empty($_POST['dep'])) {
    //     	$query = $db->prepare("SELECT * FROM niveau where IDDep = ?");
    //         $query->execute(array($_POST['dep']));
    //     	$rc = $query->rowCount();
    //     	if ($rc>0) {
    //     		echo "<option>Selectionner un niveau</option>";
    //     		while ($value=$query->fetchObject()) {
    //     			echo "<option value=".$value->IDNiv.">".$value->NIVEAU."</option>";
    //            		}
    //     		# code...
    //     	}
    //     	else{

    //     		echo "<option>niveau non disponible</option>";
    //     	}
    //    }
?>
 
