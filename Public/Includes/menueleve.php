<?php  ?>
<html lang="fr">
<meta charset='utf-8'>
	<nav class="navbar navbar-default navbar-fixed-top sidebarNavigation" data-sidebarClass="navbar-inverse">  
  <div class="container-fluid">  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>   
   <a href="index.php?page=accueilAdmin"><img src="public/images/logo.jpg" width="50px"></a>
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">  
    <ul class="nav navbar-nav">  
      <li class="active"><a href="index.php?page=accueilEleve">Accueil</a></li>     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Paiements<span class="caret"></span></a>  
        <ul class="dropdown-menu">  
          <li><a href="index.php?page=mespaiemenentM">Minerval</a></li>  
          <li><a href="#">Autres</a></li> 
        </ul>  
      </li>  
      <li><a href="#">Communiqués<span class="badge label-danger">5</span></a></li>  
      <li><a href="#">Remarques</a></li>  
     <li><a href="index.php?page=congesE">Congés</a></li> 
    </ul> 
	<ul class="nav navbar-nav navbar-right">  
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
       <?php  echo $_SESSION['NOM'].' '.$_SESSION['PRENOM'];  ?></a></li>  
      <li><a href="index.php?page=logout"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>  
    </ul>
    </div>   
  </div>  
</nav>  
<?php  ?>