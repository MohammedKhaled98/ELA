<!-- pr -->
<?php 
 

$ulral1="../tcpdf/examples/card.php?id=".$id."&u=1"; 
$ulral2="../tcpdf/examples/card.php?id=".$id."&u=2"; 
$ulral3="../tcpdf/examples/card.php?id=".$id."&u=3"; 
$ulral4="../tcpdf/examples/card.php?id=".$id."&u=4"; 
$ulral5="../tcpdf/examples/card.php?id=".$id."&u=5"; 


$ulrabl1="../tcpdf/examples/l1.php?id=".$id."&u=1"; 
$ulrabl2="../tcpdf/examples/l1.php?id=".$id."&u=2"; 
$ulrabl3="../tcpdf/examples/l1.php?id=".$id."&u=3"; 
$ulrabl4="../tcpdf/examples/l1.php?id=".$id."&u=4"; 
$ulrabl5="../tcpdf/examples/l1.php?id=".$id."&u=5"; 




$ulrasl1="../tcpdf/examples/shkr.php?id=".$id."&u=1"; 
$ulrasl2="../tcpdf/examples/shkr.php?id=".$id."&u=2"; 
$ulrasl3="../tcpdf/examples/shkr.php?id=".$id."&u=3"; 
$ulrasl4="../tcpdf/examples/shkr.php?id=".$id."&u=4"; 
$ulrasl5="../tcpdf/examples/shkr.php?id=".$id."&u=5"; 


?>
<div class="modal fade" id="pr">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
          	</div>
          	<input type="hidden" id="del_id" name="id">
            		
          	<div class="modal-body">
            		
            		<div class="text-center">
	                	<p>الطباعه</p>
	                	
                	
<a href="<?php echo $ulrabl1 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> كشوف المصادر</button></a>
<a href="<?php echo $ulrabl2 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> كشوف النشاط</button></a>
<a href="<?php echo $ulrabl3 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> كشوف النظام</button></a>
<a href="<?php echo $ulrabl4 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> كشوف الارشاد</button></a>
<a href="<?php echo $ulrabl5 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> كشوف الرياضه</button></a>


	            

	                	
	                	
	            	</div>
          	</div>
          	
     <div class="modal-body">
            		
            		<div class="text-center">
	                	
	                	
<a href="<?php echo $ulrasl1 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> شهادات المصادر</button></a>
<a href="<?php echo $ulrasl2 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> شهادات النشاط</button></a>
<a href="<?php echo $ulrasl3 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> شهادات النظام</button></a>
<a href="<?php echo $ulrasl4 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> شهادات الارشاد</button></a>
<a href="<?php echo $ulrasl5 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> شهادات الرياضه</button></a>

	            

	                	
	                	
	            	</div>
          	</div>
     	
          	
          	
          	
          	
          	<div class="modal-body">
            		
            		<div class="text-center">
	                	
	                	
<a href="<?php echo $ulral1 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> بطاقات المصادر</button></a>
<a href="<?php echo $ulral2 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> بطاقات النشاط</button></a>
<a href="<?php echo $ulral3 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> بطاقات النظام</button></a>
<a href="<?php echo $ulral4 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> بطاقات الارشاد</button></a>
<a href="<?php echo $ulral5 ;?>"><button class='btn btn-primary btn-sm btn-flat' data-id='".$id."'><i class='fa fa-print'></i> بطاقات الرياضه</button></a>

	            

	                	
	                	
	            	</div>
          	</div>

          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
          	</div>
        </div>
    </div>
</div>









<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="usr_delete.php">
            		<input type="hidden" id="del_id" name="id">
            		<div class="text-center">
	                	<p>حذف الطالب</p>
	             	<input type="text" class="form-control" id="del_name"  >

	                	
	                	
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> حذف</button>
            	</form>
          	</div>
        </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function getSelectedText(elementId) {
    var elt = document.getElementById(elementId);

    if (elt.selectedIndex == -1)
        return null;

    return elt.options[elt.selectedIndex].text;
}

function showUser(str) {


var text = getSelectedText("sf"); 
var idx = document.getElementById("id_edit").value; 

document.getElementById("fsl").value = text;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        
       
        return;
    } else { 
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
        
        xmlhttp.open("GET","tlaber.php?q="+str+"&fsl="+text+"&idx="+idx,true);
        xmlhttp.send();
    }
}
</script>

</head>



<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>اضافةطالب</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="talb_add.php">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="name" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">الطالب</label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="sgl" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">الرقم السري</label>

                  	
                </div>

                
               

                
                
                
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
           
<?php 
$sql = "SELECT * FROM gg_mdrs where id=$id";
                $query = $conn->query($sql);
                $total = $query->num_rows;

if($user['hl']==8 or  $total < 4  )
{
 ?>
 	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> حفظ</button>
   <?php 
   }
 ?>
         


	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span id="employee_name"></span></b></h4>
          	</div>
          		<div class="modal-body">
            <form class="form-horizontal" method="POST" action="tlab_edit.php" enctype="multipart/form-data">	
            	<input type="hidden" id="id_edit" name="idx">
          		  <div class="form-group">
          		  
          		 
          		  <table border="1" width="100%">
	<tr>
		<td><h2>الاسم</h2></td>
		<td><h2>الرقم السري</h2></td>
		<td><h2>الفصل / الصف</h2></td>
	</tr>
	<tr>
	<td><input type="text" class="form-control" id="name_edit" name="name" ></td>

		
		<td><input type="text" class="form-control" id="pass_edit" name="sgl" ></td>
	
		<td>
		<button class='btn btn-primary btn-sm btn-flat editx' data-id='".$row['id']."'><i class='fa fa-edit'></i> تغيير الفصل</button>
	
		</td>
	
	
	</tr>
	
	<tr>
		<td><h2>الاسم الكامل</h2></td>
		<td><h2>جوال ولي الامر</h2></td>
		<td><h2>الملف الصوتي</h2></td>
	</tr>
