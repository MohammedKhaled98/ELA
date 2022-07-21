<?php
session_start();

 $idg = $_GET['id'];
	include 'conn.php';

	if(1){
	
	
	     $sql = mysqli_query($con,"SELECT * FROM `ConsApp` WHERE id='$idg'" );
          while($row = mysqli_fetch_array($sql)){



$id= $row['idc'];



} 
		
	
		

		$sql = "DELETE FROM ConsApp WHERE id = '$idg' " ;
			if( mysqli_query($con,$sql)){
		
			
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>