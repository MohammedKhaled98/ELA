<?php 
include 'conn.php';
include 'header.php';
 include 'session.php';
  $idg = $_GET['id']; 
  $idm = $_GET['idm']; 
 ////$id=$user[id];
 $day= date("l");
 $day = date('l',strtotime($day.'+1 day'));
 $date = date("Y/m/d"); 
$date = date('Y/m/d',strtotime($date.'+1 day'));
 
 ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'coustumer.php'; ?>
  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       حجز موعد مع المستشار</h1>
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
          - الجلسات المتاحة في اللون الازرق
          <br>- الجلسات المحجوزة في اللون الاحمر
          <br>** علما بأن المواقيت على نظام الـ24 ساعة
            <div class="box-header with-border">
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th class="text-right" >اليوم</th>
                  <th class="text-right" >التاريخ</th>
                   <th class="text-right" >المواعيد المتاحة</th>
                  
                  
               
                  
                </thead>
                <tbody>
 
   
   <?php 
   
   $c = 1 ; 
   
   while($c<=7){
   
switch($day) { 


case "Thursday" : 
$weekday="الخميس" ;
break; 

case "Friday" : 
$weekday="الجمعة" ;
break; 

case "Saturday" : 
$weekday="السبت" ;
break; 

case "Sunday" : 
$weekday="الأحد" ;
break; 

case "Monday" : 
$weekday="الأثنين" ;
break; 

case "Tuesday" : 
$weekday="الثلاثاء" ;
break; 

case "Wednesday" : 
$weekday="الأربعاء" ;
break; 




}
  
   echo " <tr>
   <td>".$weekday."</td>
   <td>".$date."</td>
  
  <td>";
  
  
                      $sql = mysqli_query($con,"SELECT * FROM `BookApp` WHERE idc='$idg'AND day='$weekday' ");
          while($row = mysqli_fetch_array($sql)){
          
          
            
           $fr= date("H:i", strtotime($row['time'] ));
          $y="detail.php?idc=".$idg."&idm=".$idm."&date=".$date."&time=".$fr ;
                       if($row['state']==1){
                  
                    $state='<a href="'.$y.'" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"> '.$fr.'</a>&nbsp' ;
                    
                   
                    }
                    
                                 else if($row['state']==2){
      
                        $state='<a href="'.$y.'" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style = "background:#7B241C" disabled> '.$fr.'</a>&nbsp' ;
                   
                    }
                    
   
   echo $state; 
          
          
          }
  
  echo "
   
   </td> </tr>" ;
   
   
   $c=$c+1 ; 
   $day = date('l',strtotime($day.'+1 day'));
   $date = date('Y/m/d',strtotime($date.'+1 day'));
    
   
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
<script>
$(function(){

 $('.editx').click(function(e){

    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
    
  });

  $('.editf').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
    allx();
  });
 $('.editxd').click(function(e){
    e.preventDefault();
    $('#editxd').modal('show');
    var id = $(this).data('id');
    getRowx(id);
    allx();
  });

  $('.deletef').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    
    getRow(id);
  });
});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'usr_rmsgs.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
   //// alert (response);
     $('#id').val(response.id);
     $('#rd').val(response.rd);
     $('#msg').html(response.msg);
       $('#mn').html(response.name);
      $('#name_edit').val(response.namem);
      $('#sgl_edit').val(response.passm);
      $('#nsab').html(response.nsab);
      $('#nsabx').html(response.nsab);
      $('#id_editx').val(response.idm);
     $('#id_edit').val(response.idm);
      $('#del_name').val(response.name);
      $('#del_id').val(response.id);
      $('#name_editx').html(response.namem);
      $('#goal_edit').val(response.goal);
       $('#email_edit').val(response.email);
        $('#tkhss_edit').val(response.tkhss);
         $('#trteb_edit').val(response.trteb);
    
     $('#fs1').html(response.fs1);
 if (response.fs1==1)
{
document.getElementById("fs1").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n1\" checked ></td>";
 }   
   if (response.fs1==0) 
{
document.getElementById("fs1").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n1\"></td>";
}    

