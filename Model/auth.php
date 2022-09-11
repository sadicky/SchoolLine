<?php 
require_once("connexion.php");
$db = getConnection();
$msg="";
if(isset($_POST['submit'])){
    if(empty($_POST['mat'])){
    $msg='
    <strong style="color: red;">Erreur 403:</strong> Veuillez entrer votre matricule
    ';
    }
    else{
    $mat=$_POST['mat'];
    $sql = $db->prepare("SELECT * FROM eleve WHERE MATRICULE= :MATRICULE");
    $sql->bindValue('MATRICULE',$mat);
    $sql->execute();
    $res=$sql->fetch(PDO::FETCH_ASSOC);
    if($res){
        $access=$res['ACCESS'];
        if ($access=='0') {
            $msg='
            <strong style="color: red;">Cet Elève n\'est pas encore admis!!</strong> Veuillez Contacter l\'administration, pour plus de détails!
            ';
        }
        else{
            $_SESSION['ID']=$res['ID'];
            $_SESSION['MAT']=$res['MATRICULE'];
            $_SESSION['NOM']=$res['NOM'];
            $_SESSION['PRENOM']=$res['PRENOM'];
            $_SESSION['IMAGE']=$res['IMAGE'];
            $_SESSION['logged']=true;
            header("location:index.php?page=accueilEleve");
            
        }
    }
   else{            
            $msg='
            <strong style="color: red;">Cet Elève n\'existe pas !!</strong>
            ';
   }

    }  
}
/*
Email 'carolle@gmail.com'
Mot de passe '718930b5'
---------------------
Email 'dev@gmail.com'
Mot de passe '5df7791d'

*/ 
?>