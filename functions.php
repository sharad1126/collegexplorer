<?php require_once("connect.php");?>
<?php 
session_start();
function redirect_to($new_location) 
{
    header("Location: " . $new_location);
    exit;
}
function confirm_logged($user_id,$id,$flag)
{  
        if($flag==0)
        {
        $_SESSION['user_id']= $user_id;
        redirect_to("review.php?id=".urlencode($id));
        }
        else
        {
            $_SESSION['user_id']= $user_id;
            redirect_to("question.php?qid=".urlencode($id));
        }

}
           
?>

