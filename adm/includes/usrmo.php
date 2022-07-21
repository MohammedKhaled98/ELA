<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>اضافةمعلم</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="usr_add.php">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="name" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">المعلم</label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="sgl" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">النصاب</label>

                  	
                </div>

                
               

                
                
                
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> حفظ</button>
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
            	<form class="form-horizontal" method="POST" action="usr_edit.php">
            	
            	<input type="hidden" id="id_edit"   name="id">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="name_edit" name="name" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">الاسم</label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="sgl_edit" name="sgl" >
         	
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">النصاب</label>
	                	

                  	
                </div>

                
                 <table id="exam" class="table table-bordered">
                <thead>
               
                  <td align="center">اليوم</td>
                  <td align="center">1</td>
                  <td align="center">2</td>
                 
                  <td align="center">3</td>
                  <td align="center">4</td>
                  <td align="center">5</td>
                 
                  <td align="center">6</td>
                  <td align="center">7</td>
                  <td align="center">8</td>
                 
                
                </thead>
                <tbody>
                

             <?php  
  
           
   
             
             $yowm[1]="الاحد";
              $yowm[2]="الاثنين";
               $yowm[3]="الثلاثاء";
                $yowm[4]="الاربعاء";
                 $yowm[5]="الخميس";
         
          for ($y = 1; $y <= 5; $y++) {
         
          echo "
                        <tr>
                        
                        <td align=\"center\">".$yowm[$y]."</td>
                        ";
                          for ($h = 1; $h <= 8; $h++) { 
              $fs="fs";
          $z=$z+1;
          $fs=$fs.$z;
        $fsx="n".$z;
        
              
                        
        echo "  
    
 
        <td class=\"dd\" id=\"$fsx\"  style=\" background-color:lavender \"   onclick=\"openTab('$z');\">  
	 <table>
	<td align=\"center\" id=".$fs.">
	
	
	


</td>
	 </table>
	</td>
         ";        
              }
              
             echo "</tr>";
              }
                ?> 
                </tbody>
              </table>


               
                
                
                
                
          	</div>

          	
          	
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>

	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> تعديل</button>
            	
            	</form>

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
            	<h4 class="modal-title"><b><span id="attendance_date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="usr_delete.php">
            		<input type="hidden" id="del_id" name="id">
            		<div class="text-center">
	                	<p>حذف المعلم</p>
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
<script>

function ngl(idm,sf,sfm){
///alert ("hh");
  $.ajax({

  
    type: 'POST',
    url: 'nglm.php',
    data: {sf:sf,idm:idm,sfm:sfm},
    dataType: 'json',
    success: function(response){
 //alert (response);
alert ("تم النقل");
 location.reload();
 }
  });
}

function openTab(sf)
 {
fsx="n"+sf;
//fsx=sf;

var idm= document.getElementById("id_edit").value;

var x = document.getElementsByClassName("dd");
 var t= document.getElementById(fsx);

    if (t.style.backgroundColor=="yellow")
{
var x1 = document.getElementsByClassName("dd");
             for (var i = 0; i < x1.length; i++) {
if (x1[i].style.backgroundColor=="lightblue")
              {
 
 var s1=x1[i].id;
 
         
    z=s1.length ; 
 if (z==2)sfm=s1[1]; 
   
  if (z==3)sfm=s1[1]+s1[2];
  
  ngl(idm,sf,sfm);
exit;

          
          
          


 }
   }            
}          


for (var i = 0; i < x.length; i++) {

////x[i].style = "background-color:yellow";
x[i].style = "background-color:lavender";

 }


  t.style="background-color:lightblue";

 $.ajax({

  
    type: 'POST',
    url: 'tgerm.php',
    data: {idm:idm,sf:sf},
    dataType: 'json',
    success: function(response){
  ///var x=response["zd"];
    for (z in response)
   
   {
   fsx="n"+response[z];


 var t= document.getElementById(fsx);
  t.style="background-color:yellow";
}

///alert (response["zd"]);
}
////undefined
 
 ///nn="fs"+zt2+"n"+zt1;
   
 // alert (nn);
 //var tv= document.getElementById(nn); 
  ///tv.style = "background-color:yellow";
    
    /// alert (xt[0]);
     
 
      
     /// $('#name_edit').val(response.namem);

 
  });


 
}

</script>


     