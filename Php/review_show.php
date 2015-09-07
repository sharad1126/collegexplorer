<?php require_once("connect.php");?>
<?php
$query_show="SELECT * FROM review";
$result_show=mysqli_query($conn,$query_show);
while($row=mysqli_fetch_assoc($result_show))
	{
		echo $row['reviewdb']."<br /><br />";
	} 
?>
