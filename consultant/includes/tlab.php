<?php 
include 'includes/session.php';
 $id=$_SESSION['mdrsh'];
 ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
  include 'navbar.php'; 
  ?>
  <?php include 'menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;
 <a href="xltlab.php" ><i class="fa fa-plus"></i>تصدير الاسماء</a>
 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> &#1575;&#1604;&#1585;&#1574;&#1610;&#1587;&#1610;&#1577;</a></li>
        <li class="active">&#1575;&#1604;&#1591;&#1604;&#1575;&#1576;</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              
              <h4>&#1582;&#1591;&#1575;&#1569;<i class='icon fa fa-warning'></i></h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
             
               <h4>&#1585;&#1575;&#1574;&#1593;<i class='icon fa fa-check'></i> </h4>
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
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> &#1580;&#1583;&#1610;&#1583;</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>&#1593;&#1583;&#1583;</th>
                  <th>&#1575;&#1604;&#1575;&#1587;&#1605;</th>
                  <th>&#1575;&#1604;&#1601;&#1589;&#1604;</th>
                  <th>المصادر</th>
                  <th>نشاط</th>
                   <th>نظام</th>
                  <th>ارشاد</th>
 <th>رياضه</th>
                  

                 
                  <th>&#1571;&#1583;&#1608;&#1575;&#1578;</th>
                </thead>
                <tbody>
                  <?php
 
                  
////DESC 
                    $sql = "SELECT * FROM gg_tlab where idm=$id  ORDER BY firstname ASC ";
                    $query = $conn->query($sql);
                    if ($query) {
                    while($row = $query->fetch_assoc()){
                   $idsf=$row[sf];
$nn="";
                     $sqlf = "SELECT * FROM gg_fsol where id=$idsf ";
                    $queryf = $conn->query($sqlf);
                    if ($queryf) {
                   if($rowf = $queryf->fetch_assoc()){
                    
                 /////////
             $nnx= $rowf['sf'];
                   switch ($nnx) {
   case 7:
        $nnx= "1";
        break;
   case 8:
        $nnx= "2";
        break;
   case 9:
        $nnx= "3";
        break;
    case 10:
        $nnx= "1";
        break;
case 11:
        $nnx= "2";
        break;
case 12:
        $nnx= "3";
        break;
     case 13:
        $nnx= "1";
        break;
   case 14:
        $nnx= "2";
        break;
   case 15:
        $nnx= "3";
        break;
    case 16:
        $nnx= "4";
        break;
case 17:
        $nnx= "5";
        break;
case 18:
        $nnx= "6";
        break;
 case 19:
        $nnx= "1";
        break;
   case 20:
        $nnx= "2";
        break;
   case 21:
        $nnx= "3";
        break;
    case 22:
        $nnx= "1";
        break;
case 23:
        $nnx= "2";
        break;
case 24:
        $nnx= "3";
        break;
       
  
}
 $nn=$nnx."/".$rowf['name']; 
 
}
}

$dd=$dd+1;
///////////     

   

                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$dd."</td>
                           <td>".$row['firstname']."</td>
                            <td>".$nn."</td>
                         
                          

                        
                          ";
                          $r=$row['id'];
                          $ar="a".$r;
                          $br="b".$r;
                          $cr="c".$r;
                          $dr="d".$r;
                          $er="e".$r;
                          
                          if ($row['msadr']>0)
                          {
                           echo "
                             <td>
          <button id='$ar'  type='button' class='btn btn-danger' onclick='delx($r,1,1)'></button>                  
                          </td>

 ";
                           }
                           else
                           {
                           
                           echo "
                             <td>
         <button id='$ar' type='button' class='btn btn-primary' onclick='delx($r,1,2)'></button>                  
                          </td>
 ";
                           }
 if ($row['nshat']>0)
                          {
                           echo "
                             <td>
          <button id='$br'  type='button' class='btn btn-danger' onclick='delx($r,2,1)'></button>                  
    
                          </td>

 ";
                           }
                           else
                           {
                           
                           echo "
                             <td>
          <button id='$br' type='button' class='btn btn-primary' onclick='delx($r,2,2)'></button>                  

                          </td>
 ";
                           }
                           
        if ($row['ndam']>0)
                          {
                           echo "
                             <td>
          <button id='$cr'  type='button' class='btn btn-danger' onclick='delx($r,3,1)'></button>                  
    
                          </td>

 ";
                           }
                           else
                           {
                           
                           echo "
                             <td>
          <button id='$cr' type='button' class='btn btn-primary' onclick='delx($r,3,2)'></button>                  

                          </td>
 ";
                           }
                           
       if ($row['arshad']>0)
                          {
                           echo "
                             <td>
          <button id='$dr'  type='button' class='btn btn-danger' onclick='delx($r,4,1)'></button>                  
    
                          </td>

 ";
                           }
                           else
                           {
                           
                           echo "
                             <td>
          <button id='$dr' type='button' class='btn btn-primary' onclick='delx($r,4,2)'></button>                  

                          </td>
 ";
                           }
                      
                           
       if ($row['akhra']>0)
                          {
                           echo "
                             <td>
          <button id='$er'  type='button' class='btn btn-danger' onclick='delx($r,5,1)'></button>                  
    
                          </td>

 ";
                           }
                           else
                           {
                           
                           echo "
                             <td>
          <button id='$er' type='button' class='btn btn-primary' onclick='delx($r,5,2)'></button>                  

                          </td>
 ";
                           }
                      
             
                           
                           
                           
                           


 echo "
                        </tr>
                      ";
                    }
                    }
                  ?>
                </tbody>
              </table>
 <button class='btn btn-primary btn-sm btn-flat pr' data-id='".$row['id']."'><i class='fa fa-print'></i> طباعة</button>
             

            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'footer.php'; ?>
  <?php include 'includes/tlabmo.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
