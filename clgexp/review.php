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
			echo $row['reviewdb']."<br /><br />";
		} 
}
?>
<form action="review.php" method="POST">
<center><textarea name="review" rows="5" cols="70"></textarea></center><br><br>
<br><br><input type="submit" value="Review it!" name="submit">

<?php 
if(isset($_SESSION['user_id']))
	{  ?>
		<p><a href="Logout.php">Logout</a></p> <?php
	}
?>

  