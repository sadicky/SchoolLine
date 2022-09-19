<?php $title = 'Login';
include 'public/includes/header.php';
?>

<body>
	<div align="center">
		<h1><img src="public/images/logo.jpg" width="150px"></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
						<h4 align="center"><strong>Se Connecter</strong></h4>
					<div class="well">
						<form method="post" class="form">
							<div class="form-group ">
								<input id="login"  placeholder="votre matricule ici..." autocomplete="off" name="login" class="form-control" type="text" >
							</div>
							<div class="form-group">
								<input id="pwd" name="pwd" class="form-control" type="password" autocomplete="off"  placeholder="Mot de Passe">
							</div>
							<div class="form-group">
								<select name="user" id="user" class='form-control select2'>
									<option value=''>Choisir l'utilisateur</option>
									<option value='Admin'>Admin</option>
									<option value='Prof'>Prof</option>
									<option value='Encodeur'>Encodeur</option>
									<option value='DD'>DD</option>
									<option value='Caissier'>Caissier</option>
									<option value='Biblio'>Bibliothecaire</option>
								</select>
							</div>
							<div class="form-group">
								<select name="aa" id="aa" class='form-control'>
									<option value=''>Choisir une Annee Scolaire</option>
									<?php foreach ($getAa as $a) { ?>
										<option value='<?= $a->ID ?>'><?= $a->AS ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group" align="center">
								<button class="btn btn-primary" name="submit" id="submit" type="submit">Connexion <span class="glyphicon glyphicon-log-in"></span></button><br>
								<hr><b><?= date('Y') ?> - Institut Mwanga d'Uvira.</b>
							</div>

						</form>
						<span class="help-block">
							<?php
							if (isset($msg)) {
								// code...
								echo $msg;
							}
							?></span>
					</div>
				</div>


			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>

<script type="text/javascript" src="public/ajax/login.js"></script>