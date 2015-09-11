<?php require_once("connect.php");?>
<?php 
session_start();
if(isset($_POST['submit']))
{
	if(isset($_SESSION['user_id'])) 
	{   
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
	$query_show="SELECT * FROM answer";
	$result_show=mysqli_query($conn,$query_show);
	while($row=mysqli_fetch_assoc($result_show))
		{
			echo $row['answerdb']."<br /><br />";
		} 
}
?>
<form action="answer.php" method="POST">
<center><textarea name="answer" rows="5" cols="70"></textarea></center><br><br>
<br><br><input type="submit" value="Answer it!" name="submit">
<?php 
if(isset($_SESSION['user_id']))
	{  ?>
		<p><a href="Logout.php">Logout</a></p> <?php
	}
?>
 
 
