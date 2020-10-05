<?php 
   
   if(isset($_GET['create_subject_score'])){
        
        $create_subject_score = $_GET['create_subject_score'];

        $result = myQuery("SELECT * FROM access_student_js_1 WHERE class = ' $create_subject_score'");

        while($row = mysqli_fetch_assoc($result)){
           
           $name = $row['name'];
           $reg_no = $row['reg_no'];
           $class = $row['class'];
        }
   }

 ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;Create JSS Exam Score</p>

        </h3>

       <ul class="nav nav-tabs">
          
          <li class="active"><a href="index.php?create_subject_score">Create Exam Score</a></li>
          <li class="rolls"><a href="index.php?view_exam_score">View Exam Score</a></li>
          <li class="rolls"><a href="index.php?mark_sheet">Mark Sheet</a></li>
         
       </ul>

       <?php display_message(); ?>


        <?php 

           if(isset($_POST['create_score'])){
             
               $name = $_POST['name'];
               $reg_no = $_POST['reg_no'];
               $total_mark = $_POST['total_mark'];
               $mark_obtain = $_POST['mark_obtain'];
               $grade = $_POST['grade'];
               $subject = $_POST['subject'];
               $class = $_POST['class'];
               $remark = $_POST['remark'];

               $the_insert = myQuery("INSERT INTO subject_score (name,reg_no,total_mark,mark_obtain,grade,remark,subject,class) VALUES ('$name','$reg_no','$total_mark','$mark_obtain','$grade','$remark','$subject','$class')");

               if($the_insert){

                   echo "<script>alert('Subject Score inserted Successfully!')</script>";
               }
               else{

                   echo "Error".mysqli_error($conn).$the_insert;
               }
           }

         ?>


        <form action="" method="post">
    

       <table class="table table-responsive table-striped">
         

       
          
          <thead>
              
              <th>Subjects</th>
              <th>Name</th>
              <th>Reg No</th>
              <th>Class</th>
              <th>Total Mark</th>
              <th>Mark Obtain</th>
              <th>Grade</th>
              <th>Remarks</th>
              

              
          </thead>
          <tbody>
               
              <tr>
                <td>
                  <select name="subject" id="">
                    <option value="Mathematics">Mathematics</option>
                    <option value="English">English</option>
                    <option value="H.Econs">H.Econs</option>
                    <option value="Basic Sc">Basic Sc</option>
                  </select>
                </td>
                <td><input class="form-control" type="text" readonly="" name="name" value="<?php echo $name ?>"></td>
                <td><input class="form-control" type="text" readonly="" name="reg_no" value="<?php echo $reg_no ?>"></td>
                <td><input class="form-control" type="text" readonly="" name="class" value="<?php echo $class ?>"></td>
                <td><input type="text" value="100" class="form-control" name="total_mark"></td>
                <td><input type="text" value="100" class="form-control" name="mark_obtain"></td>
                <td>
                    <select name="grade" id="">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                      <option value="F">F</option>
                    </select>
                </td>
                <td><input type="text" class="form-control" name="remark"></td>
              </tr> 
              
          </tbody>
       </table>
            <p><input type="submit" name="create_score" value="Create" class="btn btn-primary"></p>
         </form>


    </div>
</div>
<!-- /.row -->

