<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
            <i class="fa fa-user"></i> Profile
         
        </h3>
        
      <div class="row">
        
        <div class="col-md-3">
            <div class="panel panel-primary">
              
              <div class="panel-body">
                 <div class="text-center">
                     <?php 

                       $user_id = $_SESSION['user_id'];
                       admin_profile($user_id); 

                     ?>

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">1,322</a>
                      </li>
                      <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                      </li>
                      <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                      </li>
                    </ul> 

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                 </div> 
              </div>
              
            </div>
        </div>


                  <div class="col-md-9">
                    
                    <div class="panel panel-primary">

                      <div class="panel-heading">
                         <h4>About Me   <a class="chan" href="index.php?admin_settings=<?php echo $user_id ?>" style="float: right; font-size: 18px"><i class="fa fa-cog"> </i> Settings</a></h4>
                      </div>
                      <div class="panel-body">
                       
                        <?php 

                           get_admin_settings($user_id);


                        ?>
                         
                         

                      </div>

                      
                    </div>




                    </div>

      </div>
<!-- /.row -->

