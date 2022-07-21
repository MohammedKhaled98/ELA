<?php
	
session_start();

 $idg = $_GET['id'];
	if(1){
	include 'conn.php';
	



$name= $_POST['name'];
$city= $_POST['city'];
$phone= $_POST['phone'];
$major= $_POST['major'];
$user= $_POST['user'];
$pass= $_POST['pass'];
$Zoom_Email= $_POST['Zoom_Email'];
$Zoom_Pass= $_POST['Zoom_Pass'];








	
		
		
$sql = "UPDATE  consultant SET Name= '$name' ,Phone= '$phone' , city= '$city' , major= '$major' ,user= '$user', pass= '$pass', Zoom_Email= '$Zoom_Email' ,Zoom_Pass= '$Zoom_Pass'   WHERE id ='$idg'";
    		
    		if( mysqli_query($con,$sql)){
				 

	 
					
				}
				else{
					
				
				}
				
			
			
			$y="consultant.php";


			
			header('location:' .$y);
			
			}
	
	

?>