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
   <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome To CollegExplorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico">
    <!-- CSS and Js for slideshow on first page -->
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
    <script type="text/javascript" src="assets/js/modernizr.custom.86080.js"></script>
    <!-- CSS and Js for the nav bar and contact us page and easy scrolling -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" />
</head>

<body>
    <!--slideshow-->
    <section id="front-page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
            <li><span>Image 07</span></li>
            <li><span>Image 08</span></li>
            <li><span>Image 09</span></li>
        </ul>
    </section>
    <!--menu bar-->
    <section id="navbar">
        <nav class="navbar navbar-default" style="background-color: rgba(51,51,51,0.8);opacity: 1;text-align: center;border-radius:0px;height: 60px;top: 0;left: 0;width: 100%;z-index: 100;box-shadow: 2px 7px 7px rgba(100,100,100,0.49);border:none;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="width: 130px;height: 25px; font-family: 'Open Sans', sans-serif;color: #fd5f54; margin-top: 8px; margin-left: 4px;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <div class="menu-menu-glowne-en-container">
                            <ul id="menu-menu-glowne-en" class="menu">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map.php" target="_blank"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#contact"><span data-hover="CONTACT US">CONTACT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
     <div class="space" style="padding-top: 650px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Colleges</h3>
                <img src="assets/images/colleges.png" alt="Responsive image" style="height:175px; width:175px;">
            </div>
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Facilities</h3>
                <img src="assets/images/whatsclose.png" alt="Responsive image" style="height:150px; width:150px; padding-top: 10px;">
            </div>
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Dates</h3>
                <img src="assets/images/importantdates.png" alt="Responsive image" style="height:150px; width:150px;padding-top: 10px;">
            </div>
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Reviews</h3>
                <img src="assets/images/authenticreviews.png" alt="Responsive image" style="height:150px; width:150px;padding-top: 10px;">
            </div>
        </div>
    </div>
    <div class="space" style="padding-top: 80px;">
    </div>
    <!--   Contact Us    -->
    <section id="contact" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br>
                    <h1 class="section-heading" style="color: #fd5f54; font-family: 'Dosis', sans-serif; font-size: 50px;">Contact Us</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <form name="sent-message" id="contactForm" method="POST" action="index.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your name " id="name" required data-validation-required-message="Please enter your name" id="name" name="name" maxlength="25" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email id " id="email" required data-validation-required-message="Please enter your email-id" name="email" maxlength="25">
                                </div>
                                <div class="form-group">
                                    <input type="mobileno" class="form-control" placeholder="Enter your mobile number " id="mobileno" required data-validation-required-message="Please enter your mobile number" name="contactno" maxlength="13">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter your message " id="message" required data-validation-required-message="Message" name="msg" maxlength="150" rows="10" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" style="background-color: #F28C8E;">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- footer     -->
    <footer id="footer" style="background-color:#2E3444; height:250px; margin-top: 30px;">
        <div class="container-fluid" style="height:250px;">
            <div class="row">
                <div class="col-md-3">
                    <div id="footerlogo">
                        <a href="index.php"><img src="assets/images/favicon.png" alt="responsive-image" style="height:169px; width=169px; align:center; padding-left:20px; padding-top:20px; padding-bottom:20px; "></a>
                        <ul style="padding-left:20px; color:white;">&copy; CollegExplorer 2015</ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footertitle" style="color:#FF6E49;">LEARN MORE</h3>
                    <div class="learnmorelinks">
                        <ul><a href="aboutus.php" style="color:white;text-decoration: none;">ABOUT US</a></ul>
                        <ul><a href="privacy.php" style="color:white;text-decoration: none;">PRIVACY POLICY</a></ul>
                        <ul><a href="terms.php" style="color:white;text-decoration: none;">TERMS & CONDITIONS</a></ul>
                        <ul><a href="disclaimer.php" style="color:white;text-decoration: none;">DISCLAIMER</a></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footerTitle" style="color:#FF6E49;">Subscribe </h3>
                    <form id="footerSignupForm" method="POST" action="index.php">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required=""  name="email">
                        </div>
                        <button type="submit" style="background-color: #EEE5E9; border-color:#EEE5E9;">Get all important updates</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div id="connectCol">
                        <h3 class="footerTitle" style="color:#FF6E49; padding-left:30px; ">Connect</h3>
                        <ul id="footerSocialBtns">
                            <a id="headerTwBtn" class="headerSocialBtn" href="https://twitter.com/CollegExplorer" target="_blank"><img src="assets/images/twitter.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerFbBtn" class="headerSocialBtn" href="https://www.facebook.com/collegeexplorer" target="_blank"><img src="assets/images/facebook.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerliBtn" class="headerSocialBtn" href="#"><img src="assets/images/linkedin.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headergpBtn" class="headerSocialBtn" href="https://plus.google.com/u/0/b/117050924670156821117/117050924670156821117/posts/p/pub" target="_blank"><img src="assets/images/googleplus.png" style="height:44px; width:44px;padding-top:10px;"></a>
                        </ul>
                        <div id="footerAddress" style="color:white; padding-top:10px;padding-left:30px;">
                            <br>
                            <span id="addressTitle" style="color:white;">CollegExplorer</span>
                        </div>
                        <div id="footerEmail"><a href="collegexplorer@gmail.com" style="color:white;text-decoration: none;padding-left:30px;">collegexplorer@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <script type="text/javascript" href="assets/js/jquery.easing.1.3.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php 
error_reporting(1);
  if(isset($_POST['email']))
    {
        $email=  mysqli_real_escape_string($conn,htmlentities($_POST['email']));
        if(!empty($email))
          {  
          if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           {          
                 $query = "INSERT INTO subscribe(email) VALUES ('{$email}')"; 
                 $result = mysqli_query($conn,$query);
          }
         }
    } 
          ?>
