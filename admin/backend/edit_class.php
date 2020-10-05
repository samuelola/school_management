<?php 

  if(isset($_GET['edit_class'])){

    $user_id = $_GET['edit_class'];
     
     $sql = myQuery("SELECT * FROM access_class WHERE id = '$user_id'");
     
      
     while($row = mysqli_fetch_assoc($sql)){

       $name = $row['name'];
       $session = $row['session'];
       $dept = $row['dept'];
       $teacher = $row['teacher'];
       
     }

     if(isset($_POST['update'])){

       $name = $_POST['name'];
       $session = $_POST['session'];
       $dept = $_POST['dept'];
       $teacher = $_POST['teacher'];

       $resultme = myQuery("UPDATE access_class SET name = '$name', session= '$session',dept='$dept',teacher='$teacher' WHERE id = '$user_id'");

       confirm($resultme);

       set_message("Class has been updated");

       header("Location:index.php?view_class");

       
     }
     
  }


 ?>


 <!-- Page Heading -->
 <div class="row">
     <div class="col-lg-12">
         <h3 class="page-header">
            
             <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Class</p>
         </h3>

        <ul class="nav nav-tabs">
           <li class="active"><a href="#">Create Class</a></li>
           <li class="rolls"><a href="index.php?view_class">View Class</a></li>
           
        </ul>
        
        <div class="row">
            <p class="forgot"><span class="pa">*</span> Required fields</p>
            <form action="" method="post" autocomplete="on" enctype="multipart/form-data">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Class Name<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Session<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="session" value="<?php echo $session ?>">
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-sm-4">
                            <label for="">Department<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <select name="dept" id="">
                                <?php 

                                  $session = myQuery("SELECT * FROM access_class");

                                  while($row = mysqli_fetch_assoc($session)){

                                     $session_id = $row['id'];
                                     $edit_session_id = $user_id;
                                     $select_session = $row['session'];

                                     if($edit_session_id == $session_id){
                                         
                                         echo " <option selected value='$select_session'>$select_session</option>";
                                     }
                                     else{

                                        echo " <option value='$select_session'>$select_session</option>";
                                     }

                                  }


                                 ?>
                               
                            </select>
                        </div>
                    </div>



                     <div class="row">
                        <div class="col-sm-4">
                            <label for="">Teacher<span class="pa">*</span></label>
                        </div>
                        <div class="col-sm-8">
                            <select name="teacher" id="">
                                
                                <?php 

                                  $session = myQuery("SELECT * FROM access_class");

                                  while($row = mysqli_fetch_assoc($session)){

                                     $session_id = $row['id'];
                                     $edit_session_id = $user_id;
                                     $select_teacher = $row['teacher'];

                                     if($edit_session_id == $session_id){
                                         
                                         echo " <option  selected value='$select_teacher'>$select_teacher</option>";
                                     }
                                     else{

                                        echo " <option value='$select_teacher'>$select_teacher</option>";
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