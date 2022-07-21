<?php
	
session_start();
	if(isset($_POST['Name'])){
	include 'conn.php';
	$idm=$_SESSION['adare'];



$Name = $_POST['Name'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$Phone= $_POST['Phone'];
$major = $_POST['major'];
$edulevel= $_POST['edulevel'];
$city= $_POST['city'];
$UniName= $_POST['UniName'];
$gradyear= $_POST['gradyear'];
$gradst= $_POST['gradst'];
$gpa= $_POST['gpa'];
$scale= $_POST['scale'];
$certificates= $_POST['certificates'];
$skills= $_POST['skills'];
$status= $_POST['status'];
$gpa= $_POST['gpa'];

		
$state = 4 ; 	
	//	$sql = "INSERT INTO  members (Name,major,Phone,city,user,pass,state,email,edulevel,UniName,gradyear,scale,certificates,skills,status)
 //VALUES('$Name','$major','$Phone','$city', '$username', '$pass' , '$state', '$email', '$edulevel', '$UniName', '$gradyear', '$scale', '$certificates', '$skills', '$status' )";
    		
		
		
$sql = "INSERT INTO  members (Name,major,Phone,city,user,pass,state ,email,edulevel,UniName,gradyear,scale,certificates ,skills,status,gpa,gradst)
 VALUES('$Name','$major','$Phone','$city', '$username', '$pass' , '$state' , '$email', '$edulevel', '$UniName' , '$gradyear', '$scale', '$certificates' , '$skills', '$status', '$gpa' , '$gradst'  )";
    		
    		
    				
		
    				
		

    		if( mysqli_query($con,$sql)){
				 

header('location: thanks.html');
					
				}
				else{
				
			echo "Error"; 
		
				}
				
			
		 echo $_SESSION['success'].$_SESSION['error']."hh";	
		exit;
			header('location: thank.html');
			}
	
	

?>