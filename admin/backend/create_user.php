<?php 

if(isset($_POST['create'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $role = $_POST['role'];
  $image = $_FILES['picture']['name'];
  $image_tmp = $_FILES['picture']['tmp_name'];
  $gender = $_POST['gender'];
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

  if(empty($gender)){
    
     $errors['gender'] = 'Gender cannot be empty!';
  }

  if(empty($role)){
    
     $errors['role'] = 'Role cannot be empty!';
  }


  if(empty($image)){
    
     $errors['picture'] = 'Picture cannot be empty!';
  }

  if(empty($errors)){
   
     move_uploaded_file($image_tmp,"../pictures/$image");

     $result = myQuery("INSERT INTO users (user_name,user_email,user_password,user_role,image,phone,gender,created_at) VALUES ('$name','$email','$pass_hash','$role','$image','$phone','$gender',NOW()) ");

      confirm($result);

      set_message("User has been created!");

      
      header("Location:index.php?view_users");
  }
  

  
}

 ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Users</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Administrator | Create Users</a></li>
          <!--<li><a href="#">Activity</a></li>
          <li><a href="#">Liked Pages</a></li>-->
       </ul>

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
                             <input type="text" class="form-control" name="email" value="<?php echo isset($email) ? $email : ''?>" >
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
                             <label for="">Gender<span class="pa">*</span></label>
                         </div>
                         <div class="col-sm-8">
                             <select name="gender" id="" >
                                 <option value="">--select--</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option> 
                             </select>
                             <p class="text-danger"><?php echo isset($errors['gender']) ? $errors['gender'] : '' ?></p>
                         </div> 
                     </div>


                      <div class="row">
                         <div class="col-sm-4">
                             <label for="">Role<span class="pa">*</span></label>
                         </div>
                         <div class="col-sm-8">
                             <select name="role" id="" >
                                <option value="">--select--</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>

                             </select>
                             <p class="text-danger"><?php echo isset($errors['role']) ? $errors['role'] : '' ?></p>
                         </div>
                     </div>

                     

                      <div class="row">
                         <div class="col-sm-4">
                             <label for="">Photo<span class="pa">*</span></label>
                         </div>
                         <div class="col-sm-8">
                             
                             <input type="file" name="picture" class="form-control" >
                             <p class="text-danger"><?php echo isset($errors['picture']) ? $errors['picture'] : '' ?></p>
                         </div>
                     </div>


                     <div class="row ti">
                         <div class="col-sm-4">
                             
                         </div>
                         <div class="col-sm-8">
                             <input type="submit" class="btn btn-sm btn-info" name="create" value="Submit">
                             
                         </div>
                     </div>


                 </div>  

             </form>
       </div>
      
    </div>
</div>
<!-- /.row -->

