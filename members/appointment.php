. ﻿<?php 
include 'conn.php';
include 'header.php';
 include 'session.php';
  $id=1;
 ////$id=$user[id];
 ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'addmem.php'; ?>
  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       المواعيد</h1>
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
           <a href="#addnew1" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> جديد</a>
            <div class="box-header with-border">
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  
                  <th class="text-right" >طالب الموعد</th>
                  <th class="text-right" >المستشار</th>
                   <th class="text-right" >تاريخ الجلسة</th>
                   <th class="text-right" >وقت الجلسة</th>
              
                   <th class="text-right" >مؤكدة ؟ </th>
                   <th class="text-right" >ادوات</th>
             
                  
                  
                  
                </thead>
                <tbody>
                  <?php
                  
                      $sql = mysqli_query($con,"SELECT * FROM `appointment`");
          while($row = mysqli_fetch_array($sql)){
  
                $ff=0;  
                 $fft="";  
              $idx=$row['id'];      
         
        

               

$ed= "appE.php?id=";
			$ed.=$row['id'];
			$del= "appDEL.php?id=";
			$del.=$row['id'];
		
                    
                       if($row['state']==1){
                    
                     $tool=' ' ;
                    
                    $state='<td style="color:green;">تم تأكيد الجلسة</td>' ;
                    
                   
                    
                    }
                    
              
                                 else if($row['state']==2){
                            $tool='<a data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="background-color: #2471A3 ; border-color: #2471A3;"><i class="fa fa-check"></i>تأكيد الجلسة</a>';
                    
                    $state='<td style="color:orange;">بأنتظار التأكيد ...</td>' ;
                   
                    
                    }
                    
           
                    
  $orgDate = $row['datee'];  
    $newDate = date("d-m-Y", strtotime($orgDate));
    
    $nows = date("d-m-Y");

         
                   $timee = date("g:i a", strtotime($row['timee'] ));


                      echo "
                        <tr>
                       
                                     <td>".$row['ff']."</td>
                                     <td>".$row['tt']."</td>

                          <td>".$newDate."</td>
                        
                          <td>".$timee."</td>
                          
                          
                        
                         
                          
                          
                          
                 
                          $state
                     
                          
                          
                          <td>".$tool."</td>
                          
                          
                          
                          
                          
                          
                          
     
                 
                          
                                                  
                          

                                                 
                          
 ";
 
 
   echo "

                          
                        </tr>
                      ";
                    }
                    
                  ?>
                </tbody>
              </table>
           
       <a href="<?php echo $ulral ; ?>"><button class='btn btn-primary btn-sm btn-flat print' data-id='".$id."'><i class='fa fa-print'></i> طباعة الجميع</button></a>

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