$('#fs2').html(response.fs2);
 if (response.fs2==1)
{
document.getElementById("fs2").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n2\" checked ></td>";
 }   
   if (response.fs2==0) 
{
document.getElementById("fs2").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n2\"></td>";
}    
$('#fs3').html(response.fs3);
 if (response.fs3==1)
{
document.getElementById("fs3").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n3\" checked ></td>";
 }   
   if (response.fs3==0) 
{
document.getElementById("fs3").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n3\"></td>";
}    
$('#fs4').html(response.fs4);
 if (response.fs4==1)
{
document.getElementById("fs4").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n4\" checked ></td>";
 }   
   if (response.fs4==0) 
{
document.getElementById("fs4").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n4\"></td>";
}    
 $('#fs5').html(response.fs5);
 if (response.fs5==1)
{
document.getElementById("fs5").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n5\" checked ></td>";
 }   
   if (response.fs5==0) 
{
document.getElementById("fs5").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n5\"></td>";
}    
 $('#fs6').html(response.fs6);
 if (response.fs6==1)
{
document.getElementById("fs6").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n6\" checked ></td>";
 }   
   if (response.fs6==0) 
{
document.getElementById("fs6").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n6\"></td>";
}    
 $('#fs7').html(response.fs7);
 if (response.fs7==1)
{
document.getElementById("fs7").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n7\" checked ></td>";
 }   
   if (response.fs7==0) 
{
document.getElementById("fs7").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n7\"></td>";
}    
 $('#fs8').html(response.fs8);
 if (response.fs8==1)
{
document.getElementById("fs8").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n8\" checked ></td>";
 }   
   if (response.fs8==0) 
{
document.getElementById("fs8").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n8\"></td>";
}    
     
$('#fs9').html(response.fs9);
 if (response.fs9==1)
{
document.getElementById("fs9").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n9\" checked ></td>";
 }   
   if (response.fs9==0) 
{
document.getElementById("fs9").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n9\"></td>";
}    
$('#fs10').html(response.fs10);
 if (response.fs10==1)
{
document.getElementById("fs10").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n10\" checked ></td>";
 }   
   if (response.fs10==0) 
{
document.getElementById("fs10").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n10\"></td>";
}    
$('#fs11').html(response.fs11);
 if (response.fs11==1)
{
document.getElementById("fs11").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n11\" checked ></td>";
 }   
   if (response.fs11==0) 
{
document.getElementById("fs11").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n11\"></td>";
}    
$('#fs12').html(response.fs12);
 if (response.fs12==1)
{
document.getElementById("fs12").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n12\" checked ></td>";
 }   
   if (response.fs12==0) 
{
document.getElementById("fs12").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n12\"></td>";
}    
$('#fs13').html(response.fs13);
 if (response.fs13==1)
{
document.getElementById("fs13").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n13\" checked ></td>";
 }   
   if (response.fs13==0) 
{
document.getElementById("fs13").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n13\"></td>";
}    
$('#fs14').html(response.fs14);
 if (response.fs14==1)
{
document.getElementById("fs14").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n14\" checked ></td>";
 }   
   if (response.fs14==0) 
{
document.getElementById("fs14").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n14\"></td>";
}    
$('#fs15').html(response.fs15);
 if (response.fs15==1)
{
document.getElementById("fs15").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n15\" checked ></td>";
 }   
   if (response.fs15==0) 
{
document.getElementById("fs15").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n15\"></td>";
}    
$('#fs16').html(response.fs16);
 if (response.fs16==1)
{
document.getElementById("fs16").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n16\" checked ></td>";
 }   
   if (response.fs16==0) 
{
document.getElementById("fs16").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n16\"></td>";
}    

$('#fs17').html(response.fs17);
 if (response.fs17==1)
{
document.getElementById("fs17").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n17\" checked ></td>";
 }   
   if (response.fs17==0) 
{
document.getElementById("fs17").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n17\"></td>";
}    
$('#fs18').html(response.fs18);
 if (response.fs18==1)
{
document.getElementById("fs18").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n18\" checked ></td>";
 }   
   if (response.fs18==0) 
{
document.getElementById("fs18").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n18\"></td>";
}    
$('#fs19').html(response.fs19);
 if (response.fs19==1)
{
document.getElementById("fs19").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n19\" checked ></td>";
 }   
   if (response.fs19==0) 
{
document.getElementById("fs19").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n19\"></td>";
}  


