<?php

function myQuery($query){ 
   global $conn;

   return mysqli_query($conn,$query);
} 

function escape_string($string){
  
   global $conn;

   return mysqli_real_escape_string($conn,$string);
}

function confirm ($the_result){
   
   global $conn;

   if(!$the_result){
     
      die("Error".mysqli_error($conn).$the_result);
   }
}

function set_message($msg){

   if(!empty($msg)){

   	   $_SESSION['msg'] = $msg;
   }
   else{

   	   $msg = "";
   }
}

function display_message(){

	if(isset($_SESSION['msg'])){
     
        echo "<h4 class='text-danger text-center'>".$_SESSION['msg']."</h4>";

        unset($_SESSION['msg']);
	}
}

function register($name,$email,$password,$role){

   $name = escape_string($name);
   $email = escape_string($email);
   $password = escape_string($password);
   $role = escape_string($role);	

   $hash = password_hash($password,PASSWORD_BCRYPT,['cost'=>12]);

   $result = myQuery("INSERT INTO users (user_name,user_email,user_password,user_role) VALUES ('$name','$email','$hash','$role')");

    confirm($result);
}

function login($email,$password){

   $email = escape_string($email);
   $password = escape_string($password);

   $result = myQuery("SELECT * FROM users WHERE user_email = '$email'");

   $row = mysqli_fetch_assoc($result);

   $pass = $row['user_password'];

   if(password_verify($password,$pass)){
     
       $result2 = myQuery("SELECT * FROM users WHERE user_password = '$pass'");

       $row = mysqli_fetch_assoc($result2);

       $_SESSION['user_id'] = $row['id'];
       $_SESSION['user_name'] = $row['user_name'];
       $_SESSION['user_role'] = $row['user_role'];

       header("Location:admin/index.php");
   }
}


