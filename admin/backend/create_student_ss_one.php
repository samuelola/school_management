<?php 

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $parent =$_POST['parent'];
  $reg_no = $_POST['reg_no'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $join_date = $_POST['join_date'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $class = $_POST['class'];
  $section = $_POST['section'];
  $dept = $_POST['dept'];
  $image = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];
  $class = $_POST['class'];
  
  $pass_hash = password_hash($password, PASSWORD_BCRYPT , ['cost'=>12]);

   $errors = [];

  if(empty($name)){
    
     $errors['name'] = 'Name cannot be empty!';
  }

  if(empty($email)){
    
     $errors['email'] = 'Email cannot be empty!';
  }

  if(empty($password)){
    
     $errors['password'] = 'Password cannot be empty!';
  }

  if(empty($phone)){
    
     $errors['phone'] = 'Phone cannot be empty!';
  }

  if(empty($parent)){
    
     $errors['parent'] = 'Parent cannot be empty!';
  }

  if(empty($reg_no)){
    
     $errors['reg_no'] = 'Reg_no cannot be empty!';
  }


  if(empty($phone)){
    
     $errors['phone'] = 'Phone cannot be empty!';
  }

   if(empty($dob)){
    
     $errors['dob'] = 'Dob cannot be empty!';
  }

   if(empty($join_date)){
    
     $errors['join_date'] = 'Join  cannot be empty!';
  }


   if(empty($gender)){
    
     $errors['gender'] = 'Gender  cannot be empty!';
  }

    if(empty($address)){
    
     $errors['address'] = 'Address  cannot be empty!';
  }


    if(empty($class)){
    
     $errors['class'] = 'Class  cannot be empty!';
  }

    if(empty($section)){
    
     $errors['section'] = 'Section  cannot be empty!';
  }


    if(empty($dept)){
    
     $errors['dept'] = 'Dept  cannot be empty!';
  }

    if(empty($image)){
    
     $errors['image'] = 'Image cannot be empty!';
  }



  if(empty($errors)){

     move_uploaded_file($image_temp,"../students/$image"); 

     $result = myQuery("INSERT INTO access_student_ss_1 (name,email,password,parent,reg_no,dept,phone,dob,join_date,gender,address,class,section,photo) VALUES ('$name','$email','$pass_hash','$parent','$reg_no','$dept','$phone','$dob','$join_date','$gender','$address','$class','$section','$image')");

      confirm($result);

      set_message("Student has been created!");

      header("Location:index.php?view_students_ss_one");

  }


  
}

 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Student SSS</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Create Student</a></li>
          <li class="rolls"><a href="index.php?view_students_ss_one">View Student</a></li>
          
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
                           <label for="">Address<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="address" value="<?php echo isset($address) ? $address : ''?>">
                            <p class="text-danger"><?php echo isset($errors['address']) ? $errors['address'] : '' ?></p>
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
                               <option value="Male">Male</option>
                               <option value="Female">Female</option> 
                           </select>
                            <p class="text-danger"><?php echo isset($errors['gender']) ? $errors['gender'] : '' ?></p>
                       </div>
                   </div>

                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Reg No<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="reg_no" value="<?php echo isset($reg_no) ? $reg_no : ''?>">
                            <p class="text-danger"><?php echo isset($errors['reg_no']) ? $errors['reg_no'] : '' ?></p>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Joined Date<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="date" class="form-control" name="join_date" value="<?php echo isset($join_date) ? $join_date : ''?>">
                            <p class="text-danger"><?php echo isset($errors['join_date']) ? $errors['join_date'] : '' ?></p>
                       </div>
                   </div>



                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Parent<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="parent" value="<?php echo isset($parent) ? $parent : ''?>">
                            <p class="text-danger"><?php echo isset($errors['parent']) ? $errors['parent'] : '' ?></p>
                       </div>
                   </div> 


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Department<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="dept" id="">
                               <option value="">--select--</option>
                               <option value="Science">Science</option>
                               <option value="Art and Humanities">Art and Humanities</option>
                               <option value="Commerce">Commerce</option> 
                           </select>
                            <p class="text-danger"><?php echo isset($errors['dept']) ? $errors['dept'] : '' ?></p>
                       </div>
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
                           <label for="">Class<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="class" id="">
                               <option value="">--select--</option>
                               <option value="Jss one">Jss one</option>
                               <option value="Jss two">Jss two</option>
                               <option value="Jss three">Jss three</option>
                               <option value="Sss One">Sss One</option>
                               <option value="Sss two ">Sss two</option> 
                               <option value="Sss three">Sss three</option>
                           </select>
                            <p class="text-danger"><?php echo isset($errors['class']) ? $errors['class'] : '' ?></p>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Section<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="section" id="">
                               <option value="">--select--</option>
                               <option value="2018/2019">2018/2019</option>
                               <option value="2019/2020">2019/2020</option>     
                           </select>
                            <p class="text-danger"><?php echo isset($errors['section']) ? $errors['section'] : '' ?></p>
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

