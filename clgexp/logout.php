<?php
  session_start();
  unset($_SESSION['user_id']);
 header('Location: collegexplorer.php');
 ?>
 <?php
  mysqli_close($conn);

?>