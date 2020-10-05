<?php 

if(isset($_GET['delete_subject_three'])){
  
  $delete_subject = $_GET['delete_subject_three'];

  $sql = myQuery("DELETE FROM access_subject_js_3 WHERE id = '$delete_subject'");

  confirm($sql);

  set_message("Subject has been deleted!");

   header("Location:index.php?view_subject_three");

}


 ?>

