<?php
	
session_start();

 $idg = $_GET['id'];
	if(1){
	include 'conn.php';
	



$state= 1 ; 






	
		
		
$sql = "UPDATE  consultant SET state = '$state' WHERE id ='$idg'";
    		
    		if( mysqli_query($con,$sql)){
				 

	
				}
				else{
				
				
				}
				
			
			
			$y="consultant.php";


			
			header('location:' .$y);
			
			}
	
	

?>