$('#fs20').html(response.fs20);
 if (response.fs20==1)
{
document.getElementById("fs20").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n20\" checked ></td>";
 }   
   if (response.fs20==0) 
{
document.getElementById("fs20").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n20\"></td>";
}    




  

$('#fs21').html(response.fs21);
 if (response.fs21==1)
{
document.getElementById("fs21").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n21\" checked ></td>";
 }   
   if (response.fs21==0) 
{
document.getElementById("fs21").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n21\"></td>";
}    
$('#fs22').html(response.fs22);
 if (response.fs22==1)
{
document.getElementById("fs22").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n22\" checked ></td>";
 }   
   if (response.fs22==0) 
{
document.getElementById("fs22").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n22\"></td>";
}    
$('#fs23').html(response.fs23);
 if (response.fs23==1)
{
document.getElementById("fs23").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n23\" checked ></td>";
 }   
   if (response.fs23==0) 
{
document.getElementById("fs23").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n23\"></td>";
}    
$('#fs24').html(response.fs24);
 if (response.fs24==1)
{
document.getElementById("fs24").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n24\" checked ></td>";
 }   
   if (response.fs24==0) 
{
document.getElementById("fs24").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n24\"></td>";
}    
$('#fs25').html(response.fs25);
 if (response.fs25==1)
{
document.getElementById("fs25").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n25\" checked ></td>";
 }   
   if (response.fs25==0) 
{
document.getElementById("fs25").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n25\"></td>";
}    
$('#fs26').html(response.fs26);
 if (response.fs26==1)
{
document.getElementById("fs26").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n26\" checked ></td>";
 }   
   if (response.fs26==0) 
{
document.getElementById("fs26").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n26\"></td>";
}    

$('#fs27').html(response.fs27);
 if (response.fs27==1)
{
document.getElementById("fs27").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n27\" checked ></td>";
 }   
   if (response.fs27==0) 
{
document.getElementById("fs27").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n27\"></td>";
}    
$('#fs28').html(response.fs28);
 if (response.fs28==1)
{
document.getElementById("fs28").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n28\" checked ></td>";
 }   
   if (response.fs28==0) 
{
document.getElementById("fs28").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n28\"></td>";
}    
$('#fs29').html(response.fs29);
 if (response.fs29==1)
{
document.getElementById("fs29").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n29\" checked ></td>";
 }   
   if (response.fs29==0) 
{
document.getElementById("fs29").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n29\"></td>";
}    

$('#fs30').html(response.fs30);
 if (response.fs30==1)
{
document.getElementById("fs30").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n30\" checked ></td>";
 }   
   if (response.fs30==0) 
{
document.getElementById("fs30").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n30\"></td>";
}    




  

$('#fs31').html(response.fs31);
 if (response.fs31==1)
{
document.getElementById("fs31").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n31\" checked ></td>";
 }   
   if (response.fs31==0) 
{
document.getElementById("fs31").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n31\"></td>";
}    
$('#fs32').html(response.fs32);
 if (response.fs32==1)
{
document.getElementById("fs32").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n32\" checked ></td>";
 }   
   if (response.fs32==0) 
{
document.getElementById("fs32").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n32\"></td>";
}    
$('#fs33').html(response.fs33);
 if (response.fs33==1)
{
document.getElementById("fs33").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n33\" checked ></td>";
 }   
   if (response.fs33==0) 
{
document.getElementById("fs33").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n33\"></td>";
}    
$('#fs34').html(response.fs34);
 if (response.fs34==1)
{
document.getElementById("fs34").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n34\" checked ></td>";
 }   
   if (response.fs34==0) 
{
document.getElementById("fs34").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n34\"></td>";
}    
$('#fs35').html(response.fs35);
 if (response.fs35==1)
{
document.getElementById("fs35").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n35\" checked ></td>";
 }   
   if (response.fs35==0) 
{
document.getElementById("fs35").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n35\"></td>";
}    
$('#fs36').html(response.fs36);
 if (response.fs36==1)
{
document.getElementById("fs36").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n36\" checked ></td>";
 }   
   if (response.fs36==0) 
{
document.getElementById("fs36").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n36\"></td>";
}    

