<?php 

  take_teacher_attendance();
 ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Take Teacher Attendance</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="index.php?take-teacher-attendance">Take Teacher Attendance</a></li>
         <li class="rolls"><a href="index.php?all-teacher-attendance">View Attendance</a></li>
        <!--  <li class="rolls"><a href="index.php?add_attendance_teacher">Add Teacher</a></li> -->
       </ul>

      

 
      <form action="" method="post">
          
          <table class="table table-striped table-condensed table-responsive">
              <thead>
                  <tr>
                      <th>Sn</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Attendance</th>
                      
                  </tr>
              </thead>

              <tbody>
                  <?php emp() ?>

                  
              </tbody>
          </table>
           <button class="btn btn-success" name="add_attendance">Add Attendance</button>

           <!-- <input type="submit" name="add_attendance" class="btn btn-success" value="Take Attendance"> -->
      </form>
      
      
    </div>
</div>
<!-- /.row -->