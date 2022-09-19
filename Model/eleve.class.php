 <?php
require_once("connexion.php");

Class Eleve
{
    public $mat;
    public $idprof;
    public $pwd;
    public $access = 0;
    public $dateins = null;
    public $noms;
    public $email;
    public $sexe;
    public $tel;
    public $dob;
    public $niveau;
    public $nation;
    public $photo;

    //ajouter un eleve
    public function setEleve($mat,$nom,$prenom,$email,$sexe,$tel,$dob,$eco,$access,$dateind,$niv,$aa)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO eleve(MATRICULE,NOM,PRENOM,EMAIL,SEXE,TEL,DOB,ECOLE_ORIGINE,ACCESS,DATEINS,IDCLA,IDAS) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $addline = $add->execute(array($mat,$nom,$prenom,$email,$sexe,$tel,$dob,$eco,$access,$dateind,$niv,$aa)) or die(print_r($add->errorInfo()));
        return $addline;
    }
    //eleve inscrit
    public function setEleveIns($montant,$eleve,$dateins)
    {   
        $db = getConnection();
        $add = $db->prepare("INSERT INTO eleveinsc(MONTANT,IDEL,DATEINS) VALUES (?,?,?)");
        $addline = $add->execute(array($montant,$eleve,$dateins)) or die(print_r($add->errorInfo()));
        return $addline;
    }
    public function eleveInsUpdate($access,$id)
    {
        $db = getConnection();
        $update = $db->prepare("UPDATE eleve SET ACCESS=?  WHERE ID =?");
        $ok = $update->execute(array($access,$id)) or die(print_r($update->errorInfo()));
        return $ok;
    }
    public function getEleveIns($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID, eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS,eleve.TEL as TEL,eleve.DOB as DOB, eleveinsc.DATEINS as DATEINS,eleveinsc.MONTANT as MONTANT
         FROM eleve,asco,classe,options,section,eleveinsc
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT and eleve.ID=eleveinsc.IDEL AND eleve.MATRICULE=? LIMIT 1");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }

    //afficher prof
    public function getEleves()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT eleve.ID as ID, eleve.ACCESS, eleve.IMAGE, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID  and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    public function getElevesAdmis()
    {
        $db = getConnection();
        $statement = $db->prepare("SELECT eleve.ID as ID,eleve.IMAGE,  eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT and eleve.ACCESS='1'");
        $statement->execute();
        $tbP = array();
        while($data =  $statement->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
  //par matr
    public function getEleveId($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID,eleve.IMAGE, classe.IDCLA as IDCLA, eleve.ACCESS, eleve.NOM, eleve.EMAIL, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,eleve.IDAS,section.SECTION,asco.AS,eleve.TEL as TEL,eleve.DOB as DOB FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT AND eleve.MATRICULE=? LIMIT 1");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }

    
    public function getElevePM($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT minerval.MONTANT as PMONTANT,minerval.REC AS RECU,minerval.DETAIL AS DET, 
        classe.IDCLA as IDCLA,minerval.DATEINS AS DATEA,
        eleve.NOM, eleve.PRENOM,eleve.MATRICULE, classe.CLASSE,options.OPT,eleve.IDAS,section.SECTION,asco.AS,
        fs.MONTANT as MONTANT FROM eleve,minerval,fs,asco,classe,options,section
         WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
         AND options.IDSECT=section.IDSECT  AND minerval.IDAS=asco.ID
         AND fs.IDFS=minerval.IDFS AND minerval.IDCL=classe.IDCLA 
         AND minerval.IDEL=eleve.ID AND eleve.MATRICULE=?");
        $matP->execute(array($id));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    
    public function getElAbs($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT classe.IDCLA as IDCLA, presence.STATUT, eleve.NOM, eleve.PRENOM,
         presence.DATEA, classe.CLASSE,options.OPT,section.SECTION,asco.AS,eleve.MATRICULE,eleve.SEXE
        FROM eleve,asco,classe,options,section,presence
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT and eleve.ID=presence.IDEL 
        AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' 
        AND eleve.MATRICULE=?");
        $matP->execute(array($id));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
     
    public function getElAbsCount($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT count(presence.STATUT) AS STATUT
        FROM eleve,asco,classe,options,section,presence
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT and eleve.ID=presence.IDEL 
        AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' 
        AND eleve.MATRICULE=? AND presence.STATUT='A' LIMIT 1");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }
    
    public function getElevePMT($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT SUM(minerval.MONTANT) AS MONTANT FROM eleve,minerval,fs,asco,classe,options,section
         WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
         AND options.IDSECT=section.IDSECT  AND minerval.IDAS=asco.ID
         AND fs.IDFS=minerval.IDFS AND minerval.IDCL=classe.IDCLA 
         AND minerval.IDEL=eleve.ID AND eleve.MATRICULE=?");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }
    
    //par ID
    public function getEleveMat($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID,classe.IDCLA as IDCLA,eleve.IMAGE,  eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS,eleve.TEL as TEL,eleve.DOB as DOB FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT AND eleve.MATRICULE=? LIMIT 1");
        $matP->execute(array($id));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    //par ID
    public function getEleveId2($id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID,classe.IDCLA as IDCLA,eleve.IMAGE,  eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS,eleve.TEL as TEL,eleve.DOB as DOB FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT AND eleve.ID=? LIMIT 1");
        $matP->execute(array($id));
        $res = $matP->fetchObject();
        return $res;
    }
    public function getElevesClasse($idc,$idas)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID,eleve.IMAGE, classe.IDCLA as IDCLA, eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS
        FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' AND eleve.IDCLA=? AND eleve.IDAS=?");
        $matP->execute(array($idc,$idas));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    
    public function getElevesClasseAbs($idc,$idas,$date)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT classe.IDCLA as IDCLA, presence.STATUT, eleve.NOM, eleve.PRENOM,
         presence.DATEA, classe.CLASSE,options.OPT,section.SECTION,asco.AS,eleve.MATRICULE,eleve.SEXE
        FROM eleve,asco,classe,options,section,presence
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT and eleve.ID=presence.IDEL 
        AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' 
        AND eleve.IDCLA=? AND eleve.IDAS=? and presence.DATEA=?");
        $matP->execute(array($idc,$idas,$date));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
    
    public function getElevesClasseAbs2($idc,$idas,$date)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT  classe.IDCLA as IDCLA, presence.STATUT, eleve.NOM, eleve.PRENOM,
         presence.DATEA,  classe.CLASSE,options.OPT,section.SECTION,asco.AS,eleve.MATRICULE
        FROM eleve,asco,classe,options,section,presence
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT and eleve.ID=presence.IDEL 
        AND presence.IDCL=classe.IDCLA AND presence.IDAS=asco.ID AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' 
        AND eleve.IDCLA=? AND eleve.IDAS=? and presence.DATEA=?");
        $matP->execute(array($idc,$idas,$date));
        $tbP =  $matP->fetchObject();
        return $tbP;
    }
    
    
    public function getCamarade($idc,$idas,$id)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID,eleve.IMAGE, classe.IDCLA as IDCLA, eleve.ACCESS, eleve.NOM, eleve.PRENOM, eleve.SEXE,eleve.MATRICULE,
        classe.CLASSE,options.OPT,section.SECTION,asco.AS
        FROM eleve,asco,classe,options,section
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT
        AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' AND eleve.IDCLA=? AND eleve.IDAS=? and eleve.ID!=?");
        $matP->execute(array($idc,$idas,$id));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }
 
    public function getEleveClassesPM($idc,$idas)
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID,paiementmin.MONTANT as PMONTANT,paiementmin.BORD,
        classe.IDCLA as IDCLA, eleve.NOM, eleve.PRENOM, eleve.MATRICULE,paiementmin.DETAIL,
        classe.CLASSE,options.OPT,section.SECTION,minerval.MONTANT as MONTANT
        FROM eleve,asco,classe,options,section,minerval,paiementmin
        WHERE eleve.IDCLA=classe.IDCLA AND eleve.IDAS=asco.ID and classe.IDOPT=options.IDOPT 
        AND paiementmin.IDEL = eleve.ID AND paiementmin.IDAS=minerval.IDAA
        AND paiementmin.IDM=minerval.IDM AND paiementmin.IDCL=classe.IDCLA AND minerval.IDAA=asco.ID
        AND options.IDSECT=section.IDSECT and eleve.ACCESS='1' AND eleve.IDCLA=? AND eleve.IDAS=?");
        $matP->execute(array($idc,$idas));
        $tbP = array();
        while($data =  $matP->fetchObject()){
            $tbP[] = $data;
        }
         return $tbP;
    }

    public function deleteProf($idprof)
    {
        $db = getConnection();
        $delete = $db->prepare("DELETE FROM prof WHERE ID =?");
        $ok = $delete->execute(array($idprof));
        return $ok;
    }
	
     public function activProf($idprof){
         $db = getConnection();
         $sql =$db->prepare( "UPDATE prof SET ACCESS='1' where ID=?");
         $ok = $sql->execute(array($idprof));
        return $ok;
     }
    public function deactivProf($idprof){
        $db = getConnection();
        $sql =$db->prepare( "UPDATE prof SET ACCESS='0' where ID=?");
        $ok = $sql->execute(array($idprof));
        return $ok;
    }
}
?>