<?php 
require_once("connexion.php");
$db = getConnection();
$msg="";
if(isset($_POST['submit'])){
    if(empty($_POST['login'])){
    $msg='
    <strong style="color: red;">Erreur:</strong> Veuillez entrer votre matricule
    ';
    }
    elseif(empty($_POST['pwd'])){
    $msg='
    <strong style="color: red;">Erreur:</strong> Veuillez entrer votre mot de passe
    ';
    }
    elseif(empty($_POST['aa'])){
    $msg='
    <strong style="color: red;">Erreur:</strong> Selectionner une année scolaire
    ';
    }
    elseif(empty($_POST['user'])){
    $msg='
    <strong style="color: red;">Erreur:</strong> Selectionner un utilisateur
    ';
    }
    else{
    $mat=htmlentities(trim($_POST['login']));
    $pwd=htmlentities(trim($_POST['pwd']));
    $aa=htmlentities(trim($_POST['aa']));
    $user=htmlentities(trim($_POST['user']));
    if($user=='Admin'){$t='admin';}
	elseif($user=='Prof'){$t='prof';}
	elseif($user=='Caissier'){$t='caissier';}
	elseif($user=='Encodeur'){$t='encodeur';}
	elseif($user=='Biblio'){$t='bibliothecaire';}
	else{$t='dd';}
    $sql = $db->prepare("SELECT * FROM $t WHERE MATRICULE= :MATRICULE");
    $sql->bindValue('MATRICULE',$mat);
    $sql->execute();
    $res=$sql->fetch(PDO::FETCH_ASSOC);
    if($res){
        $access=$res['ACCESS'];
        if ($access=='0') {
            $msg='
            <strong style="color: red;">Cet utilisateur n\'est pas encore admis!!</strong> Veuillez Contacter l\'administration, pour plus de détails!
            ';
        }
        else{            
            $pwdHash=$res['PWD'];
            if(password_verify($pwd,$pwdHash)){               
                session_start(); 
            if($t=='admin'){ 
            $_SESSION['ID']=$res['ID'];
            $_SESSION['MAT']=$res['MATRICULE'];
            $_SESSION['NOM']=$res['NOM'];
            $_SESSION['PRENOM']=$res['PRENOM'];
            $_SESSION['aa']=$aa;
            $_SESSION['logged']=true;
             header("location:index.php?page=accueilAdmin");
            }
            else if($t=='encodeur'){
                $_SESSION['ID']=$res['ID'];
                $_SESSION['MAT']=$res['MATRICULE'];
                $_SESSION['NOMS']=$res['NOMS'];
                $_SESSION['aa']=$aa;
                $_SESSION['logged']=true;
                header("location:index.php?page=accueilEncodeur");
            }
            else{
            $msg="<strong style='color:red'>Error</strong>:Le mot de passe est incorrect ";
            }
        }
        }
    }
   else{            
            $msg='
            <strong style="color: red;">Cet Utilisateur n\'existe pas !! verifie ton choix</strong>
            ';
   }

    }  
}