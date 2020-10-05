<?php 

if(isset($_GET['delete_class'])){
  
  $delete_class = $_GET['delete_class'];

  $sql = myQuery("DELETE FROM access_class WHERE id = '$delete_class'");

  confirm($sql);

  set_message("Class has been deleted!");

   header("Location:index.php?view_class");

}


 ?>

