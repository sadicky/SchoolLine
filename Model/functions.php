<?php
function login1(){
	//require('dbconnect.php');
	echo 'login';	
}
function allow(){
	if (isset($_SESSION['user'],$_SESSION['password'])) {
		return true;
	}else{
		return false;
	 }
}


function get_image_name($user_id)
{
 require('connexion.php');
 $statement = $db->prepare("SELECT image FROM users WHERE id = '$user_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

function getAllProf()
{
 require('connexion.php');
 $db = getconnection();
 $statement = $db->prepare("SELECT * FROM profs");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}
?>