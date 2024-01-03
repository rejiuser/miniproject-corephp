
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
          $user=$_SESSION['user'];
          ?>
          <p><?php echo $user;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="viewprofile.php"><i class="fa fa-circle-o"></i> View Profile</a></li>
          <li><a href="viewstudentbooks.php"><i class="fa fa-circle-o"></i> View Books</a></li>
          <li><a href="myrequest.php"><i class="fa fa-circle-o"></i>My Request</a></li>
          <li><a href="approvedrequest.php"><i class="fa fa-circle-o"></i>Approved Request</a></li>
          <li><a href="viewreturn.php"><i class="fa fa-circle-o"></i>View Return</a></li>
          <li><a href="changepasswordform.php"><i class="fa-fa-circle-o"></i>Change Password</a></li>
          <li><a href="logout.php"><i class="fa-fa-circle-o"></i>Logout</a></li>
          </ul>
</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Story</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Novel</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Poem</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i>Education</a></li>
          </ul>
</li>
    </section>
    <!-- /.sidebar -->
  </aside>