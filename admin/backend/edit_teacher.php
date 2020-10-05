<?php 

  if(isset($_GET['edit_teacher'])){

    $user_id = $_GET['edit_teacher'];
     
     $sql = myQuery("SELECT * FROM access_teacher WHERE id = '$user_id'");
     
      
     while($row = mysqli_fetch_assoc($sql)){

       $name = $row['name'];
       $email = $row['email'];
       $password = $row['password'];
       $image = $row['image'];
       $phone = $row['phone'];
       $dob = $row['dob'];
       $join_date = $row['join_date'];
       $gender = $row['gender'];
       $grade = $row['grade'];


     }

     if(isset($_POST['update'])){

       $name = $_POST['name'];
	   $email = $_POST['email'];
	   $password = $_POST['password'];
	   $phone = $_POST['phone'];
	   $dob = $_POST['dob'];
	   $join_date = $_POST['join_date'];
	   $gender = $_POST['gender'];
       $grade = $_POST['grade'];

       $image = $_FILES['image']['name'];
       $image_temp = $_FILES['image']['tmp_name'];

       $pass_hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>12]);

       move_uploaded_file($image_temp,"../pictures/$image");

       if(empty($image)){
         
          $example2 = myQuery("SELECT * FROM access_teacher WHERE id = '$user_id'");

          while ($rogue = mysqli_fetch_assoc($example2)) {
          	
          	  $image = $rogue['image'];
          }
       }


       $resultme = myQuery("UPDATE access_teacher SET name = '$name', email= '$email',password='$password',phone='$phone',dob='$dob',join_date = '$join_date',gender='$gender',image='$image',grade='$grade' WHERE id = '$user_id'");

       confirm($resultme);

       set_message("Teacher has been updated");

       header("Location:index.php?view_teachers");

       
     }
     
  }


 ?>


 <div class="row">
     <div class="col-lg-12">
         <h3 class="page-header">
            
             <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update Users</p>
         </h3>

        <ul class="nav nav-tabs">
           <li class="active"><a href="#">Edit Teacher</a></li>
           <li class="rolls"><a href="index.php?view_teachers">View Teacher</a></li>
           
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
                            <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Email<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Password<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" value="<?php echo $password ?>">
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
                            <label for="">D.O.B<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="dob" value="<?php echo $dob ?>">
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-sm-4">
                            <label for="">Gender<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <select name="gender" id="">
                            	<?php

                                    if($gender == 'male'){
                                       
                                        $sqli = myQuery("SELECT * FROM access_teacher");

                                        $get_gender = mysqli_fetch_assoc($sqli);
                                            
                                         echo "<option selected value='$gender'>$gender</option>";
                                        
                                    }
                                    else{

                                        ?><option  value="male">male</option><?php
                                    }

                                    if($gender == 'female'){
                                       
                                        $sqli = myQuery("SELECT * FROM access_teacher");

                                        $get_gender = mysqli_fetch_assoc($sqli);
                                            
                                         echo "<option selected value='$gender'>$gender</option>";
                                        
                                    }
                                    else{

                                        ?><option  value="female">female</option><?php
                                    }

                                    
                            	 ?>
                               
                            </select>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-sm-4">
                            <label for="">Joined Date<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="join_date" value="<?php echo $join_date ?>">
                        </div>
                    </div>

                    

                     <div class="row">
                        <div class="col-sm-4">
                            <label for="">Photo<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                        	<img width='50' src="../pictures/<?php echo $image ?>" alt="Image">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-sm-4">
                            <label for="">Salary Grade<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <select name="grade" id="">

                            	<?php 

                                 $example = myQuery("SELECT * FROM access_teacher");

                                 while ($row = mysqli_fetch_assoc($example)) {
                                 	
                                 	$id = $row['id'];
                                 	$grade = $row['grade'];

                                 	if($id == $user_id){
                                       
                                        echo " <option selected value='$grade '>$grade </option>";
                                 	}
                                 	else{

                                        echo " <option value='$grade '>$grade </option>";
                                 	}
                                 }


                            	 ?>
                                
                            </select>
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