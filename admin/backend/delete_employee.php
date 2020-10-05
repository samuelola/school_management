<?php 

if(isset($_GET['delete_employee'])){
  
  $delete_employee = $_GET['delete_employee'];

  $sql = myQuery("DELETE FROM access_employee WHERE id = '$delete_employee'");

  confirm($sql);

  set_message("Employee has been deleted!");

   header("Location:index.php?view_employee");

}


 ?>

