<?php
	session_start();
	$id = $_POST['id'];
$ulrx="index.php";	

include 'conn.php';
	if(isset($_POST['email'])){
	
		$email= $_POST['email'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		
$ulrx="location:"." index.php?id=".$id;
		$sql = "SELECT * FROM members WHERE  email = '$email'";
		$query = mysqli_query($con,$sql);
///exit ;
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the emailname';
			session_destroy();
			
			
		}
		else{
			$email = $query->fetch_assoc();
			
			if(($password == $email['pass']) ){
			
			
				$_SESSION['memb'] = $email['id'];
				
				
				
		$idm = $email['id'];
		$lat = $_SESSION['nn'];
		$lon =$_SESSION['rr'];
		$l1 = $_SESSION['l1'];
		$l2 =$_SESSION['l2'];
		$n1 =$_SESSION['n1'];
		$n2 = $_SESSION['n2'];
		
		$noa =$_SERVER['HTTP_USER_AGENT'];
		$ip =$_SERVER['REMOTE_ADDR'];
		
		$sql = "INSERT INTO  aa_zoar (fhrs,lat,lon,noa,ip,l1,n1,l2,n2) VALUES
('$idm','$lat','$lon','$noa','$ip','$l1','$n1','$l2','$n2')";
    		if(mysqli_query($con,$sql)){
				
				}
				else{
				////	$_SESSION['error'] = $conn->error;
				}
		
				
				
				
				
				
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
				session_destroy();
				
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
		
	}

$ulrx="location:"." index.php?id=".$idm;


	header($ulrx);

?>