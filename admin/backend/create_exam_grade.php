<?php 

if(isset($_POST['submit'])){

  $grade = $_POST['grade'];
  $m_from = $_POST['m_from'];
  $m_to = $_POST['m_to'];

  $errors = [];

  if(empty($grade)){
    
     $errors['grade'] = 'This field cannot be empty!';
  }

  if(empty($m_from)){
    
     $errors['m_from'] = 'This field cannot be empty!';
  }

  if(empty($m_to)){
    
     $errors['m_to'] = 'This field cannot be empty!';
  }


  if(empty($errors)){

    $result = myQuery("INSERT INTO exam_grade (m_from,m_to,grade) VALUES ('$m_from','$m_to','$grade')");

     confirm($result);

     set_message("Exam grade has been created!");

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
                               <option value="">--select--</option>
                               <option value="A">A</option>
                               <option value="B">B</option>
                               <option value="C">C</option>
                               <option value="D">D</option>
                               <option value="E">E</option> 
                               <option value="F">F</option> 
                           </select>

                              <p class="text-danger"><?php echo isset($errors['grade']) ? $errors['grade'] : '' ?></p>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Mark From<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="m_from" value="<?php echo isset($m_from) ?$m_from : ''?>">
                             <p class="text-danger"><?php echo isset($errors['m_from']) ? $errors['m_from'] : '' ?></p>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Mark To<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="m_to" value="<?php echo isset($m_to) ?$m_to : ''?>">
                            <p class="text-danger"><?php echo isset($errors['m_to']) ? $errors['m_to'] : '' ?></p>
                       </div>
                   </div>
        

                   <div class="row ti">
                       <div class="col-sm-4">
                           
                       </div>
                       <div class="col-sm-8">
                           <input type="submit" class="btn btn-sm btn-info" name="submit" value="Submit">
                     
                       </div>
                   </div>


               </div>  

           </form>
       </div>
      
    </div>
</div>
<!-- /.row -->

