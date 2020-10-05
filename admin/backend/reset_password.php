<?php 

 if(isset($_POST['reset_password'])){

    
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_SESSION['user_id'];
    $new_password_hash = password_hash($new_password, PASSWORD_BCRYPT , ['cost'=>12]);

    reset_password($user_id,$current_password,$new_password,$confirm_password,$new_password_hash);

   
 } 

 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Administration | Resetpassword</p>
            
        </h3>
         
        <div class="row">
            <p class="forgot"><span class="pa">*</span> Required fields</p>
            <form action="" method="post" autocomplete="on">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                                     

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Current Password<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="current_password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">New Password<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="new_password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Confirm Password<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="confirm_password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            
                        </div>
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-sm btn-info" name="reset_password" value="Reset_Password">
                      
                        </div>
                    </div>


                </div>  

            </form>
        </div>
</div>        