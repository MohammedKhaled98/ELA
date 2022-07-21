<?php
	
session_start();
	if(1){
	include 'conn.php';
	$idg = $_GET['id'] ;
	
	
      $sql = mysqli_query($con,"SELECT * FROM `consultant` WHERE id='$idg'" );
          while($row = mysqli_fetch_array($sql)){



$Name= $row['Name'];



} 

$from= $_POST['from'];
$to= $_POST['to'];
$day= $_POST['day'];
$count = 1 ; 
$state = 1 ; 

          $timer = new DateTime($from);
          $ttimer = new DateTime($from);

          $timerF = new DateTime($to);
          
          $ct=   strtotime($from);
           $ctt=   strtotime($to);
           
           $diff = ($ctt - $ct)/3600 ; 
           
           if($diff <=0) {
           
           //هنا مشكلة التوقيت اذا قبل
           
           }
        
         
         $tt=$diff*4 ; 
         
         $i=1;
         
          $minutes_to_add = 15 ;
    
          
          while($i<=$tt){
          $r= $timer->format("H:i")  ;

          $timer->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        
         $i++;
          
        $sql = "INSERT INTO  BookApp (day , idc , nameC,state,time)
 VALUES('$day','$idg','$Name','$state','$r')";
    		
    		
    		if( mysqli_query($con,$sql)){
				 

	 
					
				}
				else{
					echo xxxx;
				
				}
				
				
				
          
          
          }
          
          
           $r= $ttimer->format("H:i")  ;
          $to= $timerF->format("H:i")  ;
         
          
 $sql = "INSERT INTO  ConsApp(day , idm , name,ffrom,tto,count )
 VALUES('$day','$idg','$Name','$r','$to','$tt')";
    		
    		
    		if( mysqli_query($con,$sql)){
				 

	 
					
				}
				else{
					echo err;
				
				}
				
				

				
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		
			
			}
			
			
			
			
			
  
                   
                 

?>