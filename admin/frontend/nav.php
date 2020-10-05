<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
         
          <img  src="../images/newas.jpg" alt="image">
            <p class="noon">Access College</p>


        </a>
       
    </div>


    <!-- Top Menu Items -->
    <ul class="nav navbar-top-links navbar-right">
       
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : $_SESSION['user_name']='' ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <!-- <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li> -->
                <li>
                    <a href="Index.php?admin_settings=1"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    
      <?php include "frontend/sidebar.php" ?>
    <!-- /.navbar-collapse -->
</nav>