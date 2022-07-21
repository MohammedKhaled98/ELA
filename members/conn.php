<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","mokhaled98_mokhaled98","1Q2w3e4r-","mokhaled98_mokhaled98");
mysqli_set_charset($con, "utf8");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>