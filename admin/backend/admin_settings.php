<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           <!--  Profile -->
         
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
                    <?php 

                      admin_settings($user_id);

                     ?>
                    <div class="panel panel-primary">

                      <div class="panel-heading">
                         <h4>Settings <a class="chan" href="index.php?profile" style="float: right; font-size: 18px"> Back to profile</a></h4>
                      </div>
                      <div class="panel-body">
                       
                       <form action="" method="post" class="form-horizontal">

                       <div class="form-group row">
                         <label for="inputExperience" class="col-sm-2 col-form-label">Bio</label>
                         <div class="col-sm-10">
                           <textarea class="form-control" name="bio" id="inputExperience" placeholder="Bio"></textarea>
                         </div>
                       </div>
                        
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <input type="text" name="edu" class="form-control" id="inputName" placeholder="Education">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" name="address" class="form-control" id="inputName2" placeholder="Address">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" name="skills" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="settings" class="btn btn-success">Add Profile</button>
                        </div>
                      </div>
                    </form>


                      </div>
                    </div>




                    </div>

      </div>
<!-- /.row -->

