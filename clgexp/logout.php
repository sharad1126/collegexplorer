<?php
  session_start();
  unset($_SESSION['user_id']);
<<<<<<< HEAD
  // session_destroy();
 // Jump to login page
 header('Location: index.php');
=======
 header('Location: collegexplorer.php');
>>>>>>> 6db6a32ebca07bb57f5556266dac7c4d60bba8ba
 ?>
 <?php
  mysqli_close($conn);

?>