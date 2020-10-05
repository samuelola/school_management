<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
  
              
             
             <?php 

             if(isset($_SESSION['user_id']) && $_SESSION['user_role'] == 'admin'){

              ?>

                <li>
                    <a id="admin" href="index.php?admin_dashboard"><i class="fa fa-dashboard fa-fw"></i>Admin Dashboard</a>
                </li>


              <li>
                <a href="#"><i class="fa fa-fw fa-user"></i>Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    
                    <li>
                         <a id="admin" href="index.php?create_user">Create User</a>
                    </li>

                    <li>
                        <a id="admin" href="index.php?view_users">View All Users</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>


           

               <?php


              }

             ?> 

              <li>
                <a href="#"><i class="fa fa-fw fa-user"></i>Profile<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                         <a href="index.php?profile">My Profile</a>
                    </li>

                    <li>
                        <a href="index.php?reset_password">Reset Password</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>



            <li>
                <a href="index.php?create_teacher"><i class="fa fa-fw fa-bar-chart-o"></i>Teacher</a>
            </li>

            <li>
               <a href="index.php?create_class"><i class="fa fa-fw fa-table"></i>Class</a>
           </li>
                   


            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>TimeTable <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                         <a href="index.php?jss-time-table">JSS</a>
                    </li>

                    <li>
                        <a href="index.php?sss-time-table">SSS</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Subject<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    
                <li>
                    <a href="index.php?jss_one">Jss One</a>
                </li>
                <li>
                    <a href="index.php?jss_two">Jss Two</a>
                </li>
                <li>
                    <a href="index.php?jss_three">Jss Three</a>
                </li>
                <li>
                    <a href="index.php?sss_one">Sss One</a>
                </li>
                <li>
                    <a href="index.php?sss_two">Sss Two</a>
                </li>
                <li>
                    <a href="index.php?sss_three">Sss Three</a>
                </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>







            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Attendance<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a id="attendance" href="index.php?take-teacher-attendance">Teacher Attendance</a>
                    </li>
                    <li>
                        <a id="attendance" href="index.php?take-student-attendance">Student Attendance</a>
                    </li>
                    <li>
                        <a id="attendance" href="index.php?take-employee-attendance">Employee Attendance</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
           <!--  <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li> -->
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Students<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                       <li>
                           <a href="index.php?create_student_js_one">Jss </a>
                       </li>
                       <li>
                           <a href="index.php?create_student_ss_one">SSS</a>
                       </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Exam<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a id="exam" href="index.php?exam_term">Exam Term</a>
                    </li>
                    <li>
                        <a id="exam" href="index.php?create_exam_grade">Exam Grade</a>
                    </li>
                    <li>
                        <a id="exam" href="index.php?take-exam-attendance">Exam Attendance</a>
                    </li>
                    <li>
                        <a id="exam" href="index.php?view_exam_score">Exam Score</a>
                    </li>
                    
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>

            
            <!-- <li class="active">
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="active" href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                
            </li> -->

            <li>
               <a href="index.php?create_employee"><i class="fa fa-fw fa-wrench"></i>Employee</a>
           </li>

            <li>
               <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
           </li>

        </ul>


    </div>
    <!-- /.sidebar-collapse -->
</div>