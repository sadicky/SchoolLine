
<?php if(isset($_SESSION['logged'])) { ?>
<?php 
$title ='Minerval'; include 'public/includes/header.php';?>
    <body > 
		<div class="row" style="padding-top: 60px;margin: 8px;"> 
			<?php include 'public/includes/menuadmin.php';	include 'public/includes/liste.php';?> 
			  <div class="col-sm-10">
				  <h3>Paiement du Minerval par <?=strtoupper($getEC->NOM.' '.$getEC->PRENOM)?></h3>	
					<div class="form-group"><br>
						<div class='col-sm-12' id="message"></div>
					</div>
				  <form id="payer" class="form" method="post">	
					<div class="row well">
						<div class="col-sm-4">
							<div class="form-group">
								<b><label>Numéro du Bordeau: </label> <span class="text-danger">*</span></b>
								<input type="hidden" class="form-control" id="eleve" value="<?=$getEC->ID?>" name="eleve" required>
								<input type="hidden" class="form-control" id="classe" value="<?=$getEC->IDCLA?>" name="classe" required>
								<input type="hidden" class="form-control" id="aa" value="<?=$getEC->IDAS?>" name="aa" required>
								<input type="text" placeholder="Numero du bordereau" class="form-control" id="bord" name="bord" required>
							</div>
							<div class="form-group">
								<b><label>Montant: </label> <span class="text-danger">*</span></b>
								<input type="text" placeholder="Montant" class="form-control" id="montant" name="montant" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<b><label>Recu : </label> <span class="text-danger"></span></b>
								<?php
								$string = "0123456789";
								$string = str_shuffle($string);
								$titre = substr($string, 0, 8);
								?>
								<input type="text" class="form-control" value="<?php echo "RECU-" . $titre ?>" name="rec" id="rec" readonly>
							</div>
							<div class="form-group">
								<b><label>Dû: </label></b>
								<input type="text" placeholder="Reste à payer" class="form-control" id="du" name="du" readonly>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block validate btn-md">Valider le paiement</button>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label><b>Minerval pour la <?=$getEC->CLASSE?>: </b></label>
								<input type="hidden" class="form-control" value="<?=$getMin->ID?>" readonly  name="min" id="min">
								<button class="btn btn-success btn-block btn-xs"><?=$getMin->MONTANT.'$'?></button>
							</div>
							<div class="form-group">
								<b><label>Détail du paiement: </label> </b>
								<textarea placeholder="Détail du paiement" class="form-control" id="det" name="det"></textarea>
							</div>
						</div>
					</div>
					</form>
			  </div>
		</div> 
    </body>  
    </html>
 
<script type="text/javascript" src="Public/ajax/fs.js"></script>
<?php } else {
	header('Location:index.php?page=non_a');
} ?>