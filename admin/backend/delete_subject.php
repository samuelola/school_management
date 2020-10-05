<?php 

if(isset($_GET['delete_subject'])){
  
  $delete_subject = $_GET['delete_subject'];

  $sql = myQuery("DELETE FROM access_subject WHERE id = '$delete_subject'");

  confirm($sql);

  set_message("Subject has been deleted!");

   header("Location:index.php?view_subject_one");

}


 ?>

