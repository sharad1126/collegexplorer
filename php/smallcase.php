<?php require_once "connect.php" ?>
<?php 
$query = "SELECT LOWER('col1') FROM edu";
$query_result = mysqli_query($conn, $query);
$query2 = "SELECT * FROM edu";
$result2 = mysqli_query($conn, $query2);
while($row = mysqli_fetch_assoc($result2))
{
	echo $row['col1']."<br/>";
} 
?>