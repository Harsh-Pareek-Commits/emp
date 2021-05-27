<aside class="main-sidebar " style="background: #2B0D08;
background: -webkit-linear-gradient(top, #2B0D08, #EB2F2C);
background: -moz-linear-gradient(top, #2B0D08, #EB2F2C);
background: linear-gradient(to bottom, #2B0D08, #EB2F2C);">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../images/facebook-profile-image.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
         
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" style="background: #2B0D08;
background: -webkit-linear-gradient(top, #2B0D08, #EB2F2C);
background: -moz-linear-gradient(top, #2B0D08, #EB2F2C);
background: linear-gradient(to bottom, #2B0D08, #EB2F2C);">
        <li style="color: white" >REPORTS</li>
        <li class=""><a href="home.php">Dashboard</a></li>
         <li style="color: white" >MANAGE</li>
        
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
          
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Schedules</a></li>
          </ul>
        </li>
        <li><a href="position.php"><i class="fa fa-file-text"></i> Positions</a></li>
      
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Schedule</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>