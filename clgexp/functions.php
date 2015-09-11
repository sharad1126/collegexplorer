<?php require_once("connect.php");?>
<?php 
session_start();
function redirect_to($new_location) 
{
    header("Location: " . $new_location);
    exit;
    }

function signed($user_registered,$id)
{
    if($user_registered)
        {
            redirect_to("index.php?id=".urlencode($id));

        }
    exit;
}

function confirm_logged($query_rows,$id)
{  
        $query_rows1=mysqli_fetch_assoc($query_rows);
        $_SESSION['user_id']= $query_rows1['id'];
        $user_logged=1;
        redirect_to("review1.php?id=".urlencode($id));

}
           
?>

