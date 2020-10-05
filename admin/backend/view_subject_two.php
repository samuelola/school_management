<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;View Subject</p>

        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">View Subjects List</a></li>
          <li class="rolls"><a href="index.php?jss_two">Create Subject</a></li>
         
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
        <!--   <form action="" method="post">
            
             <p style="float:right;"><input type="text" required="" name="search"><input type="submit" name="submit" value="Search"></p>

          </form> -->
          
          <thead>
              <th>Sn</th>
              <th>Subject_Name</th>
              <th>Teacher</th>
              <th>Pass Mark</th>
              <th>Full Mark</th>
              
              <th>Action</th>
              

              
          </thead>
          <tbody>
               
               <?php
               if(isset($_POST['submit'])){

                 $search = $_POST['search'];

                 get_teachers_search($search);
                  
                  
               }
               
               else{

                   get_subjects_jss_two();
               }
                

                ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

