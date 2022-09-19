<?php
	function login(){
		require_once('Model/authAdmin.php');
		require_once('Model/aa.class.php');
		$getAa= new AA();		
		$getAa = $getAa->getAllAA();
	include('Vue/login.php');
}

function logout(){
	include('Vue/public/logout.php');
}
function logout_admin(){
	include('Vue/logout_admin.php');
}
function home(){
	require_once('Model/auth.php');
	require_once('Model/fs.class.php');
	require_once('Model/section.class.php');
	require_once('Model/option.class.php');
	require_once('Model/aa.class.php');
	require_once('Model/classe.class.php');
	require_once('Model/eleve.class.php');
	$getAa= new AA();
	$getCla= new Classe();
	$getOpt= new Opt();
	$getFs= new FS();
	$getSect = new Section();
	$getEleve = new Eleve();
	$getE = $getEleve->getEleves();	

	$getEleve = new Eleve();
	$getEA = $getEleve->getElevesAdmis();	

	$getO = $getOpt->getOptionActiv();	
	$getS = $getSect->getSectionActiv();
	$getC = $getCla->getClasses();
	$getF = $getFs->getFS();
	$getAa = $getAa->getAllAA();
	include('Vue/public/home.php');
}
	function accueilAdmin(){
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/section.class.php');
		require_once('Model/bib.class.php');
		require_once('Model/option.class.php');
		require_once('Model/eleve.class.php');
		$getd= new OPT();
		$getd = $getd->getOptionActiv();

		$getB= new Bibliotheque();
		$getB = $getB->getBib();
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getP= new Prof();
		$getClasse = new Classe();
		$getClasse=$getClasse->getClasses();	
		$getP = $getP->getProfs();	
		$faculte = new Section();		
	include('Vue/Admin/accueil.php');
}
function licence(){
	 
	include('model/functions.php');
	include('Vue/licence.php');
}
	function accueilEleve(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');
		@$id=$_SESSION['MAT'];
		$getC= new Classe();

		$getEleve = new Eleve();
		$getInsc = $getEleve->getEleveIns($id);	

		$getO= new Section();
			$getO = $getO->getSectionActiv();
	include('Vue/Eleve/accueilEleve.php');
}
	function accueilBibliotheque(){
	 
	include('model/functions.php');
	include('Vue/accueilBibliotheq.php');
}
	function accueilCaisse(){
	 
	include('model/functions.php');
	include('Vue/accueilCaisse.php');
}
function Absence(){
	require_once('Model/prof.class.php');
	require_once('Model/section.class.php');
	require_once('Model/option.class.php');
	require_once('Model/classe.class.php');
	require_once('Model/cours.class.php');
	require_once('Model/eleve.class.php');
	$getS= new Section();
	$getO= new Opt();
	$getP= new Prof();
	$getC = new Classe();	
	$getCo = new Cours();	
	$getEleve= new Eleve();
	
	if(isset($_POST['valider'])){
		$idc=$_POST['niv'];
		$idas=$_POST['aa'];
		$getEC = $getEleve->getElevesClasse($idc,$idas);
	}

 
	$getO = $getO->getOptions();	
	$getP = $getP->getProfsActif();
	$getS = $getS->getSection();
	$getC = $getC->getClasse();	
	$getCo = $getCo->getsCours();
	$getEA = $getEleve->getElevesAdmis();
include('Vue/admin/absence.php');
}
	function detAbsence(){
		require_once('Model/prof.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();	
		$getEleve= new Eleve();
		
		if(isset($_POST['valider'])){
			$idc=$_POST['niv'];
			$idas=$_POST['aa'];
			$date=$_POST['date'];
			$getEC = $getEleve->getElevesClasseAbs($idc,$idas,$date);
			$getEC2 = $getEleve->getElevesClasseAbs2($idc,$idas,$date);
		}

	 
		$getO = $getO->getOptions();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getEA = $getEleve->getElevesAdmis();
	include('Vue/admin/detabs.php');
}

function recouvrement(){
	require_once('Model/fs.class.php');
	require_once('Model/section.class.php');
	require_once('Model/option.class.php');
	require_once('Model/aa.class.php');
	require_once('Model/classe.class.php');
	require_once('Model/prof.class.php');
	require_once('Model/eleve.class.php');
	require_once 'Model/notes.class.php';
	require_once 'Model/cours.class.php';
	$getAa= new AA();
	$getC= new Classe();
	$getO= new Opt();
	$getFs= new FS();
	$getS = new Section();
	$getP= new Prof();
	$notes = new Note();
	$getCo = new Cours();
	$getN = $notes->getSemestre();
	
	
	$getEleve = new Eleve();
	$getEA = $getEleve->getElevesAdmis();

	if(isset($_POST['valider'])){
		$idc=$_POST['niv'];
		$idas=$_POST['aa'];
		$getEC = $getEleve->getEleveClassesPM($idc,$idas);

	}
	
	$getAa = $getAa->getAllAA();
	$getP = $getP->getProfs();
	$getO = $getO->getOptionActiv();	
	$getFs = $getFs->getFS();
	$getS = $getS->getSectionActiv();
	$getC = $getC->getClasses();
	include('Vue/admin/recouvrement.php');		
}

	function Notes(){
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		require_once 'Model/notes.class.php';
		require_once 'Model/cours.class.php';
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();
		$notes = new Note();
		$getCo = new Cours();
		$getN = $notes->getSemestre();
		
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		if(isset($_POST['valider'])){
			$idc=$_POST['niv'];
			$idas=$_POST['aa'];
			$getEC = $getEleve->getElevesClasse($idc,$idas);
		}
		
		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		$getO = $getO->getOptionActiv();	
		$getFs = $getFs->getFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();
		include('Vue/admin/notesi.php');		
}

function non_allow(){
	include('Vue/non.php');
}function non_allow_a(){
	include('Vue/admin/non.php');
}
function Cantine(){
	 
	include('model/functions.php');
	include('Vue/cantine.php');
}
	function accueilEncodeur(){

	include('Vue/Encodeur/accueilEncodeur.php');
}
	function accueilChefClasse(){
	 
	include('model/functions.php');
	include('Vue/admin/accueilChefClasse.php');
}

	function affAdmin(){
	require_once('Model/admin.class.php');
	require_once('Model/fs.class.php');
	require_once('Model/section.class.php');
	require_once('Model/option.class.php');
	require_once('Model/aa.class.php');
	require_once('Model/classe.class.php');
	require_once('Model/eleve.class.php');
	require_once('Model/prof.class.php');
	$getAa= new AA();
	$getCla= new Classe();
	$getOpt= new Opt();
	$getFs= new FS();
	$getSect = new Section();
	$getEleve = new Eleve();
	$getP = new Prof();	
	
	$getEleve = new Eleve();
	$getEA = $getEleve->getElevesAdmis();

	$getO = $getOpt->getOptionActiv();	
	$getS = $getSect->getSectionActiv();
	$getC = $getCla->getClasses();
	$getF = $getFs->getFS();
	$getAa = $getAa->getAllAA();
	$getE = $getEleve->getEleves();
	$getP = $getP->getProfsActif();
	$admin = new Admin();
	$getAd = $admin->getAllAdmin();
	include('Vue/admin/affadmin.php');
}

	function affEleve(){
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getCla= new Classe();
		$getOpt= new Opt();
		$getFs= new FS();
		$getSect = new Section();
		$getEleve = new Eleve();	
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getO = $getOpt->getOptionActiv();	
		$getS = $getSect->getSectionActiv();
		$getC = $getCla->getClasses();
		$getF = $getFs->getFS();
		$getAa = $getAa->getAllAA();
		$getE = $getEleve->getEleves();	
		include('Vue/admin/affeleve.php');
	}
	function affEncodeur(){		 
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/enc.class.php');
		require_once('Model/prof.class.php');
		$getC = new Classe();
		$getEleve = new Eleve();
		$getE = new Encodeur();
		$getP= new Prof();

		$getEA = $getEleve->getElevesAdmis();
		$getP = $getP->getProfsActif();
		$getC = $getC->getClasse();	
		$getEnc = $getE->getEncs();
		include('Vue/admin/affencodeur.php');
	}

	function affChef(){
		 
		include('Vue/admin/affchef.php');
	}

	function affProf(){
		require_once('Model/prof.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();		
		$getAa= new AA();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$getO = $getO->getOptions();	
		$getPa = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		include('Vue/admin/affprof.php');
	}


	function affCaissier(){ 
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/enc.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/caisse.class.php');
		$getC = new Classe();
		$getEleve = new Eleve();
		$getE = new Encodeur();
		$getCaisse = new Caisse();
		$getP= new Prof();

		$getEA = $getEleve->getElevesAdmis();
		$getP = $getP->getProfsActif();
		$getC = $getC->getClasse();	
		$getEnc = $getCaisse->getCaissiers();		
		include('Vue/admin/affcaissier.php');
	}
	
	function affbibliotheq(){
		require_once('Model/eleve.class.php');		
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/bib.class.php');
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();
		$getBi= new Bibliotheque();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		
		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		$getO = $getO->getOptionActiv();	
		$getFs = $getFs->getFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		$getBib = $getBi->getBib();	
		include('Vue/admin/affbibliotheq.php');
	}


	function fraisScolaire(){
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		
		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		$getO = $getO->getOptionActiv();	
		$getFs = $getFs->getFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		include('Vue/admin/fraisscolaire.php');
	}

	function Cours(){
		require_once('Model/prof.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();		
		$getAa= new AA();	
		$getEleve= new Eleve();

		$getO = $getO->getOptions();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getEA = $getEleve->getElevesAdmis();
		$getAa = $getAa->getAllAA();
		include('Vue/admin/cours.php');
	}
	function Options(){
		require_once('Model/section.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/option.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/classe.class.php');
		
		$getS = new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		
		$getO = $getO->getOptions();
		$getC = $getC->getClasse();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSectionActiv();	
		include('Vue/admin/options.php');
	}
	function motifP(){
		require_once('Model/prof.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/af.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();		
		$getAa= new AA();
		$frais = new AutresF();
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getO = $getO->getOptions();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getAa = $getAa->getAllAA();
		$getAF= $frais->getAF();	
		include('Vue/admin/motifp.php');
	}
	function jConge(){
		require_once('Model/prof.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/af.class.php');
		require_once('Model/jc.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();		
		$getAa= new AA();
		$frais = new AutresF();
		$jc = new JC();
		$Jco = $jc->getJC();
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getO = $getO->getOptions();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getAa = $getAa->getAllAA();
		$getAF= $frais->getAF();	
		include('Vue/admin/joursconges.php');
	}

	function Conge(){
		require_once('Model/prof.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/af.class.php');
		require_once('Model/jc.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();		
		$getAa= new AA();
		$frais = new AutresF();
		$jc = new JC();
		$Jco = $jc->getJC();
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getO = $getO->getOptions();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getAa = $getAa->getAllAA();
		$getAF= $frais->getAF();	
		include('Vue/eleve/congeel.php');
	}

	function Sorties(){
		require_once('Model/prof.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/cours.class.php');
		require_once('Model/eleve.class.php');
		require_once('Model/af.class.php');
		require_once('Model/jc.class.php');
		$getS= new Section();
		$getO= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		$getCo = new Cours();		
		$getAa= new AA();
		$frais = new AutresF();
		$jc = new JC();
		$Jco = $jc->getJC();
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getO = $getO->getOptions();	
		$getP = $getP->getProfsActif();
		$getS = $getS->getSection();
		$getC = $getC->getClasse();	
		$getCo = $getCo->getsCours();
		$getAa = $getAa->getAllAA();
		$getAF= $frais->getAF();
		include('Vue/admin/sorties.php');
	}

	function aAcad(){
		require_once('Model/aa.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/option.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');
		$getD= new Opt();
		$getP= new Prof();
		$getC = new Classe();	
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getP = $getP->getProfs();
		$getC = $getC->getClasse();	
		$getD = $getD->getOptions();
		$allAA = new AA();
		include('Vue/admin/aa.php');
	}
	function Com(){
		include('model/functions.php');
		include('Vue/admin/communique.php');
	}
	
	function resultats(){
		include('model/functions.php');
		include('Vue/admin/resultats.php');
	}

	function Classe(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');		
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		$getP= new Prof();
		$getP = $getP->getProfsActif();
		$getC= new Classe();
		$getC = $getC->getClasses();
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getO= new Section();
		$getO = $getO->getSectionActiv();
		include('Vue/admin/classe.php');
	}
	function Sections(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');		
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		$getP= new Prof();
		$getP = $getP->getProfsActif();
		$getC= new Classe();
		$getC = $getC->getClasse();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$section = new Section();	
		$getSect = $section->getSection();			
		include('Vue/admin/section.php');
	}
	function pfa(){
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		if(isset($_POST['valider'])){
			$mat=trim($_POST['mat']);
			$getEC = $getEleve->getEleveMat($mat);
		}
		
		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		$getO = $getO->getOptionActiv();	
		$getFs = $getFs->getFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		include('Vue/admin/pfa.php');
	}
	function payer(){
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();
		$id=$_GET['id'];
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$getEC = $getEleve->getEleveId($id);		
		$idclasse=$getEC->IDCLA;	
		$getMin= $getFs->getFS();
		
		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		$getO = $getO->getOptionActiv();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();
		include('Vue/admin/payer.php');
	}
	function recu(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');		
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		$getP= new Prof();
		$getP = $getP->getProfsActif();
		$getC= new Classe();
		$getC = $getC->getClasse();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$section = new Section();	
		$getSect = $section->getSection();	
		include('Public/invoice/recu.php');
	}
	function fiche(){
		include('model/functions.php');
		include('Public/invoice/print.php');
	}
	function bibliotheque(){		
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/bib.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();
		$getBi= new Bibliotheque();

		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getAa = $getAa->getAllAA();
		$getP = $getP->getProfs();
		$getO = $getO->getOptionActiv();	
		$getFs = $getFs->getFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		$getBib = $getBi->getBib();		
		$getLivres = $getBi->getLivs();
		$getCat = $getBi->getCat();	
		$getAut = $getBi->getAut();	

		include('Vue/admin/bibliotheque.php');
	}
	function prime(){
		include('model/functions.php');
		include('Vue/admin/prime.php');
	}
	function rapport(){
		 
		include('model/functions.php');
		include('Vue/admin/rapport.php');
	}
	function rapportso(){
		 
		include('model/functions.php');
		include('Vue/admin/rapportso.php');
	}
	function cjour(){
		 
		include('model/functions.php');
		include('Vue/admin/cjour.php');
	}
	function cmois(){
		 
		include('model/functions.php');
		include('Vue/admin/cmois.php');
	}
	function caa(){
		 
		include('model/functions.php');
		include('Vue/admin/caa.php');
	}

	function dette(){
		 
		require_once('Model/prof.class.php');
		$getP= new Prof();
		$getP = $getP->getProfs();
		include('Vue/admin/dette.php');
	}

	function profdet(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');		
		require_once('Model/prof.class.php');
		$getProf= new Prof();
		$id=$_GET['id'];
		$getP = $getProf->getProfsActif();
		$getC= new Classe();
		$getC = $getC->getClasses();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();	

		$getO= new Section();
		$getPi = $getProf->getProfId($id);
		$getPc = $getProf->getProfCoursId($id);
		$getO = $getO->getSectionActiv();	
		include('Vue/admin/profdet.php');
	}
	
	function elevedet(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');		
		require_once('Model/prof.class.php');
		$getProf= new Prof();
		$id=$_GET['id'];
		$getP = $getProf->getProfsActif();
		$getC= new Classe();
		$getC = $getC->getClasses();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$getInsc = $getEleve->getEleveIns($id);		
		$getE = $getEleve->getEleveId($id);	

		$getO= new Section();
			$getPi = $getProf->getProfId($id);
			$getPc = $getProf->getProfCoursId($id);
			$getO = $getO->getSectionActiv();
		include('Vue/admin/elevedet.php');
	}

	function detailElev(){
		require_once('Model/section.class.php');		
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');		
		require_once('Model/prof.class.php');
		$getProf= new Prof();
		$id=$_SESSION['MAT'];
		$getP = $getProf->getProfsActif();
		$getC= new Classe();
		$getC = $getC->getClasses();

		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$getInsc = $getEleve->getEleveIns($id);		
		$getE = $getEleve->getEleveId($id);	

		$getO= new Section();
			$getPi = $getProf->getProfId($id);
			$getPc = $getProf->getProfCoursId($id);
			$getO = $getO->getSectionActiv();
		include('Vue/Eleve/detailEleve.php');
	}
	
	function bulletin(){	
		require_once('Model/classe.class.php');
		require_once('Model/eleve.class.php');			
		require_once('Model/cours.class.php');
		require_once 'Model/notes.class.php';
		$getCours= new Cours();		
		$notes = new Note();
		$id=$_GET['eleve'];

		$getEleve = new Eleve();	
		$getE = $getEleve->getEleveId($id);			
		$idclasse=$getE->IDCLA;		
		$getCC = $getCours->getCoursClasse($idclasse);
		$getCountC = $getCours->countCours($idclasse);		
		$pond=$getCountC->POND;		

		include('Vue/Eleve/bulletin.php');
	}
	
	function noteElev(){
		require_once('Model/fs.class.php');
		require_once('Model/section.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/prof.class.php');
		require_once('Model/eleve.class.php');
		require_once 'Model/notes.class.php';
		require_once 'Model/cours.class.php';
		$id=$_SESSION['MAT'];
		$getAa= new AA();
		$getC= new Classe();
		$getO= new Opt();
		$getFs= new FS();
		$getS = new Section();
		$getP= new Prof();
		$notes = new Note();
		$getCo = new Cours();
		$getN = $notes->getSemestre();
		
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		
		if(isset($_POST['valider'])){
			$periode= $_POST['periode'];
			$notesPeriode = $notes->getNotesPeriode($id,$periode);
			$notesPeriode2 = $notes->getNotesPeriode2($id,$periode);
		}
		
		$getInsc = $getEleve->getEleveIns($id);	
		include('Vue/Eleve/noteEleve.php');
	}

	

	function camarade(){
		require_once('Model/eleve.class.php');
		$idm=$_SESSION['MAT'];
		$id=$_SESSION['ID'];
		$getEleve = new Eleve();	
		$getE = $getEleve->getEleveId($idm);			
		$idclasse=$getE->IDCLA;				
		$idas=$getE->IDAS;	
		$getCam = $getEleve->getCamarade($idclasse,$idas,$id);

		include('Vue/Eleve/camarade.php');
	}
	function mespaiemenentM(){
		require_once('Model/eleve.class.php');
		$id=$_SESSION['MAT'];

		$getEleve = new Eleve();	
		$getE = $getEleve->getElevePM($id);	
		$getT = $getEleve->getElevePMT($id);			
		
		include('Vue/Eleve/paiementm.php');
	}
	
	function mesAbsences(){
		require_once('Model/eleve.class.php');
		$id=$_SESSION['MAT'];

		$getEleve = new Eleve();	
		$getE = $getEleve->getElAbs($id);	
		$getAbs = $getEleve->getElAbsCount($id);			
		
		include('Vue/Eleve/absEl.php');
	}

	function mesCours(){
		require_once('Model/eleve.class.php');
		require_once('Model/cours.class.php');
		$id=$_SESSION['MAT'];

		$getEleve = new Eleve();
		$getCours = new Cours();	
		$getE = $getEleve->getEleveId($id);			
		$idclasse=$getE->IDCLA;	
		$getCc = $getCours->getCoursClasse($idclasse);

		include('Vue/Eleve/mescours.php');
	}

	
function Horaires(){
	require_once('Model/fs.class.php');
	require_once('Model/section.class.php');
	require_once('Model/option.class.php');
	require_once('Model/aa.class.php');
	require_once('Model/classe.class.php');
	require_once('Model/prof.class.php');
	require_once('Model/eleve.class.php');
	require_once 'Model/notes.class.php';
	require_once 'Model/cours.class.php';
	$getAa= new AA();
	$getC= new Classe();
	$getO= new Opt();
	$getFs= new FS();
	$getS = new Section();
	$getP= new Prof();
	$notes = new Note();
	$getCo = new Cours();
	$getN = $notes->getSemestre();
	
	
	$getEleve = new Eleve();
	$getEA = $getEleve->getElevesAdmis();

	if(isset($_POST['valider'])){
		$idc=$_POST['niv'];
		$getEC = $getCo->getCoursClasse($idc);
		$getEC2 = $getCo->getCoursClasse2($idc);
	}	

	$getAa = $getAa->getAllAA();
	$getP = $getP->getProfs();
	$getO = $getO->getOptionActiv();	
	$getFs = $getFs->getFS();
	$getS = $getS->getSectionActiv();
	$getC = $getC->getClasses();
	include('Vue/admin/horaire.php');
}
