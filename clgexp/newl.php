<?php require_once("connect.php"); ?>
<?php require_once("functions.php");?>

<?php
if(isset($_POST['uname']) && isset($_POST['password']) )
{
    $uname=  $_POST['uname'];
    $password=$_POST['password'];
    //$password_hash= md5($password);     
        $query_run = "SELECT * FROM login WHERE username='{$uname}' AND password = '{$password}'" ;
        $result_query = @mysqli_query($conn,$query_run); 
            if($result_query)
                {
                    //confirm_logged($result_query);
                  $query_rows1=mysqli_fetch_assoc($query_rows);
                  $_SESSION['user_id']= $query_rows1['id'];
                  //echo "<script>document.location='s.php'</script>";

                }
}
?>
<form action="newl.php" method="POST">
USERNAME<br><br> <input type="text" name="uname" maxlength="10"><br><br>
PASSWORD<br><br> <input type="password" name="password" maxlength="16"><br><br>
<input type="submit" name="LOG IN">
