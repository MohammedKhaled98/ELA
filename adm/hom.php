<?php
 include 'conn.php';
  include 'header.php';
  ?>
   <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          
        </div>
        
        
          <div class="col-lg-3 col-xs-6">
          
          
          
          
           
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <b>
              <?php
               ///$id=$user[idm];
               $id=1;
            //////////
                $sql = "SELECT * FROM appointment";
                
              
                
               $query = mysqli_query($con,$sql);

                $total = mysqli_num_rows($query);
                

                               
               $percentage = $total;


              
              /////////    
               
                
                
            echo "<h3>";
            
            echo $percentage;
            
            
           echo "</h3>";    
                
             
              ?>

            
          
              </b>
              
             

            
          
              <p>المواعيد</p>
            </div>
            <div class="icon">
          <i class="material-icons"  style="font-size:70px">content_paste</i>
  
             
            </div>
              
    
            
            <a href="appointment.php" class="small-box-footer">&#1605;&#1586;&#1610;&#1583; &#1605;&#1606; &#1575;&#1604;&#1605;&#1593;&#1604;&#1608;&#1605;&#1575;&#1578; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        
          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <?php
              
               $sql = "SELECT * FROM  consultant";
                
              
                
               $query = mysqli_query($con,$sql);

                $total = mysqli_num_rows($query);
                
              if($total<1)$total=0;                
               $percentage = $total;

              ///  echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
             
                echo "<h3>".$percentage."</h3>";

 ?>
    
          
              <p>المستشارين</p>
            </div>
            <div class="icon">
           <i class="material-icons"  style="font-size:70px">exit_to_app</i>
           
             
            </div>
            
    
            
            <a href="consultant.php" class="small-box-footer">&#1605;&#1586;&#1610;&#1583; &#1605;&#1606; &#1575;&#1604;&#1605;&#1593;&#1604;&#1608;&#1605;&#1575;&#1578; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        
        
          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <?php
              
               $sql = "SELECT * FROM  members ";
                
              
                
               $query = mysqli_query($con,$sql);

                $total = mysqli_num_rows($query);
                
              if($total<1)$total=0;                
               $percentage = $total;

              ///  echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
             
                echo "<h3>".$percentage."</h3>";

 ?>
          
              <p>الاعضاء</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-stalker"></i>
             
            </div>
            <a href="members.php" class="small-box-footer">&#1605;&#1586;&#1610;&#1583; &#1605;&#1606; &#1575;&#1604;&#1605;&#1593;&#1604;&#1608;&#1605;&#1575;&#1578; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>