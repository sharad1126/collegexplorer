<?php require_once "connect.php" ?>
<?php 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
} ?>


<?php 
if(isset($_POST['ask']))
{
	$ans= $_POST['ask'];
	if(!empty($ans))
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$cid=$id;
			$query1= "INSERT INTO question(cid,questiondb) VALUES ('{$cid}', '{$ans}')";
			$result= mysqli_query($conn,$query1);
			$query = "SELECT * FROM question WHERE cid= ".$id." ";
			$result =mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result))
			 { echo $row['questiondb']."<br /><br />"; $qid= $row['qid']; echo $qid; }
			?>
			<form action="" method= "POST"><BR><br>
			asnwer<input type="text" name="a" ><br><br>
			<input type="submit">
			<?php
		}
	}
}
else
{
// display questions/ reviews	
	$query = "SELECT * FROM question WHERE cid= ".$id." ";
	$result =mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result))
	{ echo $row['questiondb']."<br /><br />"; $qid= $row['qid']; echo $qid; }
// display answers.
$query = "SELECT * FROM answer WHERE cid= ".$id." ";
	$result =mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result))
	{ echo $row['answerdb']."<br /><br />"; }
}

?>
<form action="" method= "POST"><BR><br>
Ask<br><input type="text" name="ask" ><br>
submit<br><input type="submit">

<?php	 
			if(isset($_POST['a']))
			{
				$a= $_POST['a']; 
				$id= $_GET['id'];
				$cid= $id;
				$query1= "INSERT INTO answer(cid,answerdb) VALUES ('{$cid}','{$a}')";
				$result= mysqli_query($conn,$query1);
				$query = "SELECT * FROM answer WHERE cid= ".$id." ";
				$result =mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result))
				{ echo $row['answerdb']."<br /><br />"; }

			}
?>
