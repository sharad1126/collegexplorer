<?php require_once "connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Private Policies</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/privacy.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-default" style="background-color: rgba(51,51,51,0.8);opacity: 1;text-align: center;border-radius:0px;height: 60px;top: 0;left: 0;width: 100%;z-index: 100;box-shadow: 2px 7px 7px rgba(100,100,100,0.49);border:none;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="collegexplorer.html" style="width: 130px;height: 25px;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <div class="menu-menu-glowne-en-container">
                            <ul id="menu-menu-glowne-en" class="menu">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="collegexplorer.php"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="maps.php"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="container-fluid">
        <div class="row display-area">
            <div class="col-sm-4 display-ce">
                <h2 style="padding-top: 250px; color: white;">CollegExplorer ka Logo</h2>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12" style="height: 550px; overflow: scroll; text-align: justify;">
                        <br>
                        <h4 style="color: #ED4F44"><strong>Privacy Policy</strong></h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">This privacy policy has been compiled to better serve those who are concerned with how their 'Personally identifiable information' (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.</p>
                        <p>What personal information do we collect from the people that visit our blog, website or app?</p>
                        <p>When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number or other details to help you with your experience.</p>
                        <p>When do we collect information?</p>
                        <p>We collect information from you when you register on our site, subscribe to a newsletter, fill out a form contact us or enter information on our site.</p>
                        <p>How do we use your information?</p>
                        <p>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</p>
                        <p>• To personalize user's experience and to allow us to deliver the type of content and product offerings in which you are most interested.</p>
                        <p>• To improve our website in order to better serve you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 0px; margin: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center quote">
                    <div class="space">
                    </div>
                    <q style="font-family: 'PT Mono', ;">If you don’t build your dream, someone else will hire you to help them build theirs.</q>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" style="background-color:#2E3444; height:250px;">
        <div class="container-fluid" style="height:250px;">
            <div class="row">
                <div class="col-md-3">
                    <div id="footerlogo">
                        <img src="http://www.mantratec.com/images/CE.jpg" alt="responsive-image" style="height:169px; width=169px; align:center; padding-left:20px; padding-top:20px; padding-bottom:20px; ">
                        <ul style="padding-left:20px; color:white;">&copy; CollegExplorer 2015</ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footertitle" style="color:#FF6E49;">LEARN MORE</h3>
                    <div class="learnmorelinks">
                        <ul><a href="#" style="color:white;text-decoration: none;">CONTACT</a></ul>
                        <ul><a href="#" style="color:white;text-decoration: none;">ABOUT</a></ul>
                        <ul><a href="#" style="color:white;text-decoration: none;">OPPORTUNITIES</a></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footerTitle" style="color:#FF6E49;">Subscribe </h3>
                    <form id="footerSignupForm" method="POST" action="#footer">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput" class="form-control" name="email" type="email" placeholder="Email address" aria-required="true" required="">
                        </div>
                        <button type="submit" style="background-color: #EEE5E9; border-color:#EEE5E9;">Get all important updates</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div id="connectCol">
                        <h3 class="footerTitle" style="color:#FF6E49; padding-left:30px; ">Connect</h3>
                        <ul id="footerSocialBtns">
                            <a id="headerTwBtn" class="headerSocialBtn" href="https://www.twitter.com/collegexplorer" target="_blank"><img src="assets/images/twitter.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerFbBtn" class="headerSocialBtn" href="https://www.facebook.com/collegeexplorer" target="_blank"><img src="assets/images/facebook.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headerliBtn" class="headerSocialBtn" href="https://www.linkedin.com/collegexplorer" target="_blank"><img src="assets/images/linkedin.png" style="height:44px; width:44px;padding-top:10px;"></a>
                            <a id="headergpBtn" class="headerSocialBtn" href="https://www.google.com/collegexplorer" target="_blank"><img src="assets/images/googleplus.png" style="height:44px; width:44px;padding-top:10px;"></a>
                        </ul>
                        <div id="footerAddress" style="color:white; padding-top:10px;padding-left:30px;">
                            <span id="addressTitle" style="color:white;">CollegExplorer</span>
                            <br> Ballupur Chowk,
                            <br> Dehradun, UK 248001
                        </div>
                        <div id="footerEmail"><a href="mailto:collegexplorer@gmail.com" style="color:white;text-decoration: none;padding-left:30px;">collegexplorer@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php 
error_reporting(1);
  if(isset($_POST['email']))
    {
        $email=  $_POST['email'];
        if(!empty($email))
          {  
          if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           {          
                 $query = "INSERT INTO subscribe(email) VALUES ('{$email}')"; 
                 $result = mysqli_query($conn,$query);
                 if(!$result)
                        {
                          die('Error, Please Try Again');  
                      }
          }
         }
    } 
          ?>

