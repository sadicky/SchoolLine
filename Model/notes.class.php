<?php
require_once("connexion.php");
    Class Note{
        public $id;
        public $aa;
        public $idaa;

        //ajouter une note
        public function setNotes($idEl,$idCours,$idPer,$notes,$noted,$daten,$codemod){
        $db = getconnection();
        $add = $db->prepare("INSERT INTO notes(IDEL,IDC,IDPER,NOTES,NOTEDEM,DATEN,CODEMOD) VALUES (?,?,?,?,?,?,?)");
        $addline = $add->execute(array($idEl,$idCours,$idPer,$notes,$noted,$daten,$codemod)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les annees

       public function getNotesPeriode2($id,$idper)
          {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID, eleve.NOM, eleve.PRENOM, 
       cours.COURS as COURS,notes.NOTES as NOTES,notes.NOTEDEM as NOTED,periode.PERIODE as PERIODE,semestre.SEMESTRE
         FROM eleve,cours,notes,periode,semestre WHERE notes.IDPER=periode.ID and semestre.ID=periode.IDSEM
        and notes.IDEL=eleve.ID and notes.IDC=cours.IDCO AND eleve.MATRICULE=? AND periode.ID=?");
        $matP->execute(array($id,$idper));
        $res = $matP->fetchObject();
        return $res;
    }

    public function getNotesPeriode($id,$idper)
    {
  $db = getConnection();
  $matP = $db->prepare("SELECT eleve.ID as ID, eleve.NOM, eleve.PRENOM, 
 cours.COURS as COURS,notes.NOTES as NOTES,notes.NOTEDEM as NOTED,periode.PERIODE as PERIODE
   FROM eleve,cours,notes,periode,semestre WHERE notes.IDPER=periode.ID and semestre.ID=periode.IDSEM
  and notes.IDEL=eleve.ID and notes.IDC=cours.IDCO AND eleve.MATRICULE=? AND periode.ID=?");
  $matP->execute(array($id,$idper));
  $res = array();
  while($data = $matP->fetchObject())
  {
      $res[] = $data;
  }
  return $res;
}
    
    public function getSemestre()
    {
        $db = getConnection();
        $matP = $db->prepare("SELECT * FROM `semestre` ");
        $matP->execute();
        $res = array();
        while($data = $matP->fetchObject())
        {
            $res[] = $data;
        }
        return $res;
    }
    
    public function getNotes($ideleve,$cours,$idper)
    {
  $db = getConnection();
  $matP = $db->prepare("SELECT eleve.ID as ID, eleve.NOM, eleve.PRENOM, 
 cours.COURS as COURS,notes.NOTES as NOTES,notes.NOTEDEM as NOTED,periode.PERIODE as PERIODE,semestre.SEMESTRE
   FROM eleve,cours,notes,periode,semestre WHERE notes.IDPER=periode.ID and semestre.ID=periode.IDSEM
  and notes.IDEL=eleve.ID and notes.IDC=cours.IDCO AND eleve.MATRICULE=? AND notes.IDC=? AND notes.IDPER=?");
  $matP->execute(array($ideleve,$cours,$idper,));
  $res = $matP->fetchObject();
  return $res;
}
public function getRank($classe,$eleve,$periode) { 
  $tab=array();
  $res = array();
  $i=0;$rang=0;$x=100;
  $db = getConnection();
  $q=$db->prepare("SELECT eleve.ID as ID, eleve.NOM, eleve.PRENOM,  cours.COURS as COURS,notes.NOTES as NOTES,
  notes.NOTEDEM as NOTED,periode.PERIODE as PERIODE
   FROM eleve,cours,notes,periode,semestre WHERE notes.IDPER=periode.ID and semestre.ID=periode.IDSEM
  and notes.IDEL=eleve.ID and notes.IDC=cours.IDCO AND eleve.MATRICULE=? and eleve.IDCLA=? AND notes.IDPER=? ");  
  $q->execute(array($classe,$eleve,$periode));
  while($data = $q->fetchObject())
  {
    $i++;
    $tab[]=$res;
    if ($data->ID==$eleve){
      $rang=$i;
    }
  }
  return $rang;
}


}