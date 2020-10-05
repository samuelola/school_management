<?php 

if(isset($_GET['delete_subject_ss_one'])){
  
  $delete_subject = $_GET['delete_subject_ss_one'];

  $sql = myQuery("DELETE FROM access_subject_ss_1 WHERE id = '$delete_subject'");

  confirm($sql);

  set_message("Subject has been deleted!");

   header("Location:index.php?view_subject_sss_one");

}


 ?>