$('#fs37').html(response.fs37);
 if (response.fs37==1)
{
document.getElementById("fs37").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n37\" checked ></td>";
 }   
   if (response.fs37==0) 
{
document.getElementById("fs37").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n37\"></td>";
}    
$('#fs38').html(response.fs38);
 if (response.fs38==1)
{
document.getElementById("fs38").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n38\" checked ></td>";
 }   
   if (response.fs38==0) 
{
document.getElementById("fs38").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n38\"></td>";
}    
$('#fs39').html(response.fs39);
 if (response.fs39==1)
{
document.getElementById("fs39").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n39\" checked ></td>";
 }   
   if (response.fs39==0) 
{
document.getElementById("fs39").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n39\"></td>";
}    

$('#fs40').html(response.fs40);
 if (response.fs40==1)
{
document.getElementById("fs40").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n40\" checked ></td>";
 }   
   if (response.fs40==0) 
{
document.getElementById("fs40").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n40\"></td>";
}    





 
      
    }
  });
}

function getRowx(id){
  $.ajax({
    type: 'POST',
    url: 'usr_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
   //// alert (response);
     
      $('#name_editd').val(response.namem);
      $('#sgl_editd').val(response.passm);
      $('#nsabd').html(response.nsab);
          
     $('#id_editd').val(response.idm);
     
    
     $('#dfs1').html(response.dfs1);
    /// alert(response.dfs1);
 if (response.dfs1==1)
{
document.getElementById("dfs1").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n1\" checked ></td>";
 }   
   if (response.dfs1==0) 
{
document.getElementById("dfs1").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n1\"></td>";
}    

$('#dfs2').html(response.dfs2);
 if (response.dfs2==1)
{
document.getElementById("dfs2").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n2\" checked ></td>";
 }   
   if (response.dfs2==0) 
{
document.getElementById("dfs2").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n2\"></td>";
}    
$('#dfs3').html(response.dfs3);
 if (response.dfs3==1)
{
document.getElementById("dfs3").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n3\" checked ></td>";
 }   
   if (response.dfs3==0) 
{
document.getElementById("dfs3").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n3\"></td>";
}    
$('#dfs4').html(response.dfs4);
 if (response.dfs4==1)
{
document.getElementById("dfs4").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n4\" checked ></td>";
 }   
   if (response.dfs4==0) 
{
document.getElementById("dfs4").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n4\"></td>";
}    
 $('#dfs5').html(response.dfs5);
 if (response.dfs5==1)
{
document.getElementById("dfs5").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n5\" checked ></td>";
 }   
   if (response.dfs5==0) 
{
document.getElementById("dfs5").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n5\"></td>";
}    
 $('#dfs6').html(response.dfs6);
 if (response.dfs6==1)
{
document.getElementById("dfs6").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n6\" checked ></td>";
 }   
   if (response.dfs6==0) 
{
document.getElementById("dfs6").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n6\"></td>";
}    
 $('#dfs7').html(response.dfs7);
 if (response.dfs7==1)
{
document.getElementById("dfs7").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n7\" checked ></td>";
 }   
   if (response.dfs7==0) 
{
document.getElementById("dfs7").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n7\"></td>";
}    
 $('#dfs8').html(response.dfs8);
 if (response.dfs8==1)
{
document.getElementById("dfs8").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n8\" checked ></td>";
 }   
   if (response.dfs8==0) 
{
document.getElementById("dfs8").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n8\"></td>";
}    
     
$('#dfs9').html(response.dfs9);
 if (response.dfs9==1)
{
document.getElementById("dfs9").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n9\" checked ></td>";
 }   
   if (response.dfs9==0) 
{
document.getElementById("dfs9").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n9\"></td>";
}    
$('#dfs10').html(response.dfs10);
 if (response.dfs10==1)
{
document.getElementById("dfs10").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n10\" checked ></td>";
 }   
   if (response.dfs10==0) 
{
document.getElementById("dfs10").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n10\"></td>";
}    
$('#dfs11').html(response.dfs11);
 if (response.dfs11==1)
{
document.getElementById("dfs11").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n11\" checked ></td>";
 }   
   if (response.dfs11==0) 
{
document.getElementById("dfs11").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n11\"></td>";
}    
$('#dfs12').html(response.dfs12);
 if (response.dfs12==1)
{
document.getElementById("dfs12").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n12\" checked ></td>";
 }   
   if (response.dfs12==0) 
{
document.getElementById("dfs12").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n12\"></td>";
}    
$('#dfs13').html(response.dfs13);
 if (response.dfs13==1)
{
document.getElementById("dfs13").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n13\" checked ></td>";
 }   
   if (response.dfs13==0) 
{
document.getElementById("dfs13").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n13\"></td>";
}    
$('#dfs14').html(response.dfs14);
 if (response.dfs14==1)
{
document.getElementById("dfs14").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n14\" checked ></td>";
 }   
   if (response.dfs14==0) 
{
document.getElementById("dfs14").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n14\"></td>";
}    
$('#dfs15').html(response.dfs15);
 if (response.dfs15==1)
{
document.getElementById("dfs15").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n15\" checked ></td>";
 }   
   if (response.dfs15==0) 
{
document.getElementById("dfs15").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n15\"></td>";
}    
$('#dfs16').html(response.dfs16);
 if (response.dfs16==1)
{
document.getElementById("dfs16").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n16\" checked ></td>";
 }   
   if (response.dfs16==0) 
{
document.getElementById("dfs16").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n16\"></td>";
}    

$('#dfs17').html(response.dfs17);
 if (response.dfs17==1)
{
document.getElementById("dfs17").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n17\" checked ></td>";
 }   
   if (response.dfs17==0) 
{
document.getElementById("dfs17").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n17\"></td>";
}    
$('#dfs18').html(response.dfs18);
 if (response.dfs18==1)
{
document.getElementById("dfs18").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n18\" checked ></td>";
 }   
   if (response.dfs18==0) 
{
document.getElementById("dfs18").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n18\"></td>";
}    
$('#dfs19').html(response.dfs19);
 if (response.dfs19==1)
{
document.getElementById("dfs19").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n19\" checked ></td>";
 }   
   if (response.dfs19==0) 
{
document.getElementById("dfs19").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n19\"></td>";
}  


$('#dfs20').html(response.dfs20);
 if (response.dfs20==1)
{
document.getElementById("dfs20").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n20\" checked ></td>";
 }   
   if (response.dfs20==0) 
{
document.getElementById("dfs20").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n20\"></td>";
}    




  

$('#dfs21').html(response.dfs21);
 if (response.dfs21==1)
{
document.getElementById("dfs21").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n21\" checked ></td>";
 }   
   if (response.dfs21==0) 
{
document.getElementById("dfs21").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n21\"></td>";
}    
$('#dfs22').html(response.dfs22);
 if (response.dfs22==1)
{
document.getElementById("dfs22").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n22\" checked ></td>";
 }   
   if (response.dfs22==0) 
{
document.getElementById("dfs22").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n22\"></td>";
}    
$('#dfs23').html(response.dfs23);
 if (response.dfs23==1)
{
document.getElementById("dfs23").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n23\" checked ></td>";
 }   
   if (response.dfs23==0) 
{
document.getElementById("dfs23").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n23\"></td>";
}    
$('#dfs24').html(response.dfs24);
 if (response.dfs24==1)
{
document.getElementById("dfs24").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n24\" checked ></td>";
 }   
   if (response.dfs24==0) 
{
document.getElementById("dfs24").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n24\"></td>";
}    
$('#dfs25').html(response.dfs25);
 if (response.dfs25==1)
{
document.getElementById("dfs25").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n25\" checked ></td>";
 }   
   if (response.dfs25==0) 
{
document.getElementById("dfs25").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n25\"></td>";
}    
$('#dfs26').html(response.dfs26);
 if (response.dfs26==1)
{
document.getElementById("dfs26").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n26\" checked ></td>";
 }   
   if (response.dfs26==0) 
{
document.getElementById("dfs26").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n26\"></td>";
}    

$('#dfs27').html(response.dfs27);
 if (response.dfs27==1)
{
document.getElementById("dfs27").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n27\" checked ></td>";
 }   
   if (response.dfs27==0) 
{
document.getElementById("dfs27").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n27\"></td>";
}    
$('#dfs28').html(response.dfs28);
 if (response.dfs28==1)
{
document.getElementById("dfs28").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n28\" checked ></td>";
 }   
   if (response.dfs28==0) 
{
document.getElementById("dfs28").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n28\"></td>";
}    
$('#dfs29').html(response.dfs29);
 if (response.dfs29==1)
{
document.getElementById("dfs29").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n29\" checked ></td>";
 }   
   if (response.dfs29==0) 
{
document.getElementById("dfs29").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n29\"></td>";
}    

$('#dfs30').html(response.dfs30);
 if (response.dfs30==1)
{
document.getElementById("dfs30").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n30\" checked ></td>";
 }   
   if (response.dfs30==0) 
{
document.getElementById("dfs30").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n30\"></td>";
}    




  

$('#dfs31').html(response.dfs31);
 if (response.dfs31==1)
{
document.getElementById("dfs31").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n31\" checked ></td>";
 }   
   if (response.dfs31==0) 
{
document.getElementById("dfs31").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n31\"></td>";
}    
$('#dfs32').html(response.dfs32);
 if (response.dfs32==1)
{
document.getElementById("dfs32").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n32\" checked ></td>";
 }   
   if (response.dfs32==0) 
{
document.getElementById("dfs32").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n32\"></td>";
}    
$('#dfs33').html(response.dfs33);
 if (response.dfs33==1)
{
document.getElementById("dfs33").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n33\" checked ></td>";
 }   
   if (response.dfs33==0) 
{
document.getElementById("dfs33").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n33\"></td>";
}    
$('#dfs34').html(response.dfs34);
 if (response.dfs34==1)
{
document.getElementById("dfs34").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n34\" checked ></td>";
 }   
   if (response.dfs34==0) 
{
document.getElementById("dfs34").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n34\"></td>";
}    
$('#dfs35').html(response.dfs35);
 if (response.dfs35==1)
{
document.getElementById("dfs35").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n35\" checked ></td>";
 }   
   if (response.dfs35==0) 
{
document.getElementById("dfs35").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n35\"></td>";
}    
$('#dfs36').html(response.dfs36);
 if (response.dfs36==1)
{
document.getElementById("dfs36").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n36\" checked ></td>";
 }   
   if (response.dfs36==0) 
{
document.getElementById("dfs36").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n36\"></td>";
}    

$('#dfs37').html(response.dfs37);
 if (response.dfs37==1)
{
document.getElementById("dfs37").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n37\" checked ></td>";
 }   
   if (response.dfs37==0) 
{
document.getElementById("dfs37").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n37\"></td>";
}    
$('#dfs38').html(response.dfs38);
 if (response.dfs38==1)
{
document.getElementById("dfs38").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n38\" checked ></td>";
 }   
   if (response.dfs38==0) 
{
document.getElementById("dfs38").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n38\"></td>";
}    
$('#dfs39').html(response.dfs39);
 if (response.dfs39==1)
{
document.getElementById("dfs39").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n39\" checked ></td>";
 }   
   if (response.dfs39==0) 
{
document.getElementById("dfs39").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n39\"></td>";
}    

$('#dfs40').html(response.dfs40);
 if (response.dfs40==1)
{
document.getElementById("dfs40").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n40\" checked ></td>";
 }   
   if (response.dfs40==0) 
{
document.getElementById("dfs40").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"n40\"></td>";
}    





 
      
    }
  });
}
</script>
</body>
</html>