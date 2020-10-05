<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;View Users</p>
        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="teacher-list.php">View Users List</a></li>
         
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
          <thead>
              <th>Photo</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Gender</th>
              <th>Role</th>
              <th>Created_at</th>
              <th>Action</th>
              

              
          </thead>
          <tbody>
               
               <?php get_users() ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

