<?php 
   
 if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
    add_attendance_register($name,$email);

  }

 ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp;Create Class</p>
        </h3>

       <ul class="nav nav-tabs">
         <li class="rolls"><a href="index.php?teacher-attendance">Teacher Attendance</a></li>
         <li class="rolls"><a href="index.php?view-teacher-attendance">View Attendance</a></li>
         <li class="active"><a href="index.php?add_attendance_teacher">Add Teacher</a></li>
          
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
                           <input type="text" class="form-control" name="name">
                       </div>
                   </div>

                   
                   <div class="row">
                       <div class="col-sm-4">
                           <label for="">Email<span class="pa">*</span></label>
                       </div>
                       <div class="col-sm-8">
                           <input type="email" class="form-control" name="email">
                       </div>
                   </div>



                   <div class="row ti">
                       <div class="col-sm-4">
                           
                       </div>
                       <div class="col-sm-8">
                           <input type="submit" class="btn btn-sm btn-default" name="submit" value="Submit">
                     
                       </div>
                   </div>


               </div>  

           </form>
       </div>
      
    </div>
</div>
<!-- /.row -->