<?php require_once"connect.php" ?>
<?php  
   $query= "SELECT * FROM college_list";
   $result= mysqli_query($conn,$query);
   $row= mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Of Engineering Colleges</title>
    <meta name="description" content="List Of Engineering colleges" />
    <meta name="keywords" content="Engineering Colleges, CollegeExplorer, Colleges" />
    <meta name="author" content="Vatsal Shirvastav" , "Sharad Agarwal" />
    <link rel="shortcut icon" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/demo3.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/component3.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="assets/js/modernizr.custom1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
    <!-- Search Bar-->
    <link rel="stylesheet" type="text/css" href="assets/css/component4.css" />
    <!-- navbar -->
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
</head>

<body class="loading">
    <!--menu bar-->
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
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="collegexplorer.html"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map5.html"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.html"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div id="container" class="cf">
        <div id="main" role="main">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="assets/images/iitdel_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/manipal_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/iitguw_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/nitrourkela_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/iitkh_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/bitspilani_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/iitroor_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/nitwar_slide.jpg" />
                        </li>
                        <li>
                            <img src="assets/images/iitmad_slide.jpg" />
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-1.7.min.js">\x3C/script>')
    </script>
    <!-- FlexSlider -->
    <script defer src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(function() {
        SyntaxHighlighter.all();
    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>
    <!-- Search Bar -->
    <div id="sb-search" class="sb-search">
        <form>
            <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search"></span>
        </form>
    </div>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/uisearch.js"></script>
    <script>
    new UISearch(document.getElementById('sb-search'));
    </script>
<?php /*
<?php while($row = mysqli_fetch_assoc($result))  { $id=$row['clg_id']; //echo $id; ?>
<a href="one.php?id=<?php echo urlencode($id);?>"><?php echo $row['college_name']; ?></a>
<br>
<?php    } 
?>  */?>
    <!-- Photos of colleges -->
    <section class="grid-wrap">
        <ul class="grid swipe-down" id="grid">
        <li>
        <a href="review1.php?id=<?php echo urlencode($id=1);?>"><img src="img/<?php echo $id=1; ?>.jpg">
        <h3><?php echo $row['college_name']; ?></h3></a>
        </li>
        <?php while($row = mysqli_fetch_assoc($result))  { $id=$row['clg_id']; //echo $id; ?>
            <li>
                <a href="review1.php?id=<?php echo urlencode($id);?>"><img src="img/<?php echo $id; ?>.jpg">
                    <h3><?php echo $row['college_name']; ?></h3></a>
            </li>
            <?php    } ?>
        </ul>
        
    </section>
    </div>
    <!-- /container -->
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/colorfinder-1.1.js"></script>
    <script src="assets/js/gridScrollFx.js"></script>
    <script>
    new GridScrollFx(document.getElementById('grid'), {
        viewportFactor: 0.4
    });
    </script>
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
                    <h3 class="footertitle" style="color:#ff8f12;">LEARN MORE</h3>
                    <div class="learnmorelinks">
                        <ul><a href="#" style="color:white;text-decoration: none;">CONTACT</a></ul>
                        <ul><a href="#" style="color:white;text-decoration: none;">ABOUT</a></ul>
                        <ul><a href="#" style="color:white;text-decoration: none;">OPPORTUNITIES</a></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footerTitle" style="color:#ff8f12;">Subscribe </h3>
                    <form id="footerSignupForm">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required="">
                        </div>
                        <button type="submit" style="background-color:#ff8f12; border-color:#ff8f12;">Get all important updates</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div id="connectCol">
                        <h3 class="footerTitle" style="color:#ff8f12; padding-left:30px; ">Connect</h3>
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
