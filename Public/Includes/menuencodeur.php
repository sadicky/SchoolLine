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
   <a href="index.php?page=accueilEncodeur"><img src="Public/images/logo.jpg" width="50px"></a>  
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">   
    <ul class="nav navbar-nav">  
      <li class="active"><a href="#">Accueil</a></li>  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eleves<span class="caret"></span></a>  
        <ul class="dropdown-menu">  
          <li><a href="#">Inscrits</a></li>  
          <li><a href="#">Echoués</a></li>  
          <li><a href="#">Reussis</a></li>  
          <li><a href="#">Encoder Resultats Admis</a></li>  
          <li><a href="#">Encoder Resultats Interros</a></li>  
          <li><a href="#">Encoder Resultats Examens</a></li>   
        </ul>  
      </li>   
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Resultats<span class="caret"></span></a>  
        <ul class="dropdown-menu">  
          <li><a href="#">Code ModPoints</a></li>  
          <li><a href="#">Admissions</a></li>  
          <li><a href="#">Interros</a></li>  
          <li><a href="#">Periodes</a></li>  
          <li><a href="#">Semestres</a></li>  
          <li><a href="#">Examens</a></li>   
        </ul>  
      </li>       
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gerer<span class="caret"></span></a>  
        <ul class="dropdown-menu">  
          <li><a href="#">Frais Scolaire</a></li> 
          <li><a href="#">Annee Scolaire</a></li>  
          <li><a href="#">Cours</a></li>  
          <li><a href="#">Classes</a></li>  
          <li><a href="#">Sections</a></li>  
          <li><a href="#">Options</a></li>  
          <li><a href="#">Motif de Paiment</a></li>   
          <li><a href="#">Cantine</a></li>   
          <li><a href="#">Congés</a></li>  
          <li><a href="#">Sorties</a></li>  
        </ul>  
      </li>  
      <li><a href="#">Communiqués<span class="badge">5</span></a></li>   
      <li><a href="#">PRN</a></li>   
    </ul> 
	<ul class="nav navbar-nav navbar-right">  
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
       <?=$_SESSION['NOMS'] ?></a></li>  
      <li><a href="index.php?page=logout_a"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>  
    </ul>  
    </div>
  </div>  
</nav>  