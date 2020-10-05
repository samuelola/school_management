<?php 

if(isset($_GET['delete_subject_ss_three'])){
  
  $delete_subject = $_GET['delete_subject_ss_three'];

  $sql = myQuery("DELETE FROM access_subject_ss_3 WHERE id = '$delete_subject'");

  confirm($sql);

  set_message("Subject has been deleted!");

   header("Location:index.php?view_subject_sss_three");

}


 ?>

