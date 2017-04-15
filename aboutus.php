<?php require_once"connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About CollegExplorer</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans|Dosis' rel='stylesheet' type='text/css'>
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
</head>
 <style>
    @media only screen and (max-width: 768px) {
    .space {
        display: none;
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
    <!-- navbar   -->
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
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="index.php"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map.php" target="_blank"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="colleges.php">COLLEGES</a></li>
                        <li><a href="maps.php">FOOD JOINTS</a></li>
                        <li><a href="team.php">TEAM</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Objective -->
    
    <div class="container">
        <h2 class="section-heading" style="color: #fd5f54; font-family: 'Dosis', sans-serif; font-size: 50px;text-align:center;">Our Objective</h2>
        <br>
        <br>

        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif; ">CollegExplorer aims at providing students an authentic and raw information of the leading engineering colleges in India by the students of the college to our visitors directly. We also provide students the information regarding the facilities that are available to the students near their college. The students are also allowed to participate in a Question Answer forum to traverse even deeper into the college and get to know more about the college by the students of that college themselves.</p>
        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif;">The website focusses on college faculties, studies, opportunities, placements, cultural events, extracurricular activities, fests, competitions etc. We also provide them the names of the closest food joints, atms, cafes, medical stores, hospitals etc on a map which could help them navigate faster.</p>
        <br>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="assets/images/qa.png" alt="Responsive image" style="width:350px;height:230px;">
                <h4 style="font-family: 'Josefin Sans', sans-serif;font-size:22px;">Facts & FAQ's</h4>
                <p style="font-family: 'Josefin Sans', sans-serif;font-size:18px;">CollegExplorer provides all facts about the colleges and their reviews with a facilty to ask questions about the colleges, answered by the respective college students</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/images/food1.jpg" alt="Responsive image" style="width:350px;height:230px;">
                <h4 style="font-family: 'Josefin Sans', sans-serif;font-size:22px;">Facilities</h4>
                <p style="font-family: 'Josefin Sans', sans-serif;font-size:18px;">CollegExplorer provides all facilities to students at no cost that no other player in the same segment offers today like food joints, atms and other needs near colleges</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="assets/images/dates.png" alt="Responsive image" style="width:350px;height:230px;">
                <h4 style="font-family: 'Josefin Sans', sans-serif;font-size:22px;">Important Dates</h4>
                <p style="font-family: 'Josefin Sans', sans-serif;font-size:18px;">CollegExplorer provides all important dates - application forms, results, counselling, and other links at one place</p>
            </div>
        </div>
        <br>
        <br>
        <!-- Our Story -->
        <h2 class="section-heading" style="color: #fd5f54; font-family: 'Dosis', sans-serif; font-size: 50px; text-align:center;">Our Story</h2>
        <br>
        <br>
        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif; text-align: justify;">The idea of CollegExplorer knocked our minds way back when we ourselves were in our school time and we used to surf various websites in order to trove relevant information of our dream Colleges, food and reviews being of the prime importance apparently. But lamentably it was quite tedious to stack all information from different sources.</p>
        <br>
        <p style="font-size:20px;font-family: 'Josefin Sans', sans-serif; text-align: justify;">Eventually we creeped into the college life and began learning the imperative things. Once we were done, it was time to implement what we had so long in our mind to be paraded to the world so that they could have an easy going while finding a good college not just in terms of rankings but also in terms of authentic reviews from the ongoing students of the college and the most important part being the facilities and the ease with which these facilities like Food Joints, ATMs and Medical Stores etc. are available to the students.</p>
        <div class="blank" style="margin-top: 70px;">
        </div>
    </div>
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
                 if(!$result)
                        {
                          die('Error, Please Try Again');  
                      }
          }
         }
    } 
          ?>
