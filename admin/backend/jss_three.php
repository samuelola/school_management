<?php
if(isset($_POST['submit'])){

  $subject_name = $_POST['name'];
  $teacher = $_POST['teacher'];
  $pass_mark = $_POST['pass_mark'];
  $full_mark = $_POST['full_mark'];

  $errors = [];

   if(empty($subject_name)){
    
     $errors['name'] = 'Name cannot be empty!';
  }

  if(empty($teacher)){
    
     $errors['teacher'] = 'teacher cannot be empty!';
  }

  if(empty($pass_mark)){
    
     $errors['pass_mark'] = 'pass_mark cannot be empty!';
  }

  if(empty($full_mark)){
    
     $errors['full_mark'] = 'full_mark cannot be empty!';
  }

  if(empty($errors)){


      $result = myQuery("INSERT INTO access_subject_js_3 (subject,teacher,passmark,fullmark) VALUES ('$subject_name','$teacher','$pass_mark','$full_mark')");

   confirm($result);

   set_message("Subject has been created!");

   header('Location:index.php?view_subject_three');

  }
 


  
}

?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Subject - Jss Three</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Create Subject</a></li>
          <li class="rolls"><a href="index.php?view_subject_three">View Subject</a></li>
          
       </ul>
        <?php display_message() ?>
       <div class="row">
           <p class="forgot"><span class="pa">*</span> Required fields</p>
           <form action="" method="post" autocomplete="on" enctype="multipart/form-data">
               <div class="col-sm-3"></div>
               <div class="col-sm-6">

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Subject Name<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="name"  value="<?php echo isset($subject_name) ? $subject_name : ''?>" >

                            <p class="text-danger"><?php echo isset($errors['name']) ? $errors['name'] : '' ?></p>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Teacher<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="teacher" value="<?php echo isset($teacher) ? $teacher : ''?>">

                              <p class="text-danger"><?php echo isset($errors['teacher']) ? $errors['teacher'] : '' ?></p>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Pass Mark<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="pass_mark" value="<?php echo isset($pass_mark) ? $pass_mark : ''?>">
                           <p class="text-danger"><?php echo isset($errors['pass_mark']) ? $errors['pass_mark'] : '' ?></p>
                       </div>
                   </div>

               

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Full Mark<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="full_mark" value="<?php echo isset($full_mark) ? $full_mark : ''?>">
                           <p class="text-danger"><?php echo isset($errors['full_mark']) ? $errors['full_mark'] : '' ?></p>
                       </div>
                   </div>


                   


                   <div class="row ti">
                       <div class="col-sm-4">
                           
                       </div>
                       <div class="col-sm-8">
                           <input type="submit" class="btn btn-sm btn-info" name="submit" value="Add Subject">
                     
                       </div>
                   </div>


               </div>  

           </form>
       </div>
      
    </div>
</div>