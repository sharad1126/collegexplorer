<?php require_once("connect.php"); ?>
<?php 
error_reporting(1);
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contactno']) && isset($_POST['msg']))
	{
		$name =  $_POST['name'];
		$email=	 $_POST['email'];
 		$contactno = $_POST['contactno'];
 		$msg =  $_POST['msg'];
	 	if(!empty($name) && !empty($email) && !empty($contactno) && !empty($msg) )
  		  {  
          if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           {          
        		 $query = "INSERT INTO contact(name,email,contactno,msg) VALUES ('{$name}','{$email}','{$contactno}','{$msg}')"; 
        		 $result = mysqli_query($conn,$query);
          	     if(!$result)
         			    {
            			  die('Error, Please Try Again');  
           			  }
          }
          else
          { 
            echo "PLEASE ENTER VALID EMAIL";
          } 
          /*  Email Validation is done and the values are inserted into teh database. 
          */  
    	}
      /*  if the user doesn't fill in all the details then, we return a message. 
      */
    else
     	{
      		echo " Please Fill In All Details";
    	}	 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-heading">Contact Us</h1>
                    <p class="section-subheading">We will contact you ASAP</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sent-message" id="contactForm" method="POST" action="contactus.php">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your name " id="name" name="name" maxlength="25" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email id " id="email" required data-validation-required-message="Please enter your email-id" name="email" maxlength="25">
                                </div>
                                <div class="form-group">
                                    <input type="mobileno" class="form-control" placeholder="Enter your mobile numnber " id="mobileno" required data-validation-required-message="Please enter your mobile number" name="contactno" maxlength="13">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter your message " id="message" required data-validation-required-message="Message" name="msg"  maxlength="150" rows="10" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
