<!-- Add -->


 $idg = $_GET['id']; 
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>عميل جديد</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="CostDB.php" enctype="multipart/form-data">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="nameal" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">اسم العميل </label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="Phone" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">رقم الجوال </label>

                  	
                </div>
                
                 <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="city" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">المدينة </label>

                  	
                </div>
                
              
                  	
               
                
                
          	 
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
           
 	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> حفظ</button>
 
	</div>

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
            	<form class="form-horizontal" method="POST" action="mmmoedittt.php" enctype="multipart/form-data">
          	<input type="hidden" id="id" name="id">	 
 <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="nameal" name="nameal" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">الاسم</label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="goal" name="Phone" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">الجوال</label>

                  	
                </div>
                
                   <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="email" name="Address" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">الحي السكني </label>

                  	
                </div>
  
                
                
          	 
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
           
 	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> حفظ</button>
 
	</div>

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
            	<h4 class="modal-title"><b><span id="employee_name"></span></b></h4>
          	</div>

          		<div class="modal-body">

            	<form class="form-horizontal" method="POST" action="usr_dmoslgss.php" enctype="multipart/form-data">
          		 <div class="text-center">
	                	<p>حذف العميل</p>
	                	</div>

<input type="hidden" id="idd" name="id">	 
 <div class="form-group">
          		 
          		  <div class="col-sm-9">
 	<h4 class="modal-title"><b><span id="dname"></span></b></h4>

                  
	</div>
                  	<label for="name" class="col-sm-3 control-label">الاسم</label>

                  	
                </div>
                
              
                
                
                
                
                    <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> حذف</button>
            
          	</div>

	</form>


          	</div>
        </div>
    </div>
</div>




<!-- Delete -->
<div class="modal fade" id="deletefff">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span id="attendance_date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="usr_delmsgss.php">
            		<input type="hidden" id="del_id" name="id">
            		<div class="text-center">
	                	<p>حذف الطلب</p>
	             	 	<h4 class="modal-title"><b><span id="del_name"></span></b></h4>


	                	
	                	
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


function nglx(idm,sf,sfm){
////alert ("hh");
  $.ajax({

  
    type: 'POST',
    url: 'nglme.php',
    data: {sf:sf,idm:idm,sfm:sfm},
    dataType: 'json',
    success: function(response){
 //alert (response);
alert ("تم النقل");
 location.reload();
 }
  });
}

function allx()
 {
 var msg= document.getElementById("msg");
var msga= document.getElementById("msga");
var msgaa= document.getElementById("msgaa");
msg.innerHTML="";
 msga.innerHTML="";
 msgaa.innerHTML="";
var x = document.getElementsByClassName("dd");
for (var i = 0; i < x.length; i++) {

////x[i].style = "background-color:yellow";
x[i].style = "background-color:lavender";

 }

}

function openTabx(sf)
 {
fsx1="dn"+sf;
var msg= document.getElementById("msg");
var msga= document.getElementById("msga");
var msgaa= document.getElementById("msgaa");
var idm= document.getElementById("id_editd").value;
var t= document.getElementById(fsx1);
t.style = "background-color:red";
var mf1=msgaa.innerHTML;
if (mf1 <1 )
{
var mf=msg.innerHTML;
if (mf >0 )
{
msgaa.innerHTML=1;
msga.innerHTML=sf;
nglx(idm,sf,mf);
}
else
{
msg.innerHTML=sf;
}


 }
}



/////////////////////
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