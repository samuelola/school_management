<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;Exam Score</p>

        </h3>

       <ul class="nav nav-tabs">
          
          <li class="rolls"><a href="index.php?create_exam_score">Create Exam Score</a></li>
          <li class="active"><a href="index.php?view_exam_score">View Students Exam Score</a></li>
          <!-- <li class="rolls"><a href="index.php?mark_sheet">Mark Sheet</a></li> -->
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
          <!-- <form action="" method="post">
            
             <p style="float:right;"><input type="text" required="" name="search" class="form-control"><input type="submit" name="submit" value="Search"></p>

          </form> -->
          
          <thead>
              <th>Sn</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Reg No</th>
              <th>Class</th>
              <th>Action</th>
            
              

              
          </thead>
          <tbody>
               
               <?php
             
                     $sql = myQuery("SELECT * FROM access_student_js_1");
                         $sn = 0;
                         while($row = mysqli_fetch_assoc($sql)){


                            $sn +=1;
                            $name = $row['name'];
                            $reg_no = $row['reg_no'];
                            $class = $row['class'];
                            $image = $row['photo'];
                            $id = $row['id'];
                         ?>
                         <tr>
                           <td><?php echo $sn ?></td>
                           <td><img width="70" src="../students/<?php echo $image ?>" alt="image1"></td>
                           <td><?php echo $name ?> </td>
                           <td><?php echo $reg_no ?> </td>
                           <td><?php echo $class ?></td>
                          
                        
                           <td><a href="index.php?view_subjects_score=<?php echo $id ?>&class=<?php echo $class ?>" class="btn btn-xs btn-info">View Subjects score</a></td>
                          
                         </tr>

                         <?php


                         }

                ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

