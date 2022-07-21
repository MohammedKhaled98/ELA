<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$curr_password = $_POST['curr_password'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$map = $_POST['map'];
		$klmh = $_POST['klmh'];
		$photo = $_FILES['photo']['name'];
		$photo1 = $_FILES['photo1']['name'];
		$photo2 = $_FILES['photo2']['name'];
		$photo3 = $_FILES['photo3']['name'];
		$fphoto = $_FILES['photo']['type'];
		$fphoto1 = $_FILES['photo1']['type'];
		$fphoto2 = $_FILES['photo2']['type'];
		$fphoto3 = $_FILES['photo3']['type'];
		$lon1 = $_POST['lon1'];
		$lon2 = $_POST['lon2'];

$lon3 = $_POST['lon3'];

$lon4 = $_POST['lon4'];

$sfa = $_POST['sfa'];
$ins = $_POST['ins'];
$sna = $_POST['sna'];
$tut = $_POST['tut'];

		
		$expensions= array("jpeg","jpg","png","gif","pdf","docx","mp3","mp4","avi","mpeg");
$extension=explode('.',$photo); 
$file_ext=strtolower(end($extension));


$extension=explode('.',$photo1); 
$file_ext1=strtolower(end($extension));


$extension=explode('.',$photo2); 
$file_ext2=strtolower(end($extension));

$extension=explode('.',$photo3); 
$file_ext3=strtolower(end($extension));
		
		
		
		
		$dhwr = $_POST['dhwr'];
		$hj = $_POST['hj'];
		$tr = $_POST['tr'];
		$hgz=0;
		if ($dhwr<>1)
		{
		$hgz=1;
		}
		else
		{
		if ($hj==1)
		{
		$hgz=2;
		}
		}

		
		/////if($curr_password == $user['password']){
		if($curr_password == $user['pass']){
			if(!empty($photo)){
			
			if(in_array($file_ext,$expensions) === false){
$_SESSION['error']='الملف مرفوض';
	header('location:'.$return);
		exit;
		}

			
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
				
				$photox=$user['name'].$photo;	
				rename('../images/'.$photo, '../images/'.$photox);
				$filename = $photox;
			}
			else{
				$filename = $user['photo'];
			}
			
			if(!empty($photo1)){
			if(in_array($file_ext1,$expensions) === false){
$_SESSION['error']='الملف مرفوض';
	header('location:'.$return);
		exit;
		}

				move_uploaded_file($_FILES['photo1']['tmp_name'], '../images/'.$photo1);
				$photox=$user['name'].$photo1;	
				rename('../images/'.$photo1, '../images/'.$photox);
				$filename1 = $photox;
					
			}
			else{
				$filename1 = $user['photo1'];
			}

			if(!empty($photo2)){
			if(in_array($file_ext2,$expensions) === false){
$_SESSION['error']='الملف مرفوض';
	header('location:'.$return);
		exit;
		}

				move_uploaded_file($_FILES['photo2']['tmp_name'], '../images/'.$photo2);
				$photox=$user['name'].$photo2;	
				rename('../images/'.$photo2, '../images/'.$photox);
				$filename2 = $photox;
					
			}
			else{
				$filename2 = $user['photo2'];
			}


	if(!empty($photo3)){
	if(in_array($file_ext3,$expensions) === false){
$_SESSION['error']='الملف مرفوض';
	header('location:'.$return);
		exit;
		}

				move_uploaded_file($_FILES['photo3']['tmp_name'], '../tcpdf/examples/images/'.$photo3);
				$photox=$user['name'].$photo3;	
				rename('../tcpdf/examples/images/'.$photo3, '../tcpdf/examples/images/'.$photox);
				$filename3 = $photox;
					
			}
			else{
				$filename3 = $user['photo3'];
			}


			
			

			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				///$password = password_hash($password, PASSWORD_DEFAULT);
			$password = $password;
			}


			$sql = "UPDATE gg_setng SET  pass = '$password', 	namemdir = '$firstname', photo = '$filename', photo1 = '$filename1' , photo2 = '$filename2', photo3 = '$filename3' , sfa = '$sfa',ins = '$ins',sna = '$sna',tut = '$tut',klmh = '$klmh', hgz = '$hgz', map = '$map', lon1 = '$lon1' , lon2 = '$lon2', lon3 = '$lon3', lon4 = '$lon4' , tr = '$tr'  WHERE id = '".$user['id']."'";
			if($con->query($sql)){
				$_SESSION['success'] = 'تم تحديث الملف الشخصي  بنجاح';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
			
		}
		else{
			$_SESSION['error'] = 'الرقم السري غير صحيح';
		}
	}
	else{
		$_SESSION['error'] = 'املأ التفاصيل المطلوبة أولاً';
	}

	header('location:'.$return);

?>