function get_users(){

    $sql = myQuery("SELECT id,user_name,user_email,user_password,user_role,image,phone,gender,date_format(created_at, '%b %e %Y at %r') as fmt_create_time FROM users");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../pictures/{$row['image']}" alt="image1"></td>
      <td>{$row['user_name']}</td>
      <td>{$row['user_email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['user_role']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_user={$row['id']}">Edit</a> | <a class="btn btn-xs btn-danger" onClick="javascript:return confirm('Do you want to delete?')" href="index.php?delete_user={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_the_class(){

    $sql = myQuery("SELECT *  FROM access_class");
     
     $sn = 0;

    while($row = mysqli_fetch_assoc($sql)){
       
       $sn +=1; 
$get_users = <<<DELIMETER

    <tr>
      <td>{$sn}</td>
      <td>{$row['name']}</td>
      <td>{$row['session']}</td>
      <td>{$row['dept']}</td>
      <td>{$row['teacher']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_class={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_class={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_subjects(){

    $sql = myQuery("SELECT * FROM access_subject");
    $sn=0;
    while($row = mysqli_fetch_assoc($sql)){
      $sn +=1;
$get_users = <<<DELIMETER

    <tr>
      <td>$sn</td>
      <td>{$row['subject']}</td>
      <td>{$row['teacher']}</td>
      <td>{$row['passmark']}</td>
      <td>{$row['fullmark']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_subject={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_subject={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_subjects_jss_two(){

    $sql = myQuery("SELECT * FROM access_subject_js_2");
    $sn=0;
    while($row = mysqli_fetch_assoc($sql)){
      $sn +=1;
$get_users = <<<DELIMETER

    <tr>
      <td>$sn</td>
      <td>{$row['subject']}</td>
      <td>{$row['teacher']}</td>
      <td>{$row['passmark']}</td>
      <td>{$row['fullmark']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_subject_two={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_subject_two={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_subjects_jss_three(){

    $sql = myQuery("SELECT * FROM access_subject_js_3");
    $sn=0;
    while($row = mysqli_fetch_assoc($sql)){
      $sn +=1;
$get_users = <<<DELIMETER

    <tr>
      <td>$sn</td>
      <td>{$row['subject']}</td>
      <td>{$row['teacher']}</td>
      <td>{$row['passmark']}</td>
      <td>{$row['fullmark']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_subject_three={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_subject_three={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}

function get_subjects_sss_one(){

    $sql = myQuery("SELECT * FROM access_subject_ss_1");
    $sn=0;
    while($row = mysqli_fetch_assoc($sql)){
      $sn +=1;
$get_users = <<<DELIMETER

    <tr>
      <td>$sn</td>
      <td>{$row['subject']}</td>
      <td>{$row['teacher']}</td>
      <td>{$row['passmark']}</td>
      <td>{$row['fullmark']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_subject_ss_one={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_subject_ss_one={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_subjects_sss_two(){

    $sql = myQuery("SELECT * FROM access_subject_ss_2");
    $sn=0;
    while($row = mysqli_fetch_assoc($sql)){
      $sn +=1;
$get_users = <<<DELIMETER

    <tr>
      <td>$sn</td>
      <td>{$row['subject']}</td>
      <td>{$row['teacher']}</td>
      <td>{$row['passmark']}</td>
      <td>{$row['fullmark']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_subject_ss_two={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_subject_ss_two={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}

function get_subjects_sss_three(){

    $sql = myQuery("SELECT * FROM access_subject_ss_3");
    $sn=0;
    while($row = mysqli_fetch_assoc($sql)){
      $sn +=1;
$get_users = <<<DELIMETER

    <tr>
      <td>$sn</td>
      <td>{$row['subject']}</td>
      <td>{$row['teacher']}</td>
      <td>{$row['passmark']}</td>
      <td>{$row['fullmark']}</td>
      
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_subject_ss_three={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_subject_ss_three={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}






function get_teachers(){

    $sql = myQuery("SELECT id,name,email,password,phone,gender,image,grade,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_teacher");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../pictures/{$row['image']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['grade']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_teacher={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_teacher={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_employee(){

    $sql = myQuery("SELECT id,name,email,password,phone,gender,image,grade,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_employee");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../employee/{$row['image']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['grade']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_employee={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_employee={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_students_js_one(){

    $sql = myQuery("SELECT id,name,email,password,parent,reg_no,phone,gender,photo,address,class,section,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_student_js_1");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../students/{$row['photo']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['reg_no']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['parent']}</td>
      <td>{$row['section']}</td>
      <td>{$row['class']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_student_js_one={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_student_js_1={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_students_ss_one(){

    $sql = myQuery("SELECT id,name,email,password,parent,reg_no,phone,gender,photo,address,class,section,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_student_ss_1");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../students/{$row['photo']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['reg_no']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['parent']}</td>
      <td>{$row['section']}</td>
      <td>{$row['class']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_student_ss_one={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_student_ss_1={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}



function get_teachers_search($search){

    $sql = myQuery("SELECT id,name,email,password,phone,gender,image,grade,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_teacher WHERE name LIKE '%$search%'");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../pictures/{$row['image']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['grade']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_teacher={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_teacher={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}

function get_employee_search($search){

    $sql = myQuery("SELECT id,name,email,password,phone,gender,image,grade,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_employee WHERE name LIKE '%$search%'");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../employee/{$row['image']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['grade']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_employee={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_employee={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function get_student_search($search){

    $sql = myQuery("SELECT id,name,email,password,phone,gender,photo,dept,address,class,section,parent,reg_no,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_student_js_1 WHERE name LIKE '%$search%'");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../students/{$row['photo']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['reg_no']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['parent']}</td>
      <td>{$row['section']}</td>
      <td>{$row['class']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_student_js_one={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_student_js_1={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}



function get_student_ss_search($search){

    $sql = myQuery("SELECT id,name,email,password,phone,gender,photo,dept,address,class,section,parent,reg_no,date_format(dob, '%b %e %Y') as fmt_create_time, date_format(join_date, '%b %e %Y') as fmt_join_time  FROM access_student_ss_1 WHERE name LIKE '%$search%'");

    while($row = mysqli_fetch_assoc($sql)){
      
$get_users = <<<DELIMETER

    <tr>
      <td><img width="70" src="../students/{$row['photo']}" alt="image1"></td>
      <td>{$row['name']}</td>
      <td>{$row['reg_no']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['fmt_create_time']}</td>
      <td>{$row['fmt_join_time']}</td>
      <td>{$row['gender']}</td>
      <td>{$row['parent']}</td>
      <td>{$row['section']}</td>
      <td>{$row['class']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_student_js_one={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_student_js_1={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}


function reset_password($user_id,$current_password,$new_password,$confirm_password,$new_password_hash){

  if(empty($current_password) && empty($new_password) && empty($confirm_password)){
     
     set_message("Fields cannot be empty!");
  }


  $sql = myQuery("SELECT * FROM users WHERE id = '$user_id'");

  $counter = mysqli_num_rows($sql);

  $row = mysqli_fetch_assoc($sql);

  $game = $row['user_password'];

  if(password_verify($current_password,$game)){
        
     $result3 = myQuery("SELECT * FROM users WHERE id = '$game'");
     
     $count = mysqli_num_rows($result3);

     if($count < 1){

          set_message("Sorry Your password is incorrect, try again");   
     }
    

     if ($new_password != $confirm_password) {
             
             set_message("Your passwords does not match , try again!"); 
     } 
     else{

         $result4 = myQuery("UPDATE users SET user_password = '$new_password_hash' WHERE id = '$user_id'");

     confirm($result4);

     set_message("Your current password is updated");
     }


  }

}

function admin_profile($user_id){

   $sql = myQuery("SELECT * FROM users WHERE id = '$user_id'");

   while($row = mysqli_fetch_assoc($sql)){

   $up_role = ucfirst($row['user_role']);
   $up_name = ucfirst($row['user_name']);



$admin_profile = <<<DELIMETER

<img width="128" src="../pictures/{$row['image']}" class="img-responsive  profile-user-img" alt="">
<h3 class="profile-username text-center">{$up_name}</h3>
<p class="text-muted text-center">{$up_role}</p>

DELIMETER;

echo $admin_profile;
   }
}


function admin_settings($user_id){

  if(isset($_POST['settings'])){
     
     $bio = escape_string($_POST['bio']);
     $edu = escape_string($_POST['edu']);
     $address = escape_string($_POST['address']);
     $skills = escape_string($_POST['skills']);

     $sql = myQuery("INSERT INTO admin_settings (user_id,bio,education,address,skills) VALUES ('$user_id','$bio','$edu','$address','$skills')");

     confirm($sql);

     header("Location:index.php?profile");
  }
}

function get_admin_settings($user_id){

   $sql = myQuery("SELECT * FROM admin_settings WHERE user_id = '$user_id'");

   while($row = mysqli_fetch_assoc($sql)){

$get_admin_settings = <<<DELIMETER

  <strong>
    <i class="fa fa-user"></i>
    Bio
  </strong>
  
  <p class="text-muted">
   {$row['bio']}
 </p>

  <hr>



 <strong>
   <i class="fa fa-book"></i>
   Education
 </strong>
 
 <p class="text-muted">
  {$row['education']}
</p>

 <hr>


 <strong><i class="fa fa-map-marker"></i> Address</strong>
 <p class="text-muted">{$row['address']}</p>
 <hr>

 <strong><i class="fa fa-pencil"></i> Skills</strong>
 <p class="text-muted">
   
    <span class="tag tag-success">{$row['skills']}</span>
   
  </p>

  <hr>

  <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
      <a href="index.php?edit_settings={$user_id}" class="btn btn-primary">Edit Profile</a>
    </div>
  </div>


DELIMETER;



echo $get_admin_settings ;   

   }
}

function update_settings($edit_settings){

   if(isset($_POST['update_settings'])){
      
      $bio = $_POST['bio'];
      $edu = $_POST['edu'];
      $address = $_POST['address'];
      $skills = $_POST['skills'];


     $update_me = myQuery("UPDATE admin_settings SET bio = '$bio' , education = '$edu', address = '$address', skills = '$skills' WHERE user_id = '$edit_settings'");

      confirm($update_me);

      set_message("Your Profile has been updated");

      header("Location:index.php?profile");
   }
}


function emp_student(){
  $sn = 0;
    $sql = myQuery("SELECT * FROM access_student_js_1");

      while ($row = mysqli_fetch_assoc($sql)) {
          
          $name =$row['name'];
          $email = $row['email'];
          $image = $row['photo'];
          $id = $row['id'];
          $sn+=1;
$emp = <<<DELIMETER
     
    <tr>
        <td>{$sn}</td>
        <td><img width="70" src="../students/{$row['photo']}" alt="image1"></td>
        <td>{$name}</td>
        <td>{$email}</td>
        <td>
            Present <input type="radio" required name="attendance[{$id}]" value="Present">&nbsp; &nbsp; Absent <input type="radio" name="attendance[{$id}]" value="Absent">
        </td>
    </tr>
        
DELIMETER;

echo $emp;

      }
}


function emp(){
  $sn = 0;
    $sql = myQuery("SELECT * FROM access_teacher");

      while ($row = mysqli_fetch_assoc($sql)) {
          
          $name =$row['name'];
          $email = $row['email'];
          $image = $row['image'];
          $id = $row['id'];
          $sn+=1;
$emp = <<<DELIMETER
     
    <tr>
        <td>{$sn}</td>
        <td><img width="70" src="../pictures/{$row['image']}" alt="image1"></td>
        <td>{$name}</td>
        <td>{$email}</td>
        <td>
            Present <input type="radio" required name="attendance[{$id}]" value="Present">&nbsp; &nbsp; Absent <input type="radio" name="attendance[{$id}]" value="Absent">
        </td>
    </tr>
        
DELIMETER;

echo $emp;

      }
}


function emp_employee(){
  $sn = 0;
    $sql = myQuery("SELECT * FROM access_employee");

      while ($row = mysqli_fetch_assoc($sql)) {
          
          $name =$row['name'];
          $email = $row['email'];
          $image = $row['image'];
          $id = $row['id'];
          $sn+=1;
$emp = <<<DELIMETER
     
    <tr>
        <td>{$sn}</td>
        <td><img width="70" src="../employee/{$row['image']}" alt="image1"></td>
        <td>{$name}</td>
        <td>{$email}</td>
        <td>
            Present <input type="radio" required name="attendance[{$id}]" value="Present">&nbsp; &nbsp; Absent <input type="radio" name="attendance[{$id}]" value="Absent">
        </td>
    </tr>
        
DELIMETER;

echo $emp;

      }
}



function add_attendance_register($name,$email){

   if($name=='' || $email ==''){
    
      echo "<script>alert('Fields cannot be empty!')</script>";
   }

   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

       echo "<script>alert('Invalid email format')</script>";
   }
  
  else{

    $sql = myQuery("INSERT INTO emp (name,email) VALUES ('$name','$email')");

    if($sql){
     
       echo "<script>alert('Data Inserted successfully!')</script>";
    }

  }
    
}



function take_teacher_attendance(){

  global $conn;

   if(isset($_POST['add_attendance'])){
      

     $attendance = $_POST['attendance'];
      
     $the_date = date('Y-m-d');

     $sql = myQuery("SELECT DISTINCT attend_date FROM teacher_attendance WHERE attend_date ='$the_date'");

     
     
     if(mysqli_num_rows($sql) > 0 ){
        
        while ($row = mysqli_fetch_assoc($sql)) {
          
          $db_date = $row['attend_date'];

          if($the_date == $db_date ){
             
              echo "<script>alert('Attendance is already taken for today!')</script>";
          }

          
        }

     }
    

     else{

       
        foreach ($attendance as $key => $value) {
            
              if($value == 'Present'){
                

                $attend_one = myQuery("INSERT INTO teacher_attendance (value,id,attend_date) VALUES ('Present','$key','$the_date')");
                 
              }
              else{
                 
                
                $attend_one = myQuery("INSERT INTO teacher_attendance (value,id,attend_date) VALUES ('Absent','$key','$the_date')");
                 
              }

              
        }


         if($attend_one){
             
              echo "<script>alert('Attendance is sucessful')</script>";
          }

          else{

               echo "error".mysqli_error($conn).$sql_attend;
          }



     }


   }

}


function take_employee_attendance(){

  global $conn;

   if(isset($_POST['add_attendance'])){
      

     $attendance = $_POST['attendance'];
      
     $the_date = date('Y-m-d');

     $sql = myQuery("SELECT DISTINCT attend_date FROM employee_attendance WHERE attend_date ='$the_date'");

     
     
     if(mysqli_num_rows($sql) > 0 ){
        
        while ($row = mysqli_fetch_assoc($sql)) {
          
          $db_date = $row['attend_date'];

          if($the_date == $db_date ){
             
              echo "<script>alert('Attendance is already taken for today!')</script>";
          }

          
        }

     }
    

     else{

       
        foreach ($attendance as $key => $value) {
            
              if($value == 'Present'){
                

                $attend_one = myQuery("INSERT INTO employee_attendance (value,id,attend_date) VALUES ('Present','$key','$the_date')");
                 
              }
              else{
                 
                
                $attend_one = myQuery("INSERT INTO employee_attendance (value,id,attend_date) VALUES ('Absent','$key','$the_date')");
                 
              }

              
        }


         if($attend_one){
             
              echo "<script>alert('Attendance is sucessful')</script>";
          }

          else{

               echo "error".mysqli_error($conn).$sql_attend;
          }



     }


   }

}






function take_student_attendance(){

  global $conn;

   if(isset($_POST['add_attendance'])){
      

     $attendance = $_POST['attendance'];
      
     $the_date = date('Y-m-d');

     $sql = myQuery("SELECT DISTINCT attend_date FROM student_attendance WHERE attend_date = '$the_date'");

     
     
     if(mysqli_num_rows($sql) > 0 ){
        
        while ($row = mysqli_fetch_assoc($sql)) {
          
          $db_date = $row['attend_date'];

          if($the_date == $db_date ){
             
              echo "<script>alert('Attendance is already taken for today!')</script>";
          }

          
        }

     }
    

     else{

       
        foreach ($attendance as $key => $value) {
            
              if($value == 'Present'){
                

                $attend_one = myQuery("INSERT INTO student_attendance (value,id,attend_date) VALUES ('Present','$key','$the_date')");
                 
              }
              else{
                 
                
                $attend_one = myQuery("INSERT INTO student_attendance (value,id,attend_date) VALUES ('Absent','$key','$the_date')");
                 
              }

              
        }


         if($attend_one){
             
              echo "<script>alert('Attendance is sucessful')</script>";
          }

          else{

               echo "error".mysqli_error($conn).$sql_attend;
          }



     }


   }

}


//////////////////////////////////////////////////////////////////
 
 function take_exam_attendance(){

   global $conn;

    if(isset($_POST['add_attendance'])){
       

      $attendance = $_POST['attendance'];
       
      $the_date = date('Y-m-d');

      $sql = myQuery("SELECT DISTINCT attend_date FROM exam_attendance WHERE attend_date = '$the_date'");

      
      
      if(mysqli_num_rows($sql) > 0 ){
         
         while ($row = mysqli_fetch_assoc($sql)) {
           
           $db_date = $row['attend_date'];

           if($the_date == $db_date ){
              
               echo "<script>alert('Attendance is already taken for today!')</script>";
           }

           
         }

      }
     

      else{

        
         foreach ($attendance as $key => $value) {
             
               if($value == 'Present'){
                 

                 $attend_one = myQuery("INSERT INTO exam_attendance (value,id,attend_date) VALUES ('Present','$key','$the_date')");
                  
               }
               else{
                  
                 
                 $attend_one = myQuery("INSERT INTO exam_attendance (value,id,attend_date) VALUES ('Absent','$key','$the_date')");
                  
               }

               
         }


          if($attend_one){
              
               echo "<script>alert('Attendance is sucessful')</script>";
           }

           else{

                echo "error".mysqli_error($conn).$attend_one;
           }



      }


    }

 }

/////////////////////////////////////////////////////////////////
function display_teacher_date(){
  
   if(isset($_GET['view_attendance_teacher_date'])){

       $sammy_date = $_GET['view_attendance_teacher_date'];

       $sql = myQuery("SELECT DISTINCT date_format(attend_date,'%b %e %Y') as sam_date FROM teacher_attendance WHERE attend_date = '$sammy_date'");

       $row = mysqli_fetch_assoc($sql);

       $ok_date = $row['sam_date'];

       echo $ok_date;
   }
  
     
   
}



function display_employee_date(){
  
   if(isset($_GET['view_attendance_employee_date'])){

       $sammy_date = $_GET['view_attendance_employee_date'];

       $sql = myQuery("SELECT DISTINCT date_format(attend_date,'%b %e %Y') as sam_date FROM employee_attendance WHERE attend_date = '$sammy_date'");

       $row = mysqli_fetch_assoc($sql);

       $ok_date = $row['sam_date'];

       echo $ok_date;
   }
  
     
   
}


function display_student_date(){
  
   if(isset($_GET['view_attendance_student_date'])){

       $sammy_date = $_GET['view_attendance_student_date'];

       $sql = myQuery("SELECT DISTINCT date_format(attend_date,'%b %e %Y') as sam_date FROM student_attendance WHERE attend_date = '$sammy_date'");

       $row = mysqli_fetch_assoc($sql);

       $ok_date = $row['sam_date'];

       echo $ok_date;
   }
  
     
   
}


function display_exam_date(){
  
   if(isset($_GET['view_attendance_exam_date'])){

       $sammy_date = $_GET['view_attendance_exam_date'];

       $sql = myQuery("SELECT DISTINCT date_format(attend_date,'%b %e %Y') as sam_date FROM exam_attendance WHERE attend_date = '$sammy_date'");

       $row = mysqli_fetch_assoc($sql);

       $ok_date = $row['sam_date'];

       echo $ok_date;
   }
  
     
   
}


function view_all_teacher_attendance(){

   $sn = 0;
   $sql = myQuery("SELECT DISTINCT attend_date FROM teacher_attendance");

   if(mysqli_num_rows($sql) > 0){

   }
   
   while ($row = mysqli_fetch_assoc($sql)) {
     
      $date = $row['attend_date'];
      
      $sn +=1;

$view_teacher_attendance = <<<DELIMETER

      <tr>
         <td>{$sn}</td>
         <td>{$date}</td>
         <td><a href="index.php?view_attendance_teacher_date={$date}" class="btn btn-primary btn-xs">show</a></td>
      </tr>


DELIMETER;

echo $view_teacher_attendance;      
   }



}

function view_all_employee_attendance(){

   $sn = 0;
   $sql = myQuery("SELECT DISTINCT attend_date FROM employee_attendance");

   if(mysqli_num_rows($sql) > 0){

   }
   
   while ($row = mysqli_fetch_assoc($sql)) {
     
      $date = $row['attend_date'];
      
      $sn +=1;

$view_teacher_attendance = <<<DELIMETER

      <tr>
         <td>{$sn}</td>
         <td>{$date}</td>
         <td><a href="index.php?view_attendance_employee_date={$date}" class="btn btn-primary btn-xs">show</a></td>
      </tr>


DELIMETER;

echo $view_teacher_attendance;      
   }



}







function view_all_student_attendance(){

   $sn = 0;
   $sql = myQuery("SELECT DISTINCT attend_date FROM student_attendance");

   if(mysqli_num_rows($sql) > 0){

   }
   
   while ($row = mysqli_fetch_assoc($sql)) {
     
      $date = $row['attend_date'];
      
      $sn +=1;

$view_teacher_attendance = <<<DELIMETER

      <tr>
         <td>{$sn}</td>
         <td>{$date}</td>
         <td><a href="index.php?view_attendance_student_date={$date}" class="btn btn-primary btn-xs">show</a></td>
      </tr>


DELIMETER;

echo $view_teacher_attendance;      
   }



}


///////////////////////////////////////////////////////////////

function view_all_exam_attendance(){

   $sn = 0;
   $sql = myQuery("SELECT DISTINCT attend_date FROM exam_attendance");

   if(mysqli_num_rows($sql) > 0){

   }
   
   while ($row = mysqli_fetch_assoc($sql)) {
     
      $date = $row['attend_date'];
      
      $sn +=1;

$view_teacher_attendance = <<<DELIMETER

      <tr>
         <td>{$sn}</td>
         <td>{$date}</td>
         <td><a href="index.php?view_attendance_exam_date={$date}" class="btn btn-primary btn-xs">show</a></td>
      </tr>


DELIMETER;

echo $view_teacher_attendance;      
   }



}


//////////////////////////////////////////////////////////////





function show_attendance(){

    if(isset($_GET['view_attendance_teacher_date'])){
       $sn = 0;
       $attendance_date = $_GET['view_attendance_teacher_date'];

       $sql = myQuery("SELECT * FROM emp INNER JOIN teacher_attendance ON emp.emp_id = teacher_attendance.id ");

       while ($row = mysqli_fetch_assoc($sql)) {
         
          $sn +=1;
          $name = $row['name'];
          $email = $row['email'];

$show_attendance = <<<DELIMETER
         
         <tr>
             <td>{$sn}</td>
             <td>{$name}</td>
             <td>{$email}</td>
             <td>
                 Present <input type="radio" required name="attendance[]" value="Present">&nbsp; &nbsp; Absent <input type="radio" name="attendance[]" value="Absent">
             </td>
         </tr>

DELIMETER;

echo $show_attendance;          
       }
    }
}


function total_teachers(){

    $sql = myQuery("SELECT * FROM access_teacher");

    $count_total_teachers = mysqli_num_rows($sql);

    return $count_total_teachers;
}


function all_jss_students(){

    $sql = myQuery("SELECT * FROM access_student_js_1 ");

    $count_total_students = mysqli_num_rows($sql);

    return $count_total_students;
}


function all_sss_students(){

    $sql = myQuery("SELECT * FROM access_student_ss_1 ");

    $count_total_students = mysqli_num_rows($sql);

    return $count_total_students;
}

function all_employee(){

    $sql = myQuery("SELECT * FROM access_employee ");

    $count_total_employee = mysqli_num_rows($sql);

    return $count_total_employee;
}

function total_students(){

    $count_total_students = all_jss_students()+all_sss_students();

    echo $count_total_students;
}


function total_users(){

    $count_total_users = all_jss_students()+all_sss_students()+total_teachers()+all_employee();

    echo $count_total_users;
}


function exam_grade(){
     $sn = 0;
    $sql = myQuery("SELECT * FROM exam_grade");

    while($row = mysqli_fetch_assoc($sql)){
       $sn +=1;
$get_users = <<<DELIMETER
  
    <tr>
      <td>{$sn}</td>
      <td>{$row['grade']}</td>
      <td>{$row['m_from']}</td>
      <td>{$row['m_to']}</td>
      <td><a class="btn btn-xs btn-primary" href="index.php?edit_exam_grade={$row['id']}">Edit</a> | <a  class="btn btn-xs btn-danger" onClick="javascript:return confirm('Are you sure you want to delete')" href="index.php?delete_exam_grade={$row['id']}">Delete</a></td>
     
    </tr>

DELIMETER;

echo $get_users;
    }
}






 ?>