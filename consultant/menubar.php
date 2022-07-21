<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
         
        </div>
      </div>
      <?php $ids=$_GET['id']; 
      
      $home="home.php?id=".$ids ; 
            $myappointment="myapp.php?id=".$ids ; 
      $profile="profile.php?id=".$ids ; 
      $appointment="appointment.php?id=".$ids ;

      
      
      ?>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">تحكم  </li>
        <li class=""><a href=<?php echo $home ; ?> ><i class="fa fa-dashboard"></i> <span>لوحة التحكم</span></a></li>
        <li class="header"> الصفحات </li>
        
        <li><a href=<?php echo $myappointment; ?>><i class="material-icons">group</i> <span>ادارة الجلسات</span></a></li>
       <li><a href=<?php echo $profile ; ?>><i class="material-icons">group</i> <span>ادارة الملف الشخصي</span></a></li>
       <li><a href=<?php echo $appointment; ?>><i class="material-icons">group</i> <span>المواعيد المحجوزة</span></a></li>


      
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>