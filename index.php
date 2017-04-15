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
    <meta name="alexaVerifyID" content="7LESHyrS1lWMnsXWTssw59W72Qw"/>
    <meta name="google-site-verification" content="26YxG3oxu4JpQ14zZC_wzrXbAma-jIp_uS25a6cq0qY" />
    <!-- CSS and Js for slideshow on first page -->
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
    <script type="text/javascript" src="assets/js/modernizr.custom.86080.js"></script>
    <!-- CSS and Js for the nav bar and contact us page and easy scrolling -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" />
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-67982495-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script>
    function validateForm() {
        var x = document.forms["sent-message"]["mobileno"].value;
        var y = document.forms["sent-message"]["email"].value;
        var c = 0;
        var len;

        if (x == "") {
            alert("Name must be filled out");
            return false;
        } else if (isNaN(x)) {
            alert("Please fill in numbers");
            return false;
        } else if (x.length != 10) {
            alert("Enter 10 digits");
            return false;
        } else if (y[0] == "@") {
            alert("1st letter can't be @");
            return false;
        } else if (y[y.length - 1] == ".") {
            alert("Invalid");
            return false;
        } else {
            for (var i = 0; i < y.length; i++) {
                if (y[i] == "@" && (y[i + 1] == ".") || ((y[i] == "@") && (y[i - 1] == "_"))) {
                    alert("Invalid");
                    return false;
                } else if (y[i] == "@" && y[i + 1] != ".") {
                    c = 0;
                    len = y.length - 1 - i;
                    for (var j = i + 1; j < y.length; j++) {
                        if (y[j] != ".") {
                            c = c + 1;
                        }
                    }
                    if (c == len) {
                        alert('No dot used');
                        return false;
                    }
                }
            }
        }

    }
    </script>
</head>
<style>
    @media only screen and (max-width: 768px) {
    .space {
         padding-top: 0px;
    }
    #navbar {
        display: none;
    }
    #footer a {
        height: 500px;
        color: white;
    }
}

@media only screen and (min-width: 768px) {
    #navmob {
        display: none;
    }
    #footer a {
        color: white;
        height: 250px;
    }
}

#navmob li {
    display: inline;
    float: left;
    margin-left: 20px;
}

#navmob a {
    color: #FF746B;
}

#navmob a:hover {
    color: white;
}
</style>
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
        <nav class="navbar navbar-default" style="background-color: #3D3D3D; opacity: 1; text-align: center;border-radius:0px;height: 60px;top: 0;left: 0;width: 100%;z-index: 100;box-shadow: 2px 7px 7px rgba(100,100,100,0.49);border:none;">
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
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#contact"><span data-hover="CONTACT US">CONTACT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="navmob">
        <nav class="navbar navbar-inverse" style="background-color: #343833; text-align: center; width: 100%;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="font-family: 'Open Sans', sans-serif;color: #FF746B;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="colleges.php">COLLEGES</a></li>
                        <li><a href="maps.php">FOOD JOINT</a></li>
                        <li><a href="team.php">TEAM</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                        <li><a href="#contact">CONTACT US</a></li>
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
                <a href="colleges.php" target="_blank"><img src="assets/images/colleges.png" alt="Responsive image" style="height:175px; width:175px;"></a>
            </div>
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Facilities</h3>
                <a href="maps.php" target="_blank"><img src="assets/images/whatsclose.png" alt="Responsive image" style="height:150px; width:150px; padding-top: 10px;"></a>
            </div>
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Dates</h3>
                <a href="aboutus.php" target="_blank"><img src="assets/images/Importantdates.png" alt="Responsive image" style="height:150px; width:150px;padding-top: 10px;"></a>
            </div>
            <div class="col-md-3">
                <h3 style="padding-left: 35px;">Reviews</h3>
                <a href="colleges.php" target="_blank"><img src="assets/images/Authenticreviews.png" alt="Responsive image" style="height:150px; width:150px;padding-top: 10px;"></a>
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
                   <form name="sent-message" id="contactForm" onsubmit="return validateForm()" method="POST" action="index.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your name " id="name" required data-validation-required-message="Please enter your name" id="name" name="name" maxlength="25" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email id " id="email" required data-validation-required-message="Please enter your email-id" name="email" maxlength="40">
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
                                <button type="submit" class="btn btn-xl" style="background-color: #FC736A; color: white;">Send Message</button>
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
    <footer id="footer" style="background-color:#2E3444; margin-top: 30px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div id="footerlogo">
                        <a href="index.php"><img src="assets/images/favicon.png" alt="responsive-image" style="height:169px; width=169px; align:center; padding-top:20px;"></a>
                        <ul style="padding-left: 0px; padding-top: 10px; color: white;">&copy; CollegExplorer 2015</ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footertitle" style="color:#FF6E49;">LEARN MORE</h3>
                    <div class="learnmorelinks">
                        <ul><a href="aboutus.php" style="text-decoration: none;">ABOUT US</a></ul>
                        <ul><a href="privacy.php" style="text-decoration: none;">PRIVACY POLICY</a></ul>
                        <ul><a href="terms.php" style="text-decoration: none;">TERMS & CONDITIONS</a></ul>
                        <ul><a href="disclaimer.php" style="text-decoration: none;">DISCLAIMER</a></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footerTitle" style="color:#FF6E49;">Subscribe </h3>
                    <form id="footerSignupForm">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required="">
                        </div>
                        <button type="submit" style="background-color: #EEE5E9; border-color:#EEE5E9;">Get all important updates</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div id="connectCol">
                        <h3 class="footerTitle" style="color:#FF6E49;">Connect</h3>
                        <ul id="footerSocialBtns">
                            <a id="headerTwBtn" class="headerSocialBtn" href="https://www.twitter.com/collegexplorer" target="_blank"><img src="assets/images/twitter.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerFbBtn" class="headerSocialBtn" href="https://www.facebook.com/collegeexplorer" target="_blank"><img src="assets/images/facebook.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerliBtn" class="headerSocialBtn" href="#"><img src="assets/images/linkedin.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headergpBtn" class="headerSocialBtn" href="https://plus.google.com/+CollegexplorerIncollegexplorer" target="_blank"><img src="assets/images/googleplus.png" style="height:44px; width:44px;padding-top:10px;"></a>
                        </ul>
                        <div id="footerAddress" style=" padding-top:10px;">
                            <br>
                            <span id="addressTitle" style="color: white;">CollegExplorer</span>
                        </div>
                        <div id="footerEmail"><a href="collegexplorer@gmail.com" style="text-decoration: none;">collegexplorer@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
