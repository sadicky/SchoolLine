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
