<?php 
include 'includes/session.php';
 $id=$_SESSION['admin'];
 ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       ربط المواد
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">ربط المواد</li>
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>الاسم</th>
                  <th>النصاب</th>
                  <th>المواد</th>
                 
                  <th>أدوات</th>
                </thead>
                <tbody>
                  <?php
                  
                 	 $sqlm=mysqli_query($conn,"select * from `gg_moad`  ");
				
				while($rowm=mysqli_fetch_array($sqlm)){
			$mmx[$rowm[code]]=$rowm[name];
				}
 
                  
                  
                    $sql = "SELECT * FROM gg_mdrs where id=$id  ORDER BY datas DESC ";
                    $query = $conn->query($sql);
                    if ($query) {
                    while($row = $query->fetch_assoc()){
                    $x=0;
                     for ($i = 1; $i <= 24; $i++) {
                    $an[$i]=0;
                    $al[$i]="";
                    }
                    $sd="";
                    $asx=0;
                
                           for ($i = 1; $i <= 24; $i++) {
               
    $xx="n".$i;
    if (strlen($row[$xx])>3){
    $mm=$row[$xx][0].$row[$xx][1].$row[$xx][2];
    $ss=$row[$xx][4].$row[$xx][5].$row[$xx][6].$row[$xx][7].$row[$xx][8];
    $ax=$mmx[$mm]."  ".$ss;
     $xz=0;
    for ($ix = 1; $ix <= 24; $ix++) {
    if ($al[$ix]==$ax)
    {
    $xz=1;
    break; 
    }
    }
    if ($xz==0)
    {
    $x=$x+1;
        }

  $an[$x]=$an[$x]+1;
  $al[$x]=$ax;
  
    }
    
                                 } ///for
      
   
 $df=" "."<font color=\"#FF0000\">";
   for ($ix = 1; $ix <= $x; $ix++) {
   $asx=$asx+$an[$ix];
$sd=" ".$sd.$al[$ix].$df.$an[$ix]."</font>"."   ";
     }
    
              
                
         


                   
                      echo "
                        <tr>
                          <td class='hidden'></td>
                           <td>".$row['namem']."</td>
                            <td>".$asx."</td>
                             <td>".$sd."</td>
                          

                          <td>
                            <button class='btn btn-success btn-sm btn-flat edit' data-id='".$row['idm']."'><i class='fa fa-edit'></i> اختر الفصل</button>
                          </td>
                        </tr>
                      ";
                    }
                    }
                  ?>
                </tbody>
              </table>
           
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/rptrmo.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
 /// alert("ff");
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  
  $('.edit1').click(function(e){
 /// alert("ff");
    e.preventDefault();
    $('#edit1').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'usr_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
   /// alert (response);
     
      $('#name_edit').html(response.namem);
      $('#sgl_edit').html(response.nsab);
      
      $('#id_edit').val(response.idm);
   
      $('#del_name').val(response.namem);
      $('#del_id').val(response.idm);
       
      
    }
  });
}
</script>
</body>
</html>
