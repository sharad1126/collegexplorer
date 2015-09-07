<?php
  session_start();
  unset($_SESSION['user_id']);
  // session_destroy();
 // Jump to login page
 header('Location: login.php');
 ?>
 <?php
  mysqli_close($conn);

?>