function delx(id,n,k){

if (k==1) cl='btn btn-primary';
if (k==1) clx='+';
if (k==2) cl='btn btn-danger';
if (k==2) clx='-';
if (n==1) x='a'+id;
if (n==2) x='b'+id;
if (n==3) x='c'+id;
if (n==4) x='d'+id;
if (n==5) x='e'+id;

   var z=document.getElementById(x);
   z.className=cl;
  
    //alert(x);
$.ajax({
    type: 'POST',
    url: 'tlab_edittt.php',
    data: {id:id,n:n,k:k},
    dataType: 'json',
    success: function(response){

   
     
   
      
    }
  });



}
$(function(){
$('.msadr').click(function(e){
 /// alert("ff");
    e.preventDefault();
    $('#pr').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

 $('.pr').click(function(e){
 /// alert("ff");
    e.preventDefault();
    $('#pr').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.edit').click(function(e){
 /// alert("ff");
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
   $('.editx').click(function(e){
 /// alert("ff");
    e.preventDefault();
    $('#editx').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRowd(id);
   
  });
});
function getRowd(id){
  $.ajax({
    type: 'POST',
    url: 'tlab_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
   //// alert (response);
   
      $('#del_name').val(response.name);
      $('#del_id').val(response.id);
     
   
      
    }
  });
}


function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'tlab_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
   //// alert (response);
     $('#name_editf').html(response.name);
      $('#name_edit').val(response.name);
      $('#firstname_edit').val(response.firstname);
      $('#goal_edit').val(response.goal);
      $('#photon_edit').val(response.audio);
      $('#pass_edit').val(response.pass);
      
      $('#id_edit').val(response.id);
      $('#id_editx').val(response.id);
      $('#sf_editx').html(response.nn);
   
      $('#del_name').val(response.name);
      $('#del_id').val(response.id);
     
        $('#msadr').html(response.msadr);
      
 if (response.msadr>0)
{
document.getElementById("msadr").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"msadr\" checked ></td>";
 }   
 else
{
document.getElementById("msadr").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"msadr\"></td>";
}    

 $('#nshat').html(response.nshat);
        
 if (response.nshat>0)
{
document.getElementById("nshat").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"nshat\" checked ></td>";
 }   
 else
{
document.getElementById("nshat").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"nshat\"></td>";
}    

 $('#ndam').html(response.ndam);
        
 if (response.ndam>0)
{
document.getElementById("ndam").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"ndam\" checked ></td>";
 }   
 else
{
document.getElementById("ndam").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"ndam\"></td>";
}  


$('#arshad').html(response.arshad);
        
 if (response.arshad>0)
{
document.getElementById("arshad").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"arshad\" checked ></td>";
 }   
 else
{
document.getElementById("arshad").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"arshad\"></td>";
}   

 
$('#akhra').html(response.akhra);
        
 if (response.akhra>0)
{
document.getElementById("akhra").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"akhra\" checked ></td>";
 }   
 else
{
document.getElementById("akhra").innerHTML = "	<td align=\"center\"><input type=\"checkbox\" value=\"1\"  name=\"akhra\"></td>";
}   











   
      
    }
  });
}
</script>
</body>
</html>
