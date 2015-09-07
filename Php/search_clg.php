<?php require_once("connect.php");?>
<?php 
	
	$query_show="SELECT * FROM india";
	$result_show = mysqli_query($conn,$query_show);
	$pos1=-1;
	$pos2=-1;
	$pos3=-1;
	$pos4=-1;
	while($tab1 = mysqli_fetch_assoc($result_show))
	{	
		$pos1 = $tab1['id1'];
		$str=$tab1['col1'];
		$query_show2="SELECT * FROM edu WHERE col2 = '{$str}'";
		$result_show2 = mysqli_query($conn,$query_show2);
		while($tab2 = mysqli_fetch_assoc($result_show2))
			{
				$pos2=$tab2['id2'];
				$query_show2 = "DELETE FROM edu WHERE col2 = '{$str}' LIMIT 1";
				$result_show2 = mysqli_query($conn, $query_show2);
			}
		$query_show3="SELECT * FROM eng WHERE col3='{$str}'";
		$result_show3 = mysqli_query($conn,$query_show3);
		while($tab3 = mysqli_fetch_assoc($result_show3))
			{
				$pos3=$tab3['id3'];
				$query_show3 = "DELETE FROM eng WHERE col3 = '{$str}' LIMIT 1";
				$result_show3 = mysqli_query($conn, $query_show3);
			}

		$query_show4 ="SELECT * FROM out WHERE col4='{$str}'";
		$result_show4 = mysqli_query($conn,$query_show4);
		if(!$result_show4)
			echo "error";
		while($tab4 = mysqli_fetch_assoc($result_show4))
			{
				$pos4=$tab4['id4'];
				$query_show4 = "DELETE FROM out WHERE col4 = '{$str}' LIMIT 1";
				$result_show4 = mysqli_query($conn, $query_show4);
			}
		$rnks=$pos1." ".$pos2." ".$pos3." ".$pos4;
		$query_insert_final= "INSERT INTO final_list(college,ranks) VALUES ('{$str}','{$rnks}')";
		$result = mysqli_query($conn,$query_insert_final);
		//$query_show = "DELETE FROM india WHERE col2 = '{$str}' LIMIT 1";
		//$result_show = mysqli_query($conn, $query_show);
	}




?>
