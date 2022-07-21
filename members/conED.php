<?php 
include 'conn.php';
 include 'session.php';
  $id=1;
 ////$id=$user[id];
 $idg = $_GET['id'];
 ?>
 

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>
  <?php include 'header.php'; ?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

  
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='
             
             -danger 
             -dismissible'>
              <button type='button' class='close' data-dismiss='
              ' aria-hidden='true'>&times;</button>
              
              <h4>خطاء<i class='icon fa fa-warning'></i></h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='
             
             -success 
             -dismissible'>
              <button type='button' class='close' data-dismiss='
              ' aria-hidden='true'>&times;</button>
             
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
          <!DOCTYPE html>
<html lang="en">


<body>
<div id="jquery-script-menu">
<div class="jquery-script-center">

<div class="jquery-script-clear"></div>
</div>
</div>



<?php 

      $sql = mysqli_query($con,"SELECT * FROM `consultant` WHERE id='$idg'" );
          while($row = mysqli_fetch_array($sql)){



$Name= $row['Name'];
$city= $row['city'];
$phone= $row['Phone'];
$major= $row['major'];


} 

?>






    <main role="main" class="container" style="margin-top:300px;">

    	<div style="margin-top:20px;">
    	
   
    	
    	<div style="height: 100px">
    	<div id="contr">
    	
	
	
	<div id="layer3" style="position: absolute; width: 50%; height:100px; z-index: 3; left: 48%; top: 50px">
	
			<br>
			
			<br>
			
			
			<form class="form-horizontal" method="POST" action="conUP.php?id=<?php echo $idg ?> " enctype="multipart/form-data">
	
		<div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="name"  style="width: 50% ; "  value="<?php echo $Name ?>" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">اسم المستشار:</label>

                  	
                </div>
                
                
                    <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="major" style="width: 50% ; " value=<?php echo $major?> >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">التخصص:</label>

                  	
                </div>
                
                
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="city" style="width: 50% ; " value= <?php echo $city?>  >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">المدينة:</label>

                  	
                </div>
                
                    <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="phone" style="width: 50% ; " value=<?php echo $phone?> >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">رقم الجوال :</label>

                  	
                </div>
                
               
                
          	 
          	<div class="modal-footer">
            	
           
 	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> حفظ</button>
 	
 	
 	<?php
 	
 	
 	 $ed= "consultant.php";
 	 
 	 ?>
		
 	
 	<a href=<?php echo $ed ; ?> data-toggle='modal' class='btn btn-primary btn-sm btn-flat' style='background-color:  #C0392B ; right:40px; border-color:  #C0392B;'><i class='fa fa-times'></i> الغاء</a>
 
	</div>

	</form>
			
			
		
		
		</ul>
		
			
			</div> 
			
			

	</div>
	
</div>

    </div>	
    	
	
			
    	
    	
    	
    	
    		
		
		

    	

    </main><!-- /.container -->