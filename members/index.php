﻿<?php
error_reporting (E_ALL ^ E_NOTICE);
include 'conn.php';
  session_start();
  if($_SESSION['memb'] >0 ){
  
$ulrx="location:"." home.php?id=".$_SESSION['memb'];
    header($ulrx);
  }
  $id=$_GET["id"];
if($id<1)$id=1;

$ulr="h.php?id=".$id;
$ulrx="adare/index.php?id=".$id;





 
                    $name=$row[namemdrsh];
                  

?>
<?php include 'header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>لوحة تحكم </b>
  	</div>
  
  	<div class="login-box-body">
  	<p class="login-box-msg"><?php echo  $name ; ?></p>
    	<p class="login-box-msg">تسجيل الدخول كـ عضو</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
          
 <input type="hidden" name="id" value="<?php echo $id ; ?>" >

            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-5">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i>دخول</button>
          			<br>
          		
        		</div>
        		
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>