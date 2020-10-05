<?php 

include "resource/config.php";

include "resource/function.php";


    if(isset($_POST['register'])){
       
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $role = $_POST['user_role'];

       register($name,$email,$password,$role);
    }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post">
 		
     <p><input type="text" name="name" placeholder="Username" class="form-control"></p>
     <p><input type="email" name="email" placeholder="Email" class="form-control"></p>
     <p><input type="password" name="password" placeholder="Password" class="form-control"></p>
     <p>
       <select name="user_role">
           <option value="admin">admin</option>
           <option value="user">user</option>
       </select>
     </p>
     <p><button type="submit" name="register">Submit</button></p>

 	</form>
 	
 </body>
 </html>