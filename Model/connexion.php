<?php
function getConnection(){
	$db=new PDO("mysql:host=localhost;dbname=schoolline","root","");
	return $db; 
}
?>