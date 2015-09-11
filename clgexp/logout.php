<?php
  session_start();
  unset($_SESSION['user_id']);
 header('Location: colleges.php');
 ?>
 <?php
  mysqli_close($conn);

?>