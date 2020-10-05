<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;View Class</p>

        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">View Class List</a></li>
          <li class="rolls"><a href="index.php?create_class">Create Class</a></li>
         
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
         
          
          <thead>
              <th>Sn</th>
              <th>Name</th>
              <th>Session</th>
              <th>Dept</th>
              <th>Teacher</th>
              <th>Action</th>
              

              
          </thead>
          <tbody>
               
               <?php
                   get_the_class();
                   
         
                

                ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

