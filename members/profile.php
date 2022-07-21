. ﻿<?php 
include 'conn.php';
include 'header.php';
 include 'session.php';
  $idg=$_SESSION['memb'] ; 
 ////$id=$user[id];
 
 
 
      $sql = mysqli_query($con,"SELECT * FROM `members` WHERE id='$idg'" );
          while($row = mysqli_fetch_array($sql)){



$Name= $row['Name'];
$major= $row['major'];
$city= $row['city'];
$bio= $row['bio'];
$email= $row['email'];
$Phone= $row['Phone'];
 
 }


 
 
 
 
 ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'addmem.php'; ?>
  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>
  
  
  
  
  
  <style> 
  
  
  
  body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
  </style> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       الأعضاء</h1>
      <ol class="breadcrumb">
    
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              
              <h4>خطاء<i class='icon fa fa-warning'></i></h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
             
               <h4>رائع<i class='icon fa fa-check'></i> </h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          
          
     <div class="container rounded bg-white mt-52 mb-2">
    <div class="row">
        <div class="col-md-9 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"></span><span class="text-black-50"><br><?php echo $Name ;?> </span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
              
                </div>
              
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">الاسم</label><input type="text" class="form-control"  value= '<?php echo $Name ;?> ' ></div>
                    <div class="col-md-12"><label class="labels">التخصص</label><input type="text" class="form-control" value='<?php echo $major ;?>'></div>
                 
                    <div class="col-md-12"><label class="labels">المدينة</label><input type="text" class="form-control"  value='<?php echo $city ;?>'></div>
                    <div class="col-md-12"><label class="labels">نبذه</label><input type="text" class="form-control"  value='<?php echo $bio;?>'></div>
                    <div class="col-md-12"><label class="labels">الايميل</label><input type="text" class="form-control" value='<?php echo $email ;?>'></div>
                    <div class="col-md-12"><label class="labels">رقم الجوال</label><input type="text" class="form-control"  value='<?php echo $Phone ;?>'></div>
                </div>
                <br>
              
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">حفظ التغييرات</button></div>
                 <br>
            </div>
        </div>
        <div class="col-md-4">
         
        </div>
    </div>
</div>
</div>
</div>
          
          </div>
        </div>
      </div>
    </section>   
  </div>
  
    
  <?php include 'includes/footer.php'; ?>

</div>
<?php include 'includes/scripts.php'; ?>

</body>
</html>