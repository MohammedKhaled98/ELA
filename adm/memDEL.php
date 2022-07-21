<?php
session_start();

 $idg = $_GET['id'];
	include 'conn.php';

	if(1){
		
	
		

		$sql = "DELETE FROM members WHERE id = '$idg' " ;
			if( mysqli_query($con,$sql)){
		
			
		}
		else{
			$_SESSION['error'] = $con->error;
		}
		header('location: members.php');
	}
?>