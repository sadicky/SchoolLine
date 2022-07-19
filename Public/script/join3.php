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


        if (isset($_POST['dep'])&& !empty($_POST['dep'])) {
        	$query = $db->prepare("SELECT * FROM classe where IDOPT = ?");
            $query->execute(array($_POST['dep']));
        	$rc = $query->rowCount();
        	if ($rc>0) {
        		echo "<option>Selectionner une Classe</option>";
        		while ($value=$query->fetchObject()) {
        			echo "<option value=".$value->IDCLA.">".$value->CLASSE."</option>";
               		}
        		# code...
        	}
        	else{

        		echo "<option>Classe non disponible</option>";
        	}
	   }
	   

	   if (isset($_POST['niv'])&& !empty($_POST['niv'])) {
		$query = $db->prepare("SELECT * FROM cours where IDCLA = ?");
		$query->execute(array($_POST['niv']));
		$rc = $query->rowCount();
		if ($rc>0) {
			echo "<option>Selectionner un cours</option>";
			while ($value=$query->fetchObject()) {
				echo "<option value=".$value->IDCO.">".$value->COURS."</option>";
				   }
		}
		else{

			echo "<option>Cours non disponible</option>";
		}
   }
?>
 
