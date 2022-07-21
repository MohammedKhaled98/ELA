<?php
error_reporting (E_ALL ^ E_NOTICE);

 include 'session.php';
 
 $idg = $_GET['id'];
  ?>
<?php 
  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }




      $sql = mysqli_query($con,"SELECT * FROM `members` WHERE id='$idg'" );
          while($row = mysqli_fetch_array($sql)){



$Name= $row['Name'];



} 









?>
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  	<?php include 'navbar.php'; ?>
  	

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      مرحبا  <?php echo $Name ?>
 </h1>
 <br>
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
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
    


  
       <div id="txtHint"><b>انتظر ....</b></div>

      
      

      </section>
      
      
      <!-- right col -->
    </div>
    <?php include 'menubar.php'; ?>
  	<?php include 'footer.php'; ?>

</div>
<!-- ./wrapper -->
<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>

<script type="text/javascript"> 

var idg =  <?php echo $idg ; ?> ; 

function showUser() {
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","hom.php?id=" + idg ,true);
        xmlhttp.send();
    }


 showUser();
 
 var myVarf = setInterval(myTimer, 10000);

function myTimer() {
 
    showUser();
}

</script>




</body>
</html>