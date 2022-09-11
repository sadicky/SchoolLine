<?php


	function login(){
	include('vue/login.php');
}

function logout(){
	include('vue/logout.php');
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
	$getF = $getFs->getsFS();
	$getAa = $getAa->getAllAA();
	include('vue/public/home.php');
}
	function accueilAdmin(){
		require_once('Model/aa.class.php');
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

		$geta= new AA();
		$getP= new Prof();
		$getAa = $geta->getAllAA();	
		$getP = $getP->getProfs();	
		$faculte = new Section();		
	include('vue/accueil.php');
}
function licence(){
	session_destroy();
	include('model/functions.php');
	include('vue/licence.php');
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
	session_destroy();
	include('model/functions.php');
	include('vue/accueilBibliotheq.php');
}
	function accueilCaisse(){
	session_destroy();
	include('model/functions.php');
	include('vue/accueilCaisse.php');
}
	function Absence(){
	session_destroy();
	include('model/functions.php');
	include('vue/absence.php');
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
		$getFs = $getFs->getsFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();
		include('Vue/notesi.php');
		
}
function non_allow(){
	include('Vue/non.php');
}
function Cantine(){
	session_destroy();
	include('model/functions.php');
	include('Vue/cantine.php');
}
	function accueilEncodeur(){
	session_destroy();
	include('model/functions.php');
	include('vue/accueilEncodeur.php');
}
	function accueilChefClasse(){
	session_destroy();
	include('model/functions.php');
	include('vue/accueilChefClasse.php');
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
	$getF = $getFs->getsFS();
	$getAa = $getAa->getAllAA();
	$getE = $getEleve->getEleves();
	$getP = $getP->getProfsActif();
	$admin = new Admin();
	$getAd = $admin->getAllAdmin();
	include('Vue/affadmin.php');
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
		$getF = $getFs->getsFS();
		$getAa = $getAa->getAllAA();
		$getE = $getEleve->getEleves();	
		include('vue/affeleve.php');
	}
	function affEncodeur(){
		session_destroy();
		include('model/functions.php');
		include('vue/affencodeur.php');
	}

	function affChef(){
		session_destroy();
		include('vue/affchef.php');
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
		include('vue/affprof.php');
	}


	function affCaissier(){
		include('model/functions.php');
		include('vue/affcaissier.php');
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
		$getFs = $getFs->getsFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		$getBib = $getBi->getBib();	
		include('vue/affbibliotheq.php');
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
		$getFs = $getFs->getsFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		include('vue/fraisscolaire.php');
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
		include('vue/cours.php');
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
		include('vue/options.php');
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
		include('vue/motifp.php');
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
		include('vue/joursconges.php');
	}

	function Sorties(){
		session_destroy();
		session_destroy();
		require_once('Model/aa.class.php');
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();
		$getAa= new AA();
		$getAa = $getAa->getAllAA();
		include('vue/sorties.php');
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
		include('vue/aa.php');
	}
	function Com(){
		session_destroy();
		include('model/functions.php');
		include('vue/communique.php');
	}
	
	function resultats(){
		session_destroy();
		include('model/functions.php');
		include('vue/resultats.php');
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
		include('vue/classe.php');
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
		include('vue/section.php');
	}
	function pfa(){
		session_destroy();
		require_once('Model/fs.class.php');
		require_once('Model/classe.class.php');
		require_once('Model/option.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/section.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getN= new Classe();
		$getD= new OPT();
		$getF = new Section();	
		
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getD = $getD->getOptionActiv();
		$getF = $getF->getSectionActiv();
		$getN = $getN->getClasses();
		$getAa = $getAa->getAllAA();	
		include('vue/pfa.php');
	}
	function payer(){
		include('vue/payer.php');
	}
	function recu(){
		include('Public/invoice/recu.php');
	}
	function fiche(){
		session_destroy();
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
		$getFs = $getFs->getsFS();
		$getS = $getS->getSectionActiv();
		$getC = $getC->getClasses();	
		$getBib = $getBi->getBib();		
		$getLivres = $getBi->getLivs();
		$getCat = $getBi->getCat();	
		$getAut = $getBi->getAut();	

		include('vue/bibliotheque.php');
	}
	function prime(){
		session_destroy();
		include('model/functions.php');
		include('vue/prime.php');
	}
	function rapport(){
		session_destroy();
		include('model/functions.php');
		include('vue/rapport.php');
	}
	function rapportso(){
		session_destroy();
		include('model/functions.php');
		include('vue/rapportso.php');
	}
	function cjour(){
		session_destroy();
		include('model/functions.php');
		include('vue/cjour.php');
	}
	function cmois(){
		session_destroy();
		include('model/functions.php');
		include('vue/cmois.php');
	}
	function caa(){
		session_destroy();
		include('model/functions.php');
		include('vue/caa.php');
	}

	function dette(){
		session_destroy();
		require_once('Model/prof.class.php');
		$getP= new Prof();
		$getP = $getP->getProfs();
		include('vue/dette.php');
	}

	function inscription(){
		session_destroy();
		require_once('Model/fa.class.php');
		require_once('Model/faculte.class.php');
		require_once('Model/departement.class.php');
		require_once('Model/aa.class.php');
		require_once('Model/niveau.class.php');
		require_once('Model/eleve.class.php');
		$getAa= new AA();
		$getN= new Niveau();
		$getD= new Departement();
		$getFa= new FA();
		$getF = new Faculte();	
		$getEleve = new Eleve();
		$getEA = $getEleve->getElevesAdmis();

		$getD = $getD->getDep();	
		$getFa = $getFa->getFA();
		$getF = $getF->getFac();
		$getN = $getN->getNiv();
		$getAa = $getAa->getAllAA();	
		include('vue/inscription.php');
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
		include('vue/profdet.php');
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
		include('Vue/elevedet.php');
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
		
		$getInsc = $getEleve->getEleveIns($id);	
		include('Vue/Eleve/noteEleve.php');
	}
