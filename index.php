<?php
session_start();
include 'Controlleur/controller.php';
if(isset($_GET['page'])){
	if($_GET['page']=='login'){
		login();
	}
	else if($_GET['page']=='accueilAdmin')
	{
		accueilAdmin();
	}
	else if($_GET['page']=='logout')
	{
		logout();
	}
	else if($_GET['page']=='logout_a')
	{
		logout_admin();
	}
	else if($_GET['page']=='non')
	{
		non_allow();
	}
	else if($_GET['page']=='non_a')
	{
		non_allow_a();
	}
	else if($_GET['page']=='accueilEleve')
	{
		accueilEleve();
	}
	else if($_GET['page']=='accueilChefClasse')
	{
		accueilChefClasse();
	}
	else if($_GET['page']=='accueilEncodeur')
	{
		accueilEncodeur();
	}
	else if($_GET['page']=='accueilCaisse')
	{
		accueilCaisse();
	}
	else if($_GET['page']=='accueilBibliotheque')
	{
		accueilBibliotheque();
	}
	else if($_GET['page']=='noteElev')
	{
		noteElev();
	}	
	else if($_GET['page']=='affadmin')
	{
		affAdmin();
	}	
	else if($_GET['page']=='affbibliotheq')
	{
		affbibliotheq();
	}
	else if($_GET['page']=='affeleve')
	{
		affEleve();
	}
	else if($_GET['page']=='affencodeur')
	{
		affEncodeur();
	}
	else if($_GET['page']=='affchef')
	{
		affChef();
	}
	else if($_GET['page']=='affprof')
	{
		affProf();
	}
	else if($_GET['page']=='notes')
	{
		Notes();
	}
	else if($_GET['page']=='absence')
	{
		Absence();
	}
	else if($_GET['page']=='detAbs')
	{
		detAbsence();
	}
	else if($_GET['page']=='absEl')
	{
		mesAbsences();
	}
	else if($_GET['page']=='affcaissier')
	{
		affCaissier();
	}
	else if($_GET['page']=='cantine')
	{
		Cantine();
	}
	else if($_GET['page']=='frais')
	{
		fraisScolaire();
	}
	else if($_GET['page']=='cours')
	{
		Cours();
	}
	else if($_GET['page']=='option')
	{
		Options();
	}
	else if($_GET['page']=='motifP')
	{
		motifP();
	}
	else if($_GET['page']=='joursconges')
	{
		jConge();
	}
	else if($_GET['page']=='congesE')
	{
		Conge();
	}
	else if($_GET['page']=='sorties')
	{
		Sorties();
	}
	else if($_GET['page']=='aa')
	{
		aAcad();
	}
	else if($_GET['page']=='communique')
	{
		Com();
	}
	else if($_GET['page']=='bulletin')
	{
		bulletin();
	}
	else if($_GET['page']=='licence')
	{
		licence();
	}
	else if($_GET['page']=='resultats')
	{
		resultats();
	}
	else if($_GET['page']=='classe')
	{
		Classe();
	}
	else if($_GET['page']=='section')
	{
		Sections();
	}
	else if($_GET['page']=='pfa')
	{
		pfa();
	}
	else if($_GET['page']=='payer')
	{
		payer();
	}
	else if($_GET['page']=='recu')
	{
		recu();
	}
	else if($_GET['page']=='print')
	{
		fiche();
	}
	else if($_GET['page']=='bibliotheque')
	{
		bibliotheque();
	}
	else if($_GET['page']=='prime')
	{
		prime();
	}
	else if($_GET['page']=='rapport')
	{
		rapport();
	}
	else if($_GET['page']=='rapportso')
	{
		rapportso();
	}
	else if($_GET['page']=='cjour')
	{
		cjour();
	}
	else if($_GET['page']=='cmois')
	{
		cmois();
	}

	else if($_GET['page']=='caa')
	{
		caa();
	}

	else if($_GET['page']=='dette')
	{
		dette();
	}
	else if($_GET['page']=='inscription')
	{
		inscription();
	}
	else if($_GET['page']=='profdet')
	{
		profdet();
	}
	else if($_GET['page']=='elevedet')
	{
		elevedet();
	}
	else if($_GET['page']=='detailElev')
	{
		detailElev();
	}
	else if($_GET['page']=='camarade')
	{
		camarade();
	}
	else if($_GET['page']=='mescours')
	{
		mesCours();
	}
	else if($_GET['page']=='mespaiemenentM')
	{
		mespaiemenentM();
	}
	else if($_GET['page']=='recouvrement')
	{
		recouvrement();
	}
	else if($_GET['page']=='horaires')
	{
		Horaires();
	}
	else{
		home();
	}	
}
else{
	home();
}
?>