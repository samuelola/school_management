<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;View Students JSS</p>

        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">View Students List</a></li>
          <li class="rolls"><a href="index.php?create_student_js_one">Create Student</a></li>
         
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
          <form action="" method="post">
            
             <p style="float:right;"><input type="text" required="" name="search"><input type="submit" name="submit" value="Search"></p>

          </form>
          
          <thead>
              <th>Photo</th>
              <th>Name</th>
              <th>Reg No</th>
              <th>Email</th>
              <th>Phone</th>
              <th>D.O.B</th>
              <th>Joined Date</th>
              <th>Gender</th>
              <th>Parent</th>

              <th>Section</th>
             
              <th>Class</th>
              <th>Action</th>
              

              
          </thead>
          <tbody>
               
               <?php
               if(isset($_POST['submit'])){

                 $search = $_POST['search'];

                get_student_search($search);
                  
                  
               }
               
               else{

                   get_students_js_one();
               }
                

                ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

