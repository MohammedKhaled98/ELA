<?php
error_reporting (E_ALL ^ E_NOTICE);

	session_start();
	
   include 'conn.php';
	///if(!isset($_SESSION['memb']) || trim($_SESSION['memb']) == ''){
	if(!isset($_SESSION['memb']) ||  $_SESSION['memb'] ==0 ){
		header('location: index.php');
	
	}
	 
	

	$sql = "SELECT * FROM cons WHERE id = '".$_SESSION['memb']."'";
	$query = mysqli_query($con,$sql);
	$user = $query->fetch_assoc();




 

	$ip = $_SERVER['REMOTE_ADDR'];
	$sqlx = "UPDATE gg_setng SET  ip = '$ip', 	date = '$date' WHERE idm = '".$_SESSION['memb']."'";
	
	$query = mysqli_query($con,$sqlx)
				
	

	
	
?>