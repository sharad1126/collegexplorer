<?php
session_start();
if(isset($_SESSION['user_id']))
{ ?> 
	<p><a href="logout.php">Logout</a></p> <?php
		echo "you are logged in, fuck off bc"; 
}
else
	{ 
		echo "wrong username or password";
	}
?>

<p><a href="answer.php">Answer Question</a></p>
<p><a href="question_ask.php">Ask Question</a></p>
<p><a href="review.php">Review</a></p>

