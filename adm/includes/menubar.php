<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> متصل</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">التحكم</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>لوحة القيادة</span></a></li>
        <li class="header">البيانات الاساسية</li>
        
        <li><a href="malmen.php"><i class="fa fa-graduation-cap"></i> <span>المعلمين</span></a></li>
       <li><a href="tlab.php"><i class="fa fa-user"></i> <span>الطلاب</span></a></li>

 
        <li><a href="fsol.php"><i class="fa fa-pie-chart"></i> <span>الفصول</span></a></li>
              <li><a href="moad.php"><i class="fa fa-book"></i> <span>المواد</span></a></li>

      
      <li class="header">الجدول المدرسي</li>
 <li><a href="rbt.php"><i class="	fa fa-asl-interpreting"></i> <span>ربط المواد</span></a></li>
 <li><a href="gdol.php"><i class="fa fa-calendar"></i> <span>الجدول المدرسي</span></a></li>
   <li><a href="tadel.php"><i class="fa fa-calendar"></i> <span>تعديل الجدول</span></a></li>
   <li><a href="antdarl.php"><i class="fa fa-calendar"></i> <span>جدول الانتظار</span></a></li>


  
  <li class="header">بيانات الموقع</li>
 <li><a href="akhbar.php"><i class="fa fa-file-audio-o"></i> <span>الاخبار</span></a></li>
 <li><a href="nshat.php"><i class="fa fa-camera-retro"></i> <span>الانشطه</span></a></li>
 <li><a href="zoar.php"><i class="fa fa-envelope-o"></i> <span>سجل الزوار</span></a></li>



      
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>