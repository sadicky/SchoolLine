<?php

require_once '../../Model/eleve.class.php';
$getEleve = new Eleve();
$id = $_POST['id'];
$getE = $getEleve->getEleveId($id);
$getInsc = $getEleve->getEleveIns($id);
?>

      <div class="row">
      	<div class="col-md-6">
      		<h3>Info Générale</h3>
      		<b>Matricule: </b> <?=$getE->MATRICULE?><br>
      		<b>NOM: </b> <?=$getE->NOM?><br>
      		<b>Prénom: </b> <?=$getE->PRENOM?><br>
      		<b>Password: </b> <?=sha1(123)?><br>
      		<b>Sexe: </b><?=$getE->SEXE?> <br>
      		<b>Classe: </b> <?=$getE->CLASSE?><br>
      		<b>Option: </b> <?=$getE->OPT?><br>
      		<b>Adresse: </b> Ngagara<br>
      		<b>Tél: </b> <?=$getE->TEL?><br>
      		<b>Access: </b> <?=$getE->ACCESS?><br>
      		<b>Nationalité: </b> <br>
      		<b>Date de Nais.: </b> <?=$getE->DOB?><br>
      		<b>Maladie Particulière: </b> Aucun<br>
      		<hr>
      		<h3>Info sur le Tuteur</h3>
      		<b>Père: </b> <br>
      		<b>Mère: </b> <br>
      		<b>Tél. Père: </b> <br>
      		<b>Tél. Mère: </b> <br>
      		<b>Autres: </b> <br>
      		<b>Lien: </b> <br>
      	</div>
      	<div class="col-md-6">
      		<b>Année Scolaire: </b> <?=$getE->AS?><br>
      		<h3>Info sur le Paiement</h3>
			<u>*Inscription</u><br>
			<?php if($getInsc){?>
			<?=$getInsc->DATEINS?>: => <b><?=$getInsc->MONTANT?>$</b><br><hr>
			<?php }else{ echo "<b>Non Inscrit</b>";}?><br><br>
			Total à payer:  <b>200$</b><br>
      		 Déjà payé:  <b>16$</b><br>
      		 reste à payer: <b>184$</b><hr>
      		 <h3>Absence</h3><hr>
      		 <h3>Transport(Dernier Paiement)</h3><hr>
      		 <h3>Cantine(Dernier Paiement)</h3><hr>
      		
      	</div>