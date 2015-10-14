<?php require_once "connect.php" ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About CollegExplorer</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans|Dosis' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" />
</head>

<body>
    <!-- navbar   -->
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
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="maps.php"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#"><span data-hover="TEAM">TEAM</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Objective -->
    <div class="container">
        <h2 class="section-heading" style="color: #fd5f54; font-family: 'Dosis', sans-serif; font-size: 50px;text-align:center;">Our Objective</h2>
        <br>
        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif;">CollegExplorer aims at providing students an authentic information about the leading engineering colleges in India. We also provide students the information regarding the food joints near their colleges and verified professional counsellors who can help the students select the most appropriate college and stream.</p>
        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif;">The website focusses on college faculties, studies, opportunities, placements, cultural events, extracurricular activities, fests, competitions etc. We also provide them the names of the closest food joints, atms, cafes, medical stores, hospitals etc on a map which could help them navigate faster.</p>
        <br>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="assets/images/restaurant.jpg" class="img-responsive" alt="Responsive image">
                <h4 style="font-family: 'Josefin Sans', sans-serif;font-size:22px;">Facts & FAQ's</h4>
                <p style="font-family: 'Josefin Sans', sans-serif;font-size:18px;">CollegExplorer provides all facts about the colleges and their reviews with a facilty to ask questions about the colleges, answered by the respective college students</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/images/restaurant.jpg" class="img-responsive" alt="Responsive image">
                <h4 style="font-family: 'Josefin Sans', sans-serif;font-size:22px;">Facilities</h4>
                <p style="font-family: 'Josefin Sans', sans-serif;font-size:18px;">CollegExplorer provides all facilities to students at no cost that no other player in the same segment offers today like food joints, atms and other needs near colleges</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/images/restaurant.jpg" class="img-responsive" alt="Responsive image">
                <h4 style="font-family: 'Josefin Sans', sans-serif;font-size:22px;">Important Dates</h4>
                <p style="font-family: 'Josefin Sans', sans-serif;font-size:18px;">CollegExplorer provides all important dates - application forms, results, counselling, and other links at one place</p>
            </div>
        </div>
        <br>
        <br>
        <!-- Our Story -->
        <h2 class="section-heading" style="color: #fd5f54; font-family: 'Dosis', sans-serif; font-size: 50px;text-align:center;">Our Story</h2>
        <br>
        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif;">The idea came to us admist the maggi sessions.</p>
    </div>
    <!-- footer     -->
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
                    <form id="footerSignupForm" method="POST" action="aboutus.php">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput"  name ="email" class="form-control" type="email" placeholder="Email address" aria-required="true" required="">
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
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
error_reporting(1);
  if(isset($_POST['email']))
    {
        $email=  $_POST['email'];
        if(!empty($email))
          {  
            $query = mysqli_query($conn, "SELECT * FROM subscribe WHERE email='$email'");
            if (mysqli_num_rows($query)!=0)
                {
                    echo " User already subscribed! ";
                }
          else {
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
} 
          ?>
