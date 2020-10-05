<?php 

if(isset($_GET['delete_user'])){
  
  $delete_user = $_GET['delete_user'];

  $sql = myQuery("DELETE FROM users WHERE id = '$delete_user'");

  confirm($sql);

  set_message("User has been deleted!");

   header("Location:index.php?view_users");

}


 ?>

