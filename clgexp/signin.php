<?php require_once("connect.php");?>
<?php require_once("functions.php");?>
<?php
	$uname= $_POST['uname'];
	$Fname= $_POST['Fname'];
  	$Lname= $_POST['Lname'];
  	$email= $_POST['email'];
  	$password=$_POST['password'];
 // $password_hash = md5('$password');
    	$query = mysqli_query($conn, "SELECT * FROM login WHERE username='$uname'");
        	if (mysqli_num_rows($query)!=0)
            	{
                	echo "Username already exists";
            	}
	         else
	         	{  
		              $query = "INSERT INTO login(username,firstname,lastname,email,password) VALUES ('{$uname}','{$Fname}','{$Lname}','{$email}','{$password}')"; 
		              $user_registered = mysqli_query($conn,$query);
		              signed($user_registered);  
	       		}

?>
<?php
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sign up</title>
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <section class="container">
    				<form action="signin.php" method="POST">

		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="uname" maxlength="10" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>First Name</label>
					<input type="" name="Fname" maxlength="125" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Last Name</label>
					<input type="" name="Lname" maxlength="25" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="password" name="password" maxlength="16" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="email" name="email" maxlength="30" class="form-control" id="" value="">
				</div>			
				
				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Sigh up for our newsletter
				</div>

				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Send notifications to this email
				</div>				
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The College Explorer Terms and Conditions
				</p>
				<p>
					While rare, articles are subject to change based on actual news fluctuations - 
					should such a fluctuation happen, we may change it without any prior information. 
				</p>
				<p>
					Should there be an error in the description of the college, we will provide you with a full information and the resources (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our sources ability to provide the information. (Paragraph 13.5.6)
				</p>
				
				<div id="success"></div>
                                <button type="submit" class="btn btn-xl">Register</button>
                            </div>
			</div>
		</div>
		</form>
	</section>
</div>
</body>
</html>