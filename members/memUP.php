<?php
	
session_start();

 $idg = $_GET['id'];
	if(1){
	include 'conn.php';




$name= $_POST['name'];
$city= $_POST['city'];
$phone= $_POST['phone'];
$major= $_POST['major'];







	
		
		
$sql = "UPDATE  members SET Name= '$name' ,Phone= '$phone' , city= '$city' , major= '$major'  WHERE id ='$idg'";
    		
    		if( mysqli_query($con,$sql)){
				 

	 
					
				}
				else{
					
				
				}
				
			
			
			$y="members.php";


			
			header('location:' .$y);
			
			}
	
	

?>