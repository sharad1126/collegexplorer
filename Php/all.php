<?php require_once("connect.php");?>
<?php 
session_start();
if(isset($_POST['submit']))
{
	if(isset($_SESSION['user_id']))
	{   	 
			if(isset($_POST['review']))
				{
					$review= $_POST['review'];
					if(!empty($review))
					{
						$id= $_SESSION['user_id'];
						$query = "INSERT INTO review(reviewdb, user_id) VALUES ('{$review}', '{$id}')"; 
		              	$result = mysqli_query($conn,$query);
		              	$query_show="SELECT * FROM review";
						$result_show=mysqli_query($conn,$query_show);
						while($row=mysqli_fetch_assoc($result_show))
							{
								echo $row['reviewdb']."<br /><br />";
							}
					}
					else
						{ echo "<script type='text/javascript'>alert('Write Review!')</script>";}
				}

			if(isset($_POST['question']))
			{
				$question= $_POST['question'];
				if(!empty($question))
				{
					$id= $_SESSION['user_id'];
					$query = "INSERT INTO question(questiondb) VALUES ('{$question}')"; 
		            $result = mysqli_query($conn,$query);
		            $query_show="SELECT * FROM question";
					$result_show=mysqli_query($conn,$query_show);
					while($row=mysqli_fetch_assoc($result_show))
					{
						echo $row['questiondb']."<br /><br />";
					}
				}
				else
					{ echo "<script type='text/javascript'>alert('Ask Question!')</script>";}
			}
			
			if(isset($_POST['answer']))
				{
					$answer= $_POST['answer'];
					if(!empty($answer))
					{
						$id= $_SESSION['user_id'];
							$query = "INSERT INTO answer(answerdb , user_id) VALUES ('{$answer}', '{$id}')"; 
			              	$result = mysqli_query($conn,$query);
					}
					else
						{ echo "<script type='text/javascript'>alert('Answer It!')</script>";}
				}
				$query_show="SELECT * FROM answer";
				$result_show=mysqli_query($conn,$query_show);
				while($row=mysqli_fetch_assoc($result_show))
				{
					echo $row['answerdb']."<br /><br />";
				}
	}	
	
	else
		{
			echo "<script>document.location='login.php'</script>";
		}	
}
else
{
	$query_show="SELECT * FROM review";
	$result_show=mysqli_query($conn,$query_show);
	while($row=mysqli_fetch_assoc($result_show))
		{
			//echo "REVIEWS <br>"
			echo $row['reviewdb']."<br /><br />";
		} 
	$query_show="SELECT * FROM question";
	$result_show=mysqli_query($conn,$query_show);
	while($row=mysqli_fetch_assoc($result_show))
		{
			echo $row['questiondb']."<br /><br />";
		}
	$query_show="SELECT * FROM answer";
	$result_show=mysqli_query($conn,$query_show);
	while($row=mysqli_fetch_assoc($result_show))
		{
			echo $row['answerdb']."<br /><br />";
		} 	 	
}
?>
<form action="all.php" method="POST">
<center><textarea name="review" rows="5" cols="70"></textarea></center><br><br>
<br><br><input type="submit" value="Review it!" name="review">
<br><br><input type="submit" value="Answer it!" name="answer">
<br><br><input type="submit" value="Ask it!" name="question">

<?php 
if(isset($_SESSION['user_id']))
	{  ?>
		<p><a href="Logout.php">Logout</a></p> <?php
	}
?>

  