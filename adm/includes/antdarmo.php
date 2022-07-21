<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>اضافةانتظار</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="antdar_add.php">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="name" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">الانتظارات</label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
          		  <select size="1" class="form-control" id="employee" name="sf">
	<option  value=1>اول ابتدائي</option>
	<option  value=2>ثاني ابتدائي</option>
	<option  value=3>ثالث ابتدائي</option>
	<option  value=4>رابع ابتدائي</option>
	<option  value=5>خامس ابتدائي</option>
	<option  value=6>سادس ابتدائي</option>
	<option  value=7>اول متوسط</option>
	<option  value=8>ثاني متوسط</option>
	<option  value=9>ثالث متوسط</option>
	<option  value=10>اول ثانوي</option>
	<option  value=11>ثاني ثانوي</option>
	<option  value=12>ثالث ثانوي</option>
	</select>

                  	</div>
                  	<label for="sf" class="col-sm-3 control-label">انتظار</label>

                  	
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
            	<form class="form-horizontal" method="POST" action="antdar_edit.php">
            	
            	<input type="hidden" id="id_edit" name="id">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
          		  <input type="hidden" id="sgl_editv" name="sf">
          		  <h2  id="sgl_edit" class="bold"></h2>
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">انتظار</label>

                  	
                </div>
                <div class="form-group">
          		  
          		    <div class="col-sm-9">
          		    <input type="text" id="name_edit" name="name">
          		
</div>
<label for="sf" class="col-sm-3 control-label">انتظار</label> 	
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
        
              
                        
        echo "     
	<td align=\"center\" id=".$fs."></td>
         ";        
              }
              
             echo "</tr>
             
             
             ";
              }
               echo "</tr>

              <td align=\"center\" id=\"x1\"></td>
               ";

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
            	<form class="form-horizontal" method="POST" action="antdar_delete.php">
            		<input type="hidden" id="del_id" name="id">
            		<div class="text-center">
	                	<p>حذف الانتظار</p>
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


     