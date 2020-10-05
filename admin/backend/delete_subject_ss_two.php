<?php 

if(isset($_GET['delete_subject_ss_two'])){
  
  $delete_subject = $_GET['delete_subject_ss_two'];

  $sql = myQuery("DELETE FROM access_subject_ss_2 WHERE id = '$delete_subject'");

  confirm($sql);

  set_message("Subject has been deleted!");

   header("Location:index.php?view_subject_sss_two");

}


 ?>

