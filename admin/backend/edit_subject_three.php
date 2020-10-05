<?php 

  if(isset($_GET['edit_subject_three'])){

    $user_id = $_GET['edit_subject_three'];
     
     $sql = myQuery("SELECT * FROM access_subject_js_3 WHERE id = '$user_id'");
     
      
     while($row = mysqli_fetch_assoc($sql)){

         $subject_name = $row['subject'];
         $teacher = $row['teacher'];
         $pass_mark = $row['passmark'];
         $full_mark = $row['fullmark'];


     }

     if(isset($_POST['update'])){

       $subject_name = $_POST['name'];
       $teacher = $_POST['teacher'];
       $pass_mark = $_POST['pass_mark'];
       $full_mark = $_POST['full_mark'];

       $resultme = myQuery("UPDATE access_subject_js_3 SET subject = '$subject_name', teacher= '$teacher',passmark='$pass_mark',fullmark='$full_mark' WHERE id = '$user_id'");

       confirm($resultme);

       set_message("Subject has been updated");

       header("Location:index.php?view_subject_three");

       
     }
     
  }


 ?>


 <div class="row">
     <div class="col-lg-12">
         <h3 class="page-header">
            
             <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Subject</p>
         </h3>

        <ul class="nav nav-tabs">
           <li class="active"><a href="#">Create Subject</a></li>
           <li class="rolls"><a href="index.php?view_subject_one">View Subject</a></li>
           
        </ul>
         <?php display_message() ?>
        <div class="row">
            <p class="forgot"><span class="pa">*</span> Required fields</p>
            <form action="" method="post" autocomplete="on" enctype="multipart/form-data">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Subject Name<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" value="<?php echo $subject_name ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Teacher<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="teacher" value="<?php echo $teacher ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Pass Mark<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pass_mark" value="<?php echo $pass_mark ?>">
                        </div>
                    </div>

                

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Full Mark<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="full_mark" value="<?php echo $full_mark ?>">
                        </div>
                    </div>


                    


                    <div class="row ti">
                        <div class="col-sm-4">
                            
                        </div>
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-sm btn-info" name="update" value="Update Subject">
                      
                        </div>
                    </div>


                </div>  

            </form>
        </div>
       
     </div>
 </div>