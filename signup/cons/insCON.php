<?php
	
session_start();
	if(isset($_POST['Name'])){
	include 'conn.php';
	$idm=$_SESSION['adare'];



$Name = $_POST['Name'];
$major = $_POST['major'];
$Phone= $_POST['Phone'];
$city= $_POST['city'];
$username= $_POST['username'];
$pass= $_POST['pass'];
		
$state = 2 ; 	
		
		
		
$sql = "INSERT INTO  consultant (Name,major,Phone,city,user,pass,state)
 VALUES('$Name','$major','$Phone','$city', '$username', '$pass' , '$state' )";
    		
    		if( mysqli_query($con,$sql)){
				 

	$_SESSION['success'] = 'تم اضافة عميل '.$name;
					
				}
				else{
				
				echo $Name; 
					$_SESSION['error'] = $con->error;
				}
				
			
		/// echo $_SESSION['success'].$_SESSION['error']."hh";	
		///exit;
			header('location: thank.html');
			}
	
	

?>