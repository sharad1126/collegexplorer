<?php require_once("connect.php");?>
<?php 
session_start();
function signed($user_registered)
{
    if($user_registered)
        {
            echo "<script>document.location='login.php'</script>";
        }
    else 
        {
            die('Error, Please Try Again');  
        }
}

function confirm_logged($query_rows)
{  
        $query_rows1=mysqli_fetch_assoc($query_rows);
        $_SESSION['user_id']= $query_rows1['id'];
       echo "<script>document.location='s.php'</script>";
}

            
?>

