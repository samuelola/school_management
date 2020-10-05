<?php 

  if(isset($_GET['edit_exam_grade'])){

    $grade_id = $_GET['edit_exam_grade'];
     
     $sql = myQuery("SELECT * FROM exam_grade WHERE id = '$grade_id'");
     
      
     while($row = mysqli_fetch_assoc($sql)){

       $grade = $row['grade'];
       $m_from = $row['m_from'];
       $m_to = $row['m_to'];
       
     }

     if(isset($_POST['update'])){

       $grade = $_POST['grade'];
       $m_from = $_POST['m_from'];
       $m_to = $_POST['m_to'];
     

       $resultme = myQuery("UPDATE exam_grade SET grade = '$grade', m_from= '$m_from',m_to='$m_to' WHERE id = '$grade_id'");

       confirm($resultme);

       echo "<script>alert('Grade has been updated!')</script>";

       header("Location:index.php?view_exam_grade");

       
     }
     
  }



 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Exam Grade</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Create Exam Grade</a></li>
          <li class="rolls"><a href="index.php?view_exam_grade">View Exam Grade</a></li>
          
       </ul>
        <?php display_message() ?>
       <div class="row">
           <p class="forgot"><span class="pa">*</span> Required fields</p>
           <form action="" method="post" autocomplete="on" enctype="multipart/form-data">
               <div class="col-sm-3"></div>
               <div class="col-sm-6">

                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Exam Grade<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="grade" id="">
                               <?php 
                                   
                                   if($grade == 'C'){
                                      
                                      echo "<option selected value='C'>C</option>";
                                   }
                                   else{

                                      ?><option value="C">C</option><?php
                                   }

                                    if($grade == 'B'){
                                      
                                      echo "<option selected value='B'>B</option>";
                                   }
                                   else{

                                      ?><option value="B">B</option><?php
                                   }

                                    if($grade == 'A'){
                                      
                                      echo "<option selected value='A'>A</option>";
                                   }
                                   else{

                                      ?><option value="A">A</option><?php
                                   }

                                    if($grade == 'D'){
                                      
                                      echo "<option selected value='D'>D</option>";
                                   }
                                   else{

                                      ?><option value="D">D</option><?php
                                   }

                                    if($grade == 'E'){
                                      
                                      echo "<option selected value='E'>E</option>";
                                   }
                                   else{

                                      ?><option value="E">E</option><?php
                                   }

                                    if($grade == 'F'){
                                      
                                      echo "<option selected value='F'>F</option>";
                                   }
                                   else{

                                      ?><option  value="F">F</option><?php
                                   }

                                ?> 
                           </select>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Mark From<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="m_from" value="<?php echo $m_from ?>">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Mark To<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="m_to" value="<?php echo $m_to ?>">
                       </div>
                   </div>
        

                   <div class="row ti">
                       <div class="col-sm-4">
                           
                       </div>
                       <div class="col-sm-8">
                           <input type="submit" class="btn btn-sm btn-info" name="update" value="Update">
                     
                       </div>
                   </div>


               </div>  

           </form>
       </div>
      
    </div>
</div>
<!-- /.row -->

