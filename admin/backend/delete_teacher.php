<?php 

if(isset($_GET['delete_teacher'])){
  
  $delete_teacher = $_GET['delete_teacher'];

  $sql = myQuery("DELETE FROM access_teacher WHERE id = '$delete_teacher'");

  confirm($sql);

  set_message("Teacher has been deleted!");

   header("Location:index.php?view_teachers");

}


 ?>

