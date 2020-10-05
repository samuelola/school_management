<?php 

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $session = $_POST['session'];
  $dept = $_POST['dept'];
  $teacher = $_POST['teacher'];

  $errors = [];

  if(empty($name)){
    
     $errors['name'] = 'Name cannot be empty!';
  }

  if(empty($session)){
    
     $errors['session'] = 'Session cannot be empty!';
  }

  if(empty($dept)){
    
     $errors['dept'] = 'Dept cannot be empty!';
  }

  if(empty($teacher)){
    
     $errors['teacher'] = 'Teacher cannot be empty!';
  }

   if(empty($errors)){
      
      $result = myQuery("INSERT INTO access_class (name,session,dept,teacher) VALUES ('$name','$session','$dept','$teacher')");

       confirm($result);

       set_message("Class has been created!");
    
      header("Location:index.php?view_class");
  }
  

  
}

 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Class</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Create Class</a></li>
          <li class="rolls"><a href="index.php?view_class">View Class</a></li>
          
       </ul>
        <?php display_message() ?>
       <div class="row">
           <p class="forgot"><span class="pa">*</span> Required fields</p>
           <form action="" method="post" autocomplete="on" enctype="multipart/form-data">
               <div class="col-sm-3"></div>
               <div class="col-sm-6">

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Class Name<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="name" value="<?php echo isset($name) ? $name : ''?>">
                            <p class="text-danger"><?php echo isset($errors['name']) ? $errors['name'] : '' ?></p>
                       </div>
                   </div>

                   
                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Session<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="session" value="<?php echo isset($session) ? $session : ''?>">
                            <p class="text-danger"><?php echo isset($errors['session']) ? $errors['session'] : '' ?></p>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Department<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="dept" id="">
                               <option value="">--select--</option>
                               <option value="science">Science</option>
                               <option value="Art and Humanities">Art and Humanities</option>
                               <option value="commerce">Commerce</option> 
                           </select>
                            <p class="text-danger"><?php echo isset($errors['dept']) ? $errors['dept'] : '' ?></p>
                       </div>
                   </div>



                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Teacher<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="teacher" id="">
                               <option value="">--select--</option>
                               <option value="Teacher1">Teacher1</option>
                               <option value="Teacher2">Teacher2</option>
                               <option value="Teacher3">Teacher3</option>
                               
                           </select>
                            <p class="text-danger"><?php echo isset($errors['teacher']) ? $errors['teacher'] : '' ?></p>
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

