<?php 

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $join_date = $_POST['join_date'];
  $gender = $_POST['gender'];
  $image = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];
  $grade = $_POST['grade'];
  $pass_hash = password_hash($password, PASSWORD_BCRYPT , ['cost'=>12]);

  $errors = [];

  if(empty($name)){
    
     $errors['name'] = 'Name cannot be empty!';
  }

  if(empty($email)){
    
     $errors['email'] = 'Email cannot be empty!';
  }

   if(empty($phone)){
    
     $errors['phone'] = 'Phone cannot be empty!';
  }

  if(empty($password)){
    
     $errors['password'] = 'Password cannot be empty!';
  }

  if(empty($dob)){
    
     $errors['dob'] = 'Dob cannot be empty!';
  }

  if(empty($join_date)){
    
     $errors['join_date'] = 'joined date cannot be empty!';
  }

  if(empty($gender)){
    
     $errors['gender'] = 'Gender cannot be empty!';
  }


   if(empty($grade)){
    
     $errors['grade'] = 'Grade cannot be empty!';
  }


  if(empty($image)){
    
     $errors['image'] = 'Image cannot be empty!';
  }


    if(empty($errors)){

      move_uploaded_file($image_temp,"../pictures/$image");
  
   
      $result = myQuery("INSERT INTO access_teacher (name,email,password,phone,dob,join_date,gender,image,grade) VALUES ('$name','$email','$pass_hash','$phone','$dob','$join_date','$gender','$image','$grade')");

       confirm($result);

       set_message("Teacher has been created!");
    
       header("Location:index.php?view_teachers");
  }

  
}

 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Teacher</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Create Teacher</a></li>
          <li class="rolls"><a href="index.php?view_teachers">View Teacher</a></li>
          
       </ul>
        <?php display_message() ?>
       <div class="row">
           <p class="forgot"><span class="pa">*</span> Required fields</p>
           <form action="" method="post" autocomplete="on" enctype="multipart/form-data">
               <div class="col-sm-3"></div>
               <div class="col-sm-6">

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Name<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="name" value="<?php echo isset($name) ? $name : ''?>">
                            <p class="text-danger"><?php echo isset($errors['name']) ? $errors['name'] : '' ?></p>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Email<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="email" class="form-control" name="email" value="<?php echo isset($email) ? $email : ''?>">
                            <p class="text-danger"><?php echo isset($errors['email']) ? $errors['email'] : '' ?></p>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Password<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="password" class="form-control" name="password">
                            <p class="text-danger"><?php echo isset($errors['password']) ? $errors['password'] : '' ?></p>
                       </div>
                   </div>

               

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Phone<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="phone" value="<?php echo isset($phone) ? $phone : ''?>">

                            <p class="text-danger"><?php echo isset($errors['phone']) ? $errors['phone'] : '' ?></p>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">D.O.B<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="date" class="form-control" name="dob" value="<?php echo isset($dob) ? $dob : ''?>">
                            <p class="text-danger"><?php echo isset($errors['dob']) ? $errors['dob'] : '' ?></p>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Gender<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="gender" id="">
                               <option value="">--select--</option>
                               <option value="male">Male</option>
                               <option value="female">Female</option> 
                           </select>
                            <p class="text-danger"><?php echo isset($errors['gender']) ? $errors['gender'] : '' ?></p>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Joined Date<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="date" class="form-control" name="join_date">
                       </div>
                        <p class="text-danger"><?php echo isset($errors['joined_date']) ? $errors['joined_date'] : '' ?></p>
                   </div>

                   

                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Photo<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="file" class="form-control" name="image">
                            <p class="text-danger"><?php echo isset($errors['image']) ? $errors['image'] : '' ?></p>
                       </div>
                       
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Salary Grade<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="grade" id="">
                               <option value="">--select--</option>
                               <option value="Grade A">Grade A</option>
                               <option value="Grade B">Grade B</option>
                               <option value="Grade C">Grade C</option>
                               <option value="Grade D">Grade D</option>
                               <option value="Grade E">Grade E</option> 
                           </select>
                            <p class="text-danger"><?php echo isset($errors['grade']) ? $errors['grade'] : '' ?></p>
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

