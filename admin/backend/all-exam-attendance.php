<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Attendance</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="rolls"><a href="index.php?take-student-attendance">Student Attendance</a></li>
         <li class="active"><a href="#">View Attendance</a></li>
        <!--  <li class="rolls"><a href="index.php?add_attendance_teacher">Add Teacher</a></li> -->
       </ul>

     

  <?php 

    
   ?>
      <form action="" method="post">
          
          <table class="table table-striped table-condensed table-responsive">
              <thead>
                  <tr>
                      <th>Sn</th>
                      <th>Date</th>
                      <th>Action</th>
                      
                      
                  </tr>
              </thead>

              <tbody>
                  
                <?php view_all_exam_attendance() ?>
                
                  
              </tbody>
          </table>
          
      </form>
      
      
    </div>
</div>
<!-- /.row -->