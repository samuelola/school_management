

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp; Show Teacher Attendance</p>
        </h3>

       <ul class="nav nav-tabs">
          
         <li class="rolls"><a href="index.php?take-teacher-attendance">Teacher Attendance</a></li> 
         <li class="rolls"><a href="index.php?all-teacher-attendance">View Attendance</a></li>
         
       </ul>

      <div class="row">
           <b><p class="text-center">Date : <?php display_teacher_date() ?></p></b>
           
       </div>
 
      <form action="" method="post">
          
          <table class="table table-striped table-condensed table-responsive">
              <thead>
                  <tr>
                      <th>Sn</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Attendance</th>
                      
                  </tr>
              </thead>

              <tbody>

               <?php 

                 
                     if(isset($_GET['view_attendance_teacher_date'])){
                        $sn = 0;
                        $attendance_date = $_GET['view_attendance_teacher_date'];

                        $sql = myQuery("SELECT * FROM access_teacher INNER JOIN teacher_attendance ON access_teacher.id = teacher_attendance.id WHERE attend_date = '$attendance_date' ");

                        while ($row = mysqli_fetch_assoc($sql)) {
                          
                           $sn +=1;
                           $name = $row['name'];
                           $email = $row['email'];
                           $image = $row['image'];
                           $value = $row['value'];
                 
                          ?>
                          <tr>
                              <td><?php echo $sn ?></td>
                              <td><img width="70" src="../pictures/<?php echo $image ?>" alt="image1"></td>
                              <td><?php echo $name ?></td>
                              <td><?php echo $email ?></td>
                              <td>
                                  Present <input type="radio" value="Present"

                                   <?php 
                                     
                                     if($value == 'Present'){
                                        echo 'checked';
                                        
                                     }

                                    ?>

                                  >&nbsp; &nbsp; 

                                  Absent <input type="radio"  value="Absent"

                                    <?php 
                                      
                                      if($value == 'Absent'){
                                         echo 'checked';
                                      }

                                     ?>

                                  >

                              </td>
                          </tr>

                          <?php
                         
                        }
                     }

                ?>

                  
              </tbody>
          </table>
           

           <!-- <input type="submit" name="add_attendance" class="btn btn-success" value="Take Attendance"> -->
      </form>
      
      
    </div>
</div>
<!-- /.row -->