<header class="main-header">
    <!-- Logo -->
    
    <a href="https://ela.sa" class="logo"  width="110" height="45" >
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> <img src="img/llogo.png" alt="Team Image"  width="110" height="45" >  </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->


    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >
        <span class="sr-only">لوحة التحكم</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="logout.php"  >
              
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
           

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
               
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
          
                </div>
                <div class="pull-right"> 
                  <a href="logout.php" class="btn btn-default btn-flat">تسجيل الخروج</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php include 'includes/profile_modal.php'; ?>