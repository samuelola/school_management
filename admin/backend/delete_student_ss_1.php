<?php 

if(isset($_GET['delete_student_ss_1'])){
  
  $delete_student = $_GET['delete_student_ss_1'];

  $sql = myQuery("DELETE FROM access_student_ss_1 WHERE id = '$delete_student'");

  confirm($sql);

  set_message("Student has been deleted!");

   header("Location:index.php?view_students_ss_one");

}


 ?>

