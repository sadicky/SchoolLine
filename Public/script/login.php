<?php
include('../../Model/admin.class.php');
$login=htmlspecialchars(trim($_POST['login']));
$pwd=htmlspecialchars(trim($_POST['pwd']));
$log = new User();
$log = $log->verification($login,$pwd);
if (!empty($login) && !empty($pwd)) {
    if($log == 1){
        session_start();
        $_SESSION['user']=$login;
        $_SESSION['password']=$pwd;
	   if($data['Type']=='Admin'){$t='Admin';}
        elseif($data['Type']=='Prof'){$t='Prof';}
        else{$t='Etudiant';}
        }
?>