<?php require_once"connect.php" ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Team</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="shortcut icon" href="favicon.png" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/team.css">
        <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
        <script type="text/javascript" src="assets/js/ga.js"></script>
        <script type="text/javascript" href="assets/js/modernizr.js"></script>
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
.learnmorelinks ul {
	margin-top: 10px;
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
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
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
                        <li><a href="maps.php">FOOD JOINT</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
        <section role="main">
            <div class="grid-wrap" style="position: relative; height: 924.75px;">
                <header class="block-wrap" data-rowspan="2" data-colspan="2" style="position: absolute; width: 616.5px; height: 616.5px; top: 0px; left: 0px;">
                    <hgroup class="block text-only" style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; min-height: 0px;">
                        <br>
                        <h1 style="text-align: center; color: #FE5F55; font-family: 'Dancing Script', cursive; font-size: 45px; word-spacing: 7px;">Meet The Team</h1>
                        <br>
                        <br>
                        <q style="font-family: 'Josefin Sans', sans-serif; font-size: 35px; color: white;">The best teamwork comes from men who are working independently toward one goal in unison.</q><span style="color: white; font-size: 23px; margin-left: 20px;"> - James Cash Penney</span>
                        <br>
                        <br>
                        <br>
                        <br>
                        <q style="font-family: 'Josefin Sans', sans-serif; font-size: 35px; color: white;">If things seem under control, you are just not going fast enough.</q><span style="color: white; font-size: 23px; margin-left: 20px;"> - Mario Andretti</span>
                        </hgroup>
                </header>
                <ul>
                    <li class="block-wrap" data-rowspan="1" data-colspan="1" style="position: absolute; width: 308.25px; height: 308.25px; top: 0px; left: 616.5px;">
                        <figure class="block team-block" style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; min-height: 0px;">
                            <a class="link-block img_loaded" href="team_vatsal.php">
                                <img class="resize" src="assets/images/vatsal.jpg" style="transition-property: all; transition-duration: 0s; transition-timing-function: ease; opacity: 1;">
                            </a>
                            <h3><a href="team_vatsal.php">Vatsal Shrivastav</a></h3>
                            <p>Front End Developer</p>
                        </figure>
                    </li>
                    <li class="block-wrap" data-rowspan="1" data-colspan="1" style="position: absolute; width: 308.25px; height: 308.25px; top: 0px; left: 924.75px;">
                        <figure class="block team-block" style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; min-height: 0px;">
                            <a class="link-block img_loaded" href="team_sharad.php">
                                <img class="resize" src="assets/images/sharad.jpg" style="transition-property: all; transition-duration: 0s; transition-timing-function: ease; opacity: 1;">
                            </a>
                            <h3><a href="team_sharad.php">Sharad Agarwal</a></h3>
                            <p>Front End Developer</p>
                        </figure>
                    </li>
                    <li class="block-wrap" data-rowspan="1" data-colspan="1" style="position: absolute; width: 308.25px; height: 308.25px; top: 308.25px; left: 616.5px;">
                        <figure class="block team-block" style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; min-height: 0px;">
                            <a class="link-block img_loaded" href="team_yash.php">
                                <img class="resize" src="assets/images/yash.jpg" style="transition-property: all; transition-duration: 0s; transition-timing-function: ease; opacity: 1;">
                            </a>
                            <h3><a href="team_yash.php">Yash Jain</a></h3>
                            <p>Back End Developer</p>
                        </figure>
                    </li>
                    <li class="block-wrap" data-rowspan="1" data-colspan="1" style="position: absolute; width: 308.25px; height: 308.25px; top: 308.25px; left: 924.75px;">
                        <figure class="block team-block" style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; min-height: 0px;">
                            <a class="link-block img_loaded" href="team_hari.php">
                                <img class="resize" src="assets/images/hari.jpg" style="transition-property: all; transition-duration: 0s; transition-timing-function: ease; opacity: 1;">
                            </a>
                            <h3><a href="team_hari.php">Hari Prakash</a></h3>
                            <p>Moderator</p>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>
        <!-- footer     -->
        <footer id="footer" style="background-color:#2E3444; margin-top: 30px;">
        <div class="container-fluid">
            <div class="row" style="padding-top: 20px;">
                <div class="col-md-3">
                    <div id="footerlogo">
                        <a href="index.php"><img src="assets/images/favicon.png" alt="responsive-image" style="height:150px; width=150px; align:center;"></a>
                        <ul style="padding-left: 0px; padding-top: 10px; color: white; font-size: 15px;">&copy; CollegExplorer 2015</ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footertitle" style="color:#FF6E49;">LEARN MORE</h3>
                    <div class="learnmorelinks" style="font-size: 15px; font-weight: 900px; margin-left: 30px;">
                        <ul><a href="aboutus.php" style="text-decoration: none;">ABOUT US</a></ul>
                        <ul><a href="privacy.php" style="text-decoration: none;">PRIVACY POLICY</a></ul>
                        <ul><a href="terms.php" style="text-decoration: none;">TERMS & CONDITIONS</a></ul>
                        <ul><a href="disclaimer.php" style="text-decoration: none;">DISCLAIMER</a></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footerTitle" style="color:#FF6E49;">Subscribe</h3>
                    <form id="footerSignupForm">
                        <div class="form-group" style="padding-top: 10px;">
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
                            <span id="addressTitle" style="color: white; font-size: 15px;">CollegExplorer</span>
                        </div>
                        <div id="footerEmail" style="font-size: 15px;"><a href="collegexplorer@gmail.com" style="text-decoration: none;">collegexplorer@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="assets/js/script-compiled.1394194762.js"></script>
        <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36719575-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        </script>
        <iframe id="frame-onFontResize1445814669000" class="div-onfontresize" style="width: 100em; height: 10px; position: absolute; border-width: 0px; top: -5000px; left: -5000px;"></iframe>
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
