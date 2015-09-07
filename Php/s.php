<?php
session_start();
if(isset($_SESSION['user_id']))
{ ?> 
	<p><a href="Logout.php">Logout</a></p> <?php
		echo "you are logged in, fuck off bc"; 
}
else
	{ 
		echo "<script>document.location='login.php'</script>";
	}
?>

<p><a href="answer.php">Answer Question</a></p>
<p><a href="question_ask.php">Ask Question</a></p>
<p><a href="review.php">Review</a></p>

