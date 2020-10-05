<?php 

if(isset($_GET['edit_student_js_one'])){

  $user_id = $_GET['edit_student_js_one'];
   
   $sql = myQuery("SELECT * FROM access_student_js_1 WHERE id = '$user_id'");
   
    
   while($row = mysqli_fetch_assoc($sql)){

      
         $name = $row['name'];
         $email = $row['email'];
         $password = $row['password'];
         $parent =$row['parent'];
         $reg_no = $row['reg_no'];
         $phone = $row['phone'];
         $dob = $row['dob'];
         $join_date = $row['join_date'];
         $gender = $row['gender'];
         $address = $row['address'];
         $class = $row['class'];
         $section = $row['section'];
         $image = $row['photo'];
         $dept = $row['dept'];
        
    
   }


   if(isset($_POST['update'])){

     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $parent =$_POST['parent'];
     $reg_no = $_POST['reg_no'];
     $phone = $_POST['phone'];
     $dob = $_POST['dob'];
     $dept = $_POST['dept'];
     $join_date = $_POST['join_date'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
     $class = $_POST['class'];
     $section = $_POST['section'];
     $image = $_FILES['image']['name'];
     $image_temp = $_FILES['image']['tmp_name'];
     $class = $_POST['class'];
     $address = $_POST['address'];
     $pass_hash = password_hash($password, PASSWORD_BCRYPT , ['cost'=>12]);

     move_uploaded_file($image_temp,"../students/$image");
     
     if(empty($image)){
       
        $example2 = myQuery("SELECT * FROM access_student_js_1 WHERE id = '$user_id'");

        while ($rogue = mysqli_fetch_assoc($example2)) {
          
            $image = $rogue['photo'];
        }
     }


     $resultme = myQuery("UPDATE access_student_js_1 SET name = '$name', email= '$email',password='$pass_hash',parent='$parent',reg_no='$reg_no',dept ='$dept',phone='$phone',dob='$dob',join_date='$join_date',gender='$gender',address = '$address', class = '$class',section='$section',photo='$image' WHERE id = '$user_id'");


     

      confirm($resultme);

      set_message("Student has been created!");

     
       header("Location:index.php?view_students_js_one");
   }


  

}


 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Student</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">Create Teacher</a></li>
          <li class="rolls"><a href="index.php?view_students_js_one">View Student</a></li>
          
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
                           <input type="text" class="form-control" name="name" value=" <?php echo $name ?> ">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Email<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="email" class="form-control" name="email" value=" <?php echo $email ?> ">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Password<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="password" class="form-control" name="password" value=" <?php echo $password ?> ">
                       </div>
                   </div>


                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Address<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="address" value=" <?php echo $address ?> ">
                       </div>
                   </div>

               

                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Phone<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="phone"  value=" <?php echo $phone ?> ">
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

                                   if($gender == 'Male'){
                                      
                                      $sam = myQuery("SELECT * FROM access_student_js_1");
                                      
                                      $row = mysqli_fetch_assoc($sam);
                                      $gender = $row['gender'];

                                      echo "<option selected value='$gender'>$gender</option>";
                                   }

                                   else{

                                         ?> <option  value='Male'>Male</option> <?php
                                   } 


                                   if($gender == 'Female'){
                                      
                                      $sam = myQuery("SELECT * FROM access_student_js_1");
                                      
                                      $row = mysqli_fetch_assoc($sam);
                                      $gender = $row['gender'];

                                      echo "<option selected value='$gender'>$gender</option>";
                                   }

                                   else{

                                         ?> <option  value='Female'>Female</option> <?php
                                   } 


                                 ?>

                           </select>
                       </div>
                   </div>

                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Reg No<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="reg_no" value=" <?php echo $reg_no ?> ">
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
                           <label for="">Parent<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="parent" value=" <?php echo $parent ?> ">
                       </div>
                   </div> 


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Department<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="dept" id="">

                               <?php 

                                   if($dept == 'Science'){
                                    
                                      $sql = myQuery("SELECT * FROM access_student_js_1");

                                      $row = mysqli_fetch_assoc($sql);

                                      $science = $row['dept'];

                                      echo "<option value='$science'>$science</option>";
                                   }
                                   else{

                                       ?><option value="Science">Science</option><?php
                                   }


                                   if($dept == 'Art and Humanities'){
                                    
                                      $sql = myQuery("SELECT * FROM access_student_js_1");

                                      $row = mysqli_fetch_assoc($sql);

                                      $Art_Humanities = $row['dept'];

                                      echo "<option value='$Art_Humanities'>$Art_Humanities</option>";
                                   }
                                   else{

                                       ?><option value="Art_Humanities">Art_Humanities</option><?php
                                   }


                                   
                                   if($dept == 'Commerce'){
                                    
                                      $sql = myQuery("SELECT * FROM access_student_js_1");

                                      $row = mysqli_fetch_assoc($sql);

                                      $commerce = $row['dept'];

                                      echo "<option value='$commerce'>$commerce</option>";
                                   }
                                   else{

                                       ?><option value="Commerce">Commerce</option><?php
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
                           <img width="50" src="../students/<?php echo $image?>" alt="image">
                           <input type="file" class="form-control" name="image" >
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Class<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="class" id="">

                               <?php 

                                  if($class == 'Jss one'){

                                     $sql = myQuery("SELECT * FROM access_student_js_1");

                                     $row = mysqli_fetch_assoc($sql);

                                     $class = $row['class'];

                                     echo "<option value='$class'>$class</option>";
                                  }
                                  else{

                                     ?><option value="Jss one">Jss one</option><?php 
                                  }



                                  if($class == 'Jss two'){

                                     $sql = myQuery("SELECT * FROM access_student_js_1");

                                     $row = mysqli_fetch_assoc($sql);

                                     $jss_two = $row['class'];

                                     echo "<option value='$jss_two'>$jss_two</option>";
                                  }
                                  else{

                                     ?><option value="Jss two">Jss two</option><?php 
                                  }

                                ?>
                                   
                              
                           </select>
                       </div>
                   </div>


                    <div class="row">
                       <div class="col-sm-4">
                           <label for="">Section<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <select name="section" id="">

                              <?php 
                               
                                 if($section == '2018/2019'){

                                     $sql = myQuery("SELECT * FROM access_student_js_1");

                                     $mystyle = mysqli_fetch_assoc($sql);

                                     $sec = $mystyle['section'];
                                      echo "<option selected value='$sec'>$sec</option>";
                                 }
                                 else{

                                      ?><option value="2018/2019">2018/2019</option><?php
                                 }

                                 if($section == '2019/2020'){

                                     $sql = myQuery("SELECT * FROM access_student_js_1");

                                     $mystyle = mysqli_fetch_assoc($sql);

                                     $sec = $mystyle['section'];
                                      echo "<option selected value='$sec'>$sec</option>";
                                 }
                                 else{

                                      ?><option value="2019/2020">2019/2020</option><?php
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
<!-- /.row -->

