<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>اضافة عضو</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="attendance_add.php">
          		  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="name" >
                  	</div>
                  	<label for="name" class="col-sm-3 control-label">العضو</label>

                  	
                </div>
                <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="sgl" >
                  	</div>
                  	<label for="sgl" class="col-sm-3 control-label">السجل</label>

                  	
                </div>

                
               <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="goal" >
                  	</div>
                  	<label for="goal" class="col-sm-3 control-label">الجوال</label>

                  	
                </div>

                 <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="mdenh" >
                  	</div>
                  	<label for="mdenh" class="col-sm-3 control-label">ملاحظات</label>

                  	
                </div>

                
                
                
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
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
            	<form class="form-horizontal" method="POST" action="attendance_edit.php">
            	
            	<input type="hidden" id="id_edit" name="id">
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
                  	<label for="sgl" class="col-sm-3 control-label">السجل</label>

                  	
                </div>

                
               <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="goal_edit" name="goal" >
                  	</div>
                  	<label for="goal" class="col-sm-3 control-label">الجوال</label>

                  	
                </div>

                 <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="mdenh_edi" name="mdenh" >
                  	</div>
                  	<label for="mdenh" class="col-sm-3 control-label">ملاحظات</label>

                  	
                </div>

                
                
                
                
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
            	<form class="form-horizontal" method="POST" action="attendance_delete.php">
            		<input type="hidden" id="del_id" name="id">
            		<div class="text-center">
	                	<p>حذف الممول</p>
	                	<h2 id="del_name" class="bold"></h2>
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


     