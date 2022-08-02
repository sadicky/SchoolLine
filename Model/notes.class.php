<?php
require_once("connexion.php");
    Class Note{
        public $id;
        public $aa;
        public $idaa;

        //ajouter une annee
        public function setNotes($idEl,$idCours,$idPer,$notes,$noted,$type){
        $db = getconnection();
        $add = $db->prepare("INSERT INTO notes(IDEL,IDC,IDPER,NOTES,NOTEDEM,TYPE) VALUES (?,?,?,?,?,?)");
        $addline = $add->execute(array($idEl,$idCours,$idPer,$notes,$noted,$type)) or die(print_r($add->errorInfo()));
        return $addline;
        }

        //afficher toutes les annees
        public function getNotes(){
        $db = getconnection();
        $all = $db->prepare("SELECT * FROM `asco` group by ID DESC");
        $all->execute();
        $tb = array();
        while($data = $all->fetchObject())
        {
            $tb[] = $data;
        }
        return $tb;
        }

       public function getNotesPeriode($id,$idper)
          {
        $db = getConnection();
        $matP = $db->prepare("SELECT eleve.ID as ID, eleve.NOM, eleve.PRENOM, 
       cours.COURS as COURS,notes.NOTES as NOTES,notes.NOTEDEM as NOTED,notes.TYPE as TYPE,periode.PERIODE as PERIODE
         FROM eleve,cours,notes,periode,semestre WHERE notes.IDPER=periode.ID and semestre.ID=periode.IDSEM
        and notes.IDEL=eleve.ID and notes.IDC=cours.IDCO AND eleve.ID=? AND periode.ID=?");
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
    }

?>