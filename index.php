<?php 

include "resource/config.php";

include "resource/function.php";

$message = '';

    if(isset($_POST['login'])){
       
       $email = $_POST['email'];
       $password = $_POST['password'];

       $select = "SELECT * FROM users WHERE user_email = '$email'";

       $result = mysqli_query($conn,$select);

       $row = mysqli_fetch_assoc($result);

       if(empty($email)){
           
           $message .= '<p class="enable">Enter Your email!</p>';
       }
       elseif($email != $row['user_email']){

           $message .= '<p class="enable">Wrong email!</p>';
       }
        else{

             if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

               $message .= '<p class="enable">Invalid email!</p>'; 
             }
         }

       if(empty($password)){

            $message .= '<p class="enable">Enter your password!</p>';
       } 
       else{

       	   if($password != $row['user_password']){
              
                $message .= '<p class="enable">Wrong password!</p>';
            }
       }


       login($email,$password);

    }

     if(isset($_POST['reset']) == 'Cancel'){

	    header("Location:index.php");
	 }
 ?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Access College | Portal</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1 class="editr">Welcome to Admin portal Account </h1>
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="" method="post">
			<img src="images/newas.jpg" alt="">
			<h3 class="sub-heading-agileits">Aiming for the best</h3>
			<p class="aaa">Login to access your account</p>
			<p class="enable"><?php echo $message; ?></p>
			
			<div style="margin-bottom: 25px" class="input-group">
                 <span class="input-group-addon">
                   <i class="glyphicon glyphicon-user"></i>
                 </span>
                  <input type="email" class="form-control" name="email" placeholder="Email" >
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon">
                   <i class="glyphicon glyphicon-lock"></i>
                </span>
                <input  type="password" class="form-control" name="password"  placeholder="password">
            </div>

			
			<div class="input-group">
                <div class="checkbox">
                    
                                            
                    <div id="fpassword" class="fpassword">
                      <a href="admin_fpassword.php">Forgot password?</a>
                      <!-- <a href="register.php">register</a> -->
                    </div>
                </div>
            </div>
			
			<div class="clear"></div>
			
			
			
			
			
			<input type="submit" value="Login" name="login">
			<input type="reset" value="Cancel" name="reset">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
		<p>&copy; <script>document.write(new Date().getFullYear());</script> | Powered by Sammywebtech
			
		</p>
		
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>

</html>