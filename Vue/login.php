
<?php $title = 'Login'; include 'public/includes/header.php';
 include './Model/aa.class.php';
 $aa = new AA();
 $data=$aa->getAllAA();
 ?>
    <body>
		<div align="center">
		   <h1><img src="public/images/logo.jpg" width="150px"></h1>
		</div>
		
		<div class="container"> 
			<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<div class="panel panel-default">  
				<div class="panel-heading">  
					<h3 class="panel-title"><strong>Se Connecter</strong></h3>  
				</div>  
			<div class="panel-body">  
				<form method="post" class="form">	
					<div class="form-group ">
						<input id="login" name="login" class="form-control" type="text" required placeholder="Username">
					</div>
					<div class="form-group">
						<input id="pwd" name="pwd" class="form-control" type="password" required placeholder="Mot de Passe">
					</div> 
					<div class="form-group">
						<label for='aa'> Annee Academique</label>
						<select name="aa" class="form-control"> 
							<?php
								foreach($data as $value){?>
								<option value="<?=$value->ID?>"><?=$value->AA?></option>
							<?php }?>;
						</select>
					</div> 
					<div class="form-group">
						<label>Verification code : </label>
						<input type="text" class="form-horizontal"  name="vercode" maxlength="5" autocomplete="off" style='width:120px;' required />&nbsp;<img src="public/includes/captcha.php">
					</div> 
					<div class="form-group">
						<button class="btn btn-primary" id="connexion" type="button">Connexion</button><br>
						<span><i> Si vous etes etudiant de cette institution et vous n'avez pas un compte veillez cliquer <a href="index.php?page=inscription">ICI</a> pour s'enregistrer. </i></span>
					</div>
				</form>	
			</div> 
			</div> 
				<?php include_once('public/includes/scriptlicence.php');?>  
			</div> 
			<div class="col-md-4"></div>
		</div>
		</div>
    </body>  
	
<script type="text/javascript" src="public/ajax/login.js"></script>