<tr>
	<td><input type="text" class="form-control" id="firstname_edit" name="firstname" ></td>

		
		<td><input type="text" class="form-control" id="goal_edit" name="goal" ></td>
	
		<td>
<input type="file" id="pho" name="pho">	
<input type="hidden" id="photon_edit" name="photon">

		</td>
	
	
	</tr>

	
	
	
</table>

	</div>
	
	
		  <div class="form-group">
          		  
          		 
          		  <table border="1" width="100%">
	<tr>
	
	
		<td><h2>المصادر</h2></td>
		<td><h2>النشاط</h2></td>
		<td><h2>النظام</h2></td>
		<td><h2>الارشاد</h2></td>
		<td><h2>اخرى</h2></td>

	</tr>
<tr>

<td id="msadr"></td>

<td id="nshat"></td>

<td id="ndam"></td>

<td id="arshad"></td>

<td id="akhra"></td>






	
	</tr>

	
	
	
</table>

	</div>
	

   
			
				
<input type="hidden" name="fsl" id="fsl" >


	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	
            	
	<button type="submit" name="edit" class="btn btn-success btn-flat" ><i class="fa fa-check-square-o"></i> تعديل</button>


	</form>
	     
          	</div>
        </div>
    </div>
</div>




<!-- Editx -->
<div class="modal fade" id="editx">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span id="employee_name"></span></b></h4>
          	</div>
          		<div class="modal-body">
            <form class="form-horizontal" method="POST" action="tlab_editx.php">	
            	<input type="hidden" id="id_editx" name="idxt">
          		  <div class="form-group">
          		  
          		 
          		  <table border="1" width="100%">
	<tr>
		<td><h2>الاسم</h2></td>
		<td><h2>الفصل</h2></td>
		
	</tr>
	<tr>
		<td><h2 id="name_editf"></h2></td>
		<td><h2 id="sf_editx"></h2></td>
		
	</tr>
</table>

 <table border="1" width="100%">
	<tr>
		<td><h2>الفصل</h2></td>
		
	</tr>
	<tr>
		<td>
		
	
<select name="sf" id="sf" onchange="showUser(this.value)">
		<option  value=0 >اختر الفصل</option>
			 
	<?php
                    $sql = "SELECT * FROM gg_fsol where idm=$id ";
                    $query = $conn->query($sql);
                    if ($query) {
                    while($row = $query->fetch_assoc()){
                   $nnx= $row['sf'];
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
       
}
                   
                   $nn=$nnx."/".$row['name']; 

 echo "
	 
		 
	<option  value=".$row['id'].">".$nn."</option>
	
	
	  ";
                    }
                    }
                  ?>

	</select>

		
		</td>
		
	</tr>
</table>
        
          	</div>

          	
          	
          
            	
            	
            	
            	
            
		
		
			
				
<input type="hidden" name="fsl" id="fsl" >
	
<div id="txtHint"><b>اختر الفصل</b></div>
	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	
            	
	<button type="submit" name="edit" class="btn btn-success btn-flat" ><i class="fa fa-check-square-o"></i> تعديل</button>


	</form>
	            	
          	</div>
        </div>
    </div>
</div>


<!-- ddddd -->
<div class="modal fade" id="deletenn">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span id="employee_name"></span></b></h4>
          	</div>
          		<div class="modal-body">
            <form class="form-horizontal" method="POST" action="tlab_editx.php">	
            	<input type="hidden" id="id_editx" name="idxt">
          		  <div class="form-group">
          		  
          		 
          		  <table border="1" width="100%">
	<tr>
		<td><h2>الاسم</h2></td>
		<td><h2>الفصل</h2></td>
		
	</tr>
	<tr>
		<td><h2 id="name_editf"></h2></td>
		<td><h2 id="sf_editx"></h2></td>
		
	</tr>
</table>

 <table border="1" width="100%">
	<tr>
		<td><h2>الفصل</h2></td>
		
	</tr>
	<tr>
		<td>
		
	
<select name="sf" id="sf" onchange="showUser(this.value)">
		<option  value=0 >اختر الفصل</option>
			 
	<?php
                    $sql = "SELECT * FROM gg_fsol where idm=$id ";
                    $query = $conn->query($sql);
                    if ($query) {
                    while($row = $query->fetch_assoc()){
                   $nnx= $row['sf'];
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
       
}
                   
                   $nn=$nnx."/".$row['name']; 

 echo "
	 
		 
	<option  value=".$row['id'].">".$nn."</option>
	
	
	  ";
                    }
                    }
                  ?>

	</select>

		
		</td>
		
	</tr>
</table>
        
          	</div>

          	
          	
          
            	
            	
            	
            	
            
		
		
			
				
<input type="hidden" name="fsl" id="fsl" >
	
<div id="txtHint"><b>اختر الفصل</b></div>
	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	
            	
	<button type="submit" name="edit" class="btn btn-success btn-flat" ><i class="fa fa-check-square-o"></i> تعديل</button>


	</form>
	            	
          	</div>
        </div>
    </div>
</div>







