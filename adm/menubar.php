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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">تحكم  </li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>لوحة التحكم</span></a></li>
        <li class="header"> الصفحات </li>
        
        <li><a href="members.php"><i class="material-icons">group</i> <span>الاعضاء</span></a></li>
       <li><a href="consultant.php"><i class="material-icons">group</i> <span>المستشارين</span></a></li>

        <li><a href='appointment.php'><i class='material-icons'  >content_paste</i> <span>المواعيد</span></a></li>
                 
      
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>