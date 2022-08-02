<?php $title = "Reçu";
include 'public/includes/header.php'; ?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'public/includes/menuadmin.php';
		include 'public/includes/liste.php'; ?>
			  <div class="col-sm-10">		  
				    <div class="form-group">
				      <div class="col-sm-12">
                        <table class='table table-bordered' id='recu' cellpadding="3" cellspacing="0">
                            <tr>
                            <td colspan="2">
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td width="30%">
                                    <img src="Public/Images/logo.jpg" class='img-circle' alt="logo" width='150px'>
                                </td>
                                <td width="50%" align='center'>
                                <h3>République Démocratique du Congo</h3>
                                Ministère de l'Enseignement Primaire,Sécondaire et Universitaire<br />
                                Ville d'Uvira,Sud-Kivu,Q.Songo
                                <h3>Institut Mwanga d'Uvira</h3>
                                <b>Contact</b> : +257 76 51 2005,+257 62 40 40 65; <b>Email</b>: <a href="mailto:imu@gmail.com">imu@gmail.com</a><br />
                                <b>Site Web</b> : <a href="http://imu.com">https://imu.com</a>  <b>BP</b> : <a href="#">18</a>
                                </td>
                                <td width="20%">
                                
                                </td>
                            </tr>
                            </table>
                            <table class='table table-bordered'>
                             <tr>
                                <td colspan="2" align="center" style="font-size:18px"><b>Reçu Numéro: REC1637920075</b></td>
                             </tr>
                            </table>
                            <span>Matricule:<b>SL202001201158</b> </span><span class='pull-right'>Souscrit le: <b>06/07/2019</b></span>
                            <br />
                            <table class='table table-bordered' cellpadding="5" cellspacing="0">
                                <tr>
                                    <th>Noms</th>
                                    <td>Noms</td>
                                </tr>
                                <tr>
                                    <th>Sexe</th>
                                    <td>Sexe</td>
                                </tr>
                                <tr>
                                    <th>Faculté</th>
                                    <td>Faculté</td>
                                </tr>
                                <tr>
                                    <th>Departement</th>
                                    <td>Departement</td>
                                </tr>
                                <tr>
                                    <th>Motif</th>
                                    <td>Motif</td>
                                </tr>
                                <tr>
                                    <th>Montant</th>
                                    <td>Montant</td>
                                </tr>
                                <tr>
                                    <th>Date Paiement</th>
                                    <td>Montant</td>
                                </tr>
                            </table>
                            <div class='form-inline'>
                            <span>A la Caise: <b>Placide Musafiri</b></span>  <span class='pull-right'><b>Signature</b></span>
                            </div>
                            <span class='label label-muted'>jdgiudgi</span><br>
                            <span class='label label-muted'>jdgiudgi</span><br>
                            <span class='label label-muted'>jdgiudgi</span><br>
                            <span class='label label-muted'>jdgiudgi</span><br>
                            <span class='label label-primary'>Powered by SpaceLine</span><br>
                           
				    </div>
			  </div>
		</div> 
    </body>        
    </html>
 

<script>

		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
            $('#payer').click(function(){
                alert('Paiement effectué');
            });
		});
	</script>
