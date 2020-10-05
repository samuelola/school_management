<?php 

if(isset($_GET['delete_exam_grade'])){
  
  $delete_exam_grade = $_GET['delete_exam_grade'];

  $sql = myQuery("DELETE FROM exam_grade WHERE id = '$delete_exam_grade'");

  confirm($sql);

  set_message("Exam grade has been deleted!");

   header("Location:index.php?view_exam_grade");

}


 ?>

