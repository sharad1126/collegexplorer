<?php
session_start();
/*
This is the form part of login page, where user enters is username and password to login into website.
*/
//include "connect.php";
 error_reporting(1);
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="a_database";
  $conn = @mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );
  if( mysqli_connect_errno() )
	 {
  		 die("connection failed");
  		 echo mysqli_connect_error();
	 }
 // echo "connected \n";
if(isset($_POST['uname']) && isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['email'])&& isset($_POST['password']))
{
	$uname= $_POST['uname'];
	$Fname= $_POST['Fname'];
  $Lname= $_POST['Lname'];
  $email= $_POST['email'];
  $password= $_POST['password'];
 // $password_hash = md5('$password');
	 if(!empty($uname) && !empty($Fname) && !empty($Lname) && !empty($email) && !empty($password) )
    { 
      if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           { 
                $query1 = "SELECT username FROM login WHERE username= '{$uname}'";
                $result1 = mysqli_query($conn,$query1);
                $query_rows1 = mysqli_num_rows($result1);
                if($query_rows1!=0)
                  {
                    echo "username not available, please choose another";
                  }
                else
                  {
                        $query = "INSERT INTO login(username,firstname,lastname,email,password) VALUES ('{$uname}','{$Fname}','{$Lname}','{$email}','{$password}')"; 
                        $result = mysqli_query($conn,$query);
                       
                          if($result)
                            {
                               echo "<script>document.location='form.inc.php'</script>";
                               // redirect to login page.
                            }
                         else 
                            {
                              die('Error, Please Try Again');   
                               // die if unable to generate query.
                            }
                   }
            }
      else
          {
            echo "PLEASE ENTER VALID E-MAIL";
          } 
          /*  Email Validation is done and the values are inserted into the database. 
          */  
    }
  else
      {
       echo " Please Fill In All Details";
      }	 
}
?>
<?php
  // databse closing.
  mysqli_close($conn);
?>


<form action="signin.php" method="POST">
USERNAME<br><br> <input type="text" name="uname" maxlength="10"><br><br>
FIRST NAME <br><br> <input type="text" name="Fname" maxlength="125"><br><br>
LAST NAME<br><br> <input type="text" name="Lname" maxlength="25"><br><br>
E-MAIL<br><br> <input type="text" name="email" maxlength="30"><br><br>
PASSWORD<br><br> <input type="password" name="password" maxlength="16"><br><br>
<input type="submit" value="SIGN IN">
