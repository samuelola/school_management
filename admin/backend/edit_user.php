<?php 

  if(isset($_GET['edit_user'])){

    $user_id = $_GET['edit_user'];
     
     $sql = myQuery("SELECT * FROM users WHERE id = '$user_id'");
     
      
     while($row = mysqli_fetch_assoc($sql)){

       $name = $row['user_name'];
       $email = $row['user_email'];
       $password = $row['user_password'];
       $image = $row['image'];
       $phone = $row['phone'];
      


     }

     if(isset($_POST['update'])){

       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $phone = $_POST['phone'];
       $role = $_POST['role'];
       $image = $_FILES['picture']['name'];
       $image_tmp = $_FILES['picture']['tmp_name'];
       $gender = $_POST['gender'];
       $pass_hash = password_hash($password, PASSWORD_BCRYPT , ['cost'=>12]);


       move_uploaded_file($image_tmp,"../pictures/$image");

       if(empty($image)){
          
           $result3 = myQuery("SELECT * FROM users WHERE id= '$user_id'");

           while($roe = mysqli_fetch_assoc($result3)){
             
               $image = $roe['image'];
           }
       }

        if(empty($password)){
          
           $result3 = myQuery("SELECT * FROM users WHERE id= '$user_id'");

           while($roe = mysqli_fetch_assoc($result3)){
             
               $the_pass = $roe['user_password'];
           }

           $result = myQuery("UPDATE users SET user_name = '$name',user_email='$email',user_password='$the_pass',user_role='$role',image ='$image',phone='$phone',gender='$gender',created_at = NOW() WHERE id = '$user_id'");

        confirm($result);

        set_message("User has been updated!");

        header("Location:index.php?view_users");


       }
       else{

          $result = myQuery("UPDATE users SET user_name = '$name',user_email='$email',user_password='$pass_hash',user_role='$role',image ='$image',phone='$phone',gender='$gender',created_at = NOW() WHERE id = '$user_id'");

           confirm($result);

           set_message("User has been updated!");

           header("Location:index.php?view_users");
       }
       
      
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
          <li class="active"><a href="#">Administrator | Edit Users</a></li>
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
                           <label for="">Username<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Email<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Password<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="password" class="form-control" name="password">
                       </div>
                   </div>

               

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Phone<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Gender<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="gender" id="">
                               <?php 
                                 
                                 $result = myQuery("SELECT * FROM users");

                                 while ($rowme = mysqli_fetch_assoc($result)) {
                                   
                                    $id = $rowme['id'];
                                    $user_gender = $rowme['gender'];


                                    if($id == $user_id){
                                     
                                       echo " <option selected value='$user_gender'>$user_gender</option>";
                                    }
                                    else{

                                        echo " <option value='$user_gender'>$user_gender</option>";
                                    }
                                 }

                               

                                ?>
                              
                               
                           </select>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Role<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="role" id="">
                               <?php 
                                 
                                 $result = myQuery("SELECT * FROM users");

                                 while ($rowme = mysqli_fetch_assoc($result)) {
                                   
                                    $id = $rowme['id'];
                                    $user_role = $rowme['user_role'];


                                    if($id == $user_id){
                                     
                                       echo " <option selected value='$user_role'>$user_role</option>";
                                    }
                                    else{

                                        echo " <option value='$user_role'>$user_role</option>";
                                    }
                                 }

                               

                                ?>
                              
                               
                           </select>
                       </div>
                   </div>

                   

                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Photo<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <img width="50" src="../pictures/<?php echo $image ?>" alt="image">
                           <input type="file" name="picture" class="form-control">
                       </div>
                   </div>


                   <div class="row ti">
                       <div class="col-sm-4">
                           
                       </div>
                       <div class="col-sm-8">
                           <input type="submit" class="btn btn-sm btn-info" name="update" value="Submit">
                           
                       </div>
                   </div>


               </div>  

           </form>
       </div>
      
    </div>
</div>
<!-- /.row -->

