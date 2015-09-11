<?php require_once"connect.php" ?>
<?php  
   $query= "SELECT * FROM college_list";
   $result= mysqli_query($conn,$query);
   $row= mysqli_fetch_assoc($result);
?>
<?php while($row = @mysqli_fetch_assoc($result))  { $id=$row['clg_id']; //echo $id; ?>
<a href="one.php?id=<?php echo urlencode($id);?>"> <?php echo $row['college_name']; ?></a>
<br>
<?php    } 
?>  


