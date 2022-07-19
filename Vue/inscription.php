<?php $title='Inscription'; include 'public/includes/header.php';?>

    <body > 
		<div class="container" style="margin:100px;">
            <form method="post" id="register">
            <div id="stepwizard">
                <ul>
                  <li><a href="#step1">Etape 1<br /><small>Info Personnelle</small></a></li>
                  <li><a href="#step2">Etape 2<br /><small>Autres informations</small></a></li>
                  <li><a href="#step3">Etape 3<br /><small>Ajouter pour un Niveau</small></a></li>
                </ul>
                 <div>
                    <div id="step1">
                        <div class="row" style="margin:12px;padding:5px;">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Nom:</label>
                                    <div class="col-sm-9">  <input type="text" class="form-control" id="nom" name="nom">
                                    <span id="erreurNom" class="text-danger"></span>
                                    </div>
                               </div><br><br>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">Naiss </label>
                                    <div class="col-sm-9">  <input type="date" name="dob" id="dob" class="form-control">
                                    <span id="erreurDob" class="text-danger"></span></div>
                               </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Prenom</label>
                                    <div class="col-sm-9">  <input type="text" class="form-control" name="prenom" id="prenom">
                                    <span id="erreurPrenom" class="text-danger"></span></div>
                               </div><br><br>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">Tél </label>
                                    <div class="col-sm-9">  <input type="tel" name="tel" id="tel" class="form-control">
                                    <span id="erreurTel" class="text-danger"></span></div>
                               </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">Sexe: </label>
                                    <div class="col-sm-9">
                                         <select name="sexe" class="form-control" id="sexe">
                                            <option value="">Select</option>
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                         </select> 
                                    </div>
                               </div><br><br>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">Adresse </label>
                                    <div class="col-sm-9">  <input type="text" name="adresse" id="adresse" class="form-control">
                                    <span id="erreurAdresse" class="text-danger"></span></div>
                               </div>
                           </div>
                        </div>
                 </div>
                <div id="step2">
                        <div class="row" style="margin:12px;padding:5px;">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="matricule">Password: </label>
                                    <div class="col-sm-8">  <input type="password" name="pwd" id="pwd" class="form-control">
                                    <span id="erreurPwd" class="text-danger"></span></div>
                               </div>
                           </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">E-Mail</label>
                                    <div class="col-sm-9">  <input type="email" class="form-control" id="email" name="email">
                                    <span id="erreurEmail" class="text-danger"></span></div>
                               </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">Photo </label>
                                    <div class="col-sm-9">  <input type="file" name="photo" id="photo" class="form-control">
                                    <span id="erreurPhoto" class="text-danger"></span></div>
                               </div>
                            </div>
                        </div>
                </div>
                <div id="step3">
                        <div class="row" style="margin:12px;padding:5px;">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">A - A</label>
                                    <div class="col-sm-9"> 
                                    <select name="aa" id="aa" class='form-control'>
                                        <option value=''>Choisir une Année Academique</option>
                                        <?php foreach ($getAa as $value) {?>
                                            <option value='<?=$value->ID?>'><?=$value->AA?></option>                
                                        <?php } ?>
                                    </select>
                                    </div>
                               </div>
                               <br><br>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">Departement </label>
                                    <div class="col-sm-9"> 
                                         
                                <select name="dep" id="dep" class='form-control'>
                                    <option value=''>Choisir un Departement</option>
                                </select>
                                </div>
                               </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Faculté: </label>
                                    <div class="col-sm-9">
                                     <select name="fac" id="fac" class='form-control'>
                                        <option value=''>Choisir une Faculte</option>
                                    </select>
                                    </div>
                               </div><br><br>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="matricule">niveau </label>
                                    <div class="col-sm-9">    
                                   <select name="niv" id="niv" class='form-control'>
                                    <option value=''>Choisir un Niveau</option>
                                     </select>
                                    </div>
                               </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm">Enregistrer</button>                            
                        </div>
                </div>
			</div>
            </form>
		</div> 
    </body>
<script>
$('#stepwizard').smartWizard({
    selected: 0,
    theme: 'arrows',
    transitionEffect: 'fade',
    transitionSpeed: '400'
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#step1').click(function(){
        var Enom = '';
        var Edob = '';
        var Ephoto = '';
        var Epwd = '';
        var Email = '';
        var Esexe = '';
        var Eprenom = '';
        var Etel = '';
        var Eadresse = '';
        var filter =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if($.trim($('#nom').val()).length == 0){
            Enom = 'Champ Nom est Vide';
            $('#erreurNom').text(Enom);
            $('#nom').addClass('has-error');
        }else{
            if(!filter.test($('#nom').val())){

            }
            
        }

        });

    });

</script>
<script type="text/javascript" src="public/ajax/join.js"></script>