<?php
error_reporting (E_ALL ^ E_NOTICE);

	session_start();
	
   include 'conn.php';
	///if(!isset($_SESSION['adare']) || trim($_SESSION['adare']) == ''){
	if(!isset($_SESSION['adm']) ||  $_SESSION['adm'] ==0 ){
		header('location: index.php');
	
	}
	 
	

	$sql = "SELECT * FROM gg_setng WHERE id = '".$_SESSION['adm']."'";
	$query = mysqli_query($con,$sql);
	$user = $query->fetch_assoc();
	$_SESSION['mdrsh']=$user['id'];
	$_SESSION['uuc']= "https://www.alfarss.com/mtjy/s.php?i=".$user['id'];
		 
$today=getdate();
$date=$today['year']."-".$today['mon']."-".$today['mday']." ".$today['hours'].":".$today['minutes'].":".$today['seconds'];

 

	$ip = $_SERVER['REMOTE_ADDR'];
	$sqlx = "UPDATE gg_setng SET  ip = '$ip', 	date = '$date' WHERE idm = '".$_SESSION['adm']."'";
	
	$query = mysqli_query($con,$sqlx)
				
	

	
	
?>