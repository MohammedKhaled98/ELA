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
         
            <div class="box-header with-border">
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th class="text-right" >الاسم</th>
                  <th class="text-right" >التخصص</th>
                   <th class="text-right" >رقم الجوال</th>
                   <th class="text-right" >المدينة</th>
                   <th class="text-right" >تاريخ التسجيل</th>
                   
                   <th class="text-right" >حالة العضوية</th>
                  
                    <th class="text-right" >ادوات</th>
                  
                </thead>
                <tbody>
                  <?php
                  
                      $sql = mysqli_query($con,"SELECT * FROM `members`");
          while($row = mysqli_fetch_array($sql)){
  
                $ff=0;  
                 $fft="";  
              $idx=$row['id'];      
          $sqlx = mysqli_query($con,"SELECT * FROM `fatorh` WHERE `ida`='$idx' ORDER BY dateti ASC" );
          while($rowx = mysqli_fetch_array($sqlx)){
          ///$ff=$ff.$rowx['id'];
          $ff=$ff+1;
          $fft=$rowx['dateti'];
          
          }
    
               

$ed= "memE.php?id=";
			$ed.=$row['id'];
			$del= "memDEL.php?id=";
			$del.=$row['id'];
			
			   if($row['type']==1){
                    
                     
                    
                    $type='<td style="color:blue;">غير منتسب</td>' ;
                    
                   
                    
                    }
                    
              
                                 else if($row['type']==2){
                            
                    
                    $type='<td style="color:green;">منتسب</td>' ;
                   
                    
                    }
                    
                    
                       if($row['state']==1){
                    
                     
                   
                    $state='<td style="color:green;">منتسب</td>' ;
                    
                   
                    
                    }
                    
              
                                 else if($row['state']==2){
                              $state='<td style="color:red;">غير منتسب</td>' ;
             
                   
                    
                    }
                    
                                 else if($row['state']==3){
                            
                    
                    $state='<td style="color:red;">ملغي</td>' ;
                   
                    
                    }
                    
                                 else if($row['state']==4){
                            
                    
                         $state='<td style="color:orange;">غير فعال (فشل في الدفع)</td>' ;
                   
                    
                    }

                    

                    


                      echo "
                        <tr>
                        
                         <td class='hidden'></td>
                       
                                     <td>".$row['Name']."</td>
                                     <td>".$row['major']."</td>

                          <td>".$row['Phone']."</td>
                          <td>".$row['city']."</td>
                          
                          
                               <td>".$row['datas']."</td>
                          
                          
                          
                          
                          
                          
                          
                          $state
                     
                          
                          
                          
                          
                          
                          
                          
                          
                          
                            <td> <a href='".$ed."' data-toggle='modal' class='btn btn-primary btn-sm btn-flat' style='background-color: #229954 ; border-color: #229954 ;'><i class='fa fa-pencil'></i> تعديل </a>
                            <a href='".$del."' data-toggle='modal' class='btn btn-primary btn-sm btn-flat' style='background-color: #B03A2E ; border-color: #B03A2E ;'><i class='fa fa-trash'></i> حذف </a>
                            
                            
                            
                            </td>
                     
                     
     
                 
                          
                                                  
                          

                                                 
                          
 ";
 
 
   echo "

                          </td>
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