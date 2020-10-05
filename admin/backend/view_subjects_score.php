<?php 

   if(isset($_GET['view_subjects_score'])){
      
      $view_subjects_score = $_GET['view_subjects_score'];

      $the_class = $_GET['class'];

      $sql = myQuery("SELECT * FROM access_student_js_1  WHERE id = '$view_subjects_score'");

      while ($row = mysqli_fetch_assoc($sql)) {
        
          $the_name = $row['name'];
          $image = $row['photo'];
      }
   }
 
 ?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><img style="border-radius: 50%;width: 60px;
height: 60px;" src="../students/<?php echo $image ?>" alt="image">&nbsp;&nbsp;<?php echo $the_name ?> | exam score  </p>

        </h3>

       <ul class="nav nav-tabs">
          
          <li class="rolls"><a href="index.php?create_exam_score">Create Exam Score</a></li>
          <li class="rolls"><a href="index.php?view_exam_score">View Students Exam Score</a></li>
        <!--   <li class="rolls"><a href="index.php?mark_sheet">Mark Sheet</a></li> -->
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
          <form action="" method="post">
            
             <p style="float:right;"><input type="text" required="" name="search"><input type="submit" name="submit" value="Search"></p>

          </form>
          
          <thead>
             
              <th>Subject</th>
              <th>Class</th>
              <th>Reg_no</th>
              <th>Exam Total Mark</th>
              <th>Mark Obtain</th>
              <th>Exam Grade</th>
              <th>Remarks</th>
            
              

              
          </thead>
          <tbody>
             
              <?php 
                 
                 $sql = myQuery("SELECT * FROM subject_score WHERE class = '$the_class'");

                 while ($row = mysqli_fetch_assoc($sql)) {
                      $subject = $row['subject'];
                      $total_mark = $row['total_mark'];
                      $mark_obtain = $row['mark_obtain'];
                      $class = $row['class'];
                      $reg_no = $row['reg_no'];
                      $grade = $row['grade'];
                      $remark = $row['remark'];
                     ?>
                      
                       <tr>
                         
                           <td><?php echo $subject ?></td>
                           <td><?php echo $class ?></td>
                           <td><?php echo $reg_no ?></td>
                           <td><?php echo $total_mark ?></td>
                           <td><?php echo $mark_obtain ?></td>
                           <td><?php echo $grade ?></td>
                           <td><?php echo $remark ?></td>


                       </tr>

                     <?php
                 }

               ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

