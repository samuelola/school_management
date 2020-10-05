<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
          <p class="resett"><i class="fas fa-chalkboard-teacher"></i>&nbsp;&nbsp;View Grade</p>

        </h3>

       <ul class="nav nav-tabs">
          <li class="active"><a href="#">View Grade List</a></li>
          <li class="rolls"><a href="index.php?create_exam_grade">Create Grade</a></li>
         
       </ul>

       <?php display_message(); ?>

       <table class="table table-responsive table-striped">
          
          
          <thead>
              <th>Sn</th>
              <th>Exam Grade</th>
              <th>Mark From</th>
              <th>Mark To</th>
              <th>Action</th>
              

              
          </thead>
          <tbody>
               
               <?php
               
               exam_grade(); 

                ?>

          </tbody>
       </table>
       
      
    </div>
</div>
<!-- /.row -->

