<?php require_once"connect.php" ?>
<?php require_once"functions.php" ?>
<?php 
                if(isset($_POST['search'])){
                    $search = $_POST['search'];
                    if(!empty($search))
                     {
                        $search_query ="SELECT * FROM college_list WHERE college_name LIKE '%$search%'";
                        $query = mysqli_query($conn, $search_query);
                        if(mysqli_num_rows($query)!==0)
                         {
                            while($row = mysqli_fetch_assoc($query))
                            {
                                $id = $row['clg_id'];
                                redirect_to("review.php?id=".urlencode($id));
                            } 
                         }
                      } 
                } 
            ?>
    <?php  
   $query= "SELECT * FROM college_list";
   $result= mysqli_query($conn,$query);
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
            <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
            <link rel="stylesheet" type="text/css" href="assets/css/demo3.css" />
            <link rel="stylesheet" type="text/css" href="assets/css/component3.css" />
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="assets/js/modernizr.custom1.js"></script>
            <!-- Search Bar-->
            <link rel="stylesheet" type="text/css" href="assets/css/component4.css" />
            <!-- navbar -->
            <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
            <link rel="shortcut icon" href="favicon.png" />
            <script type="text/javascript" href="assets/js/modernizr.js"></script>
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
        <body class="loading" style="max-width:100%; overflow-x:hidden;">
            <!--menu bar-->
            <section id="navbar" style="margin:0px; padding: 0px;">
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
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map.php" target="_blank"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="aboutus.php"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="navmob" style="margin:0px; padding: 0px;">
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
                        <li><a href="team.php">TEAM</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
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
                            <img src="assets/images/bitspilani_slide.jpg" />
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
                <form method="POST" action="colleges.php">
                    <input class="sb-search-input" placeholder="Enter the college you are searching for..." type="text" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span>
                </form>
            </div>
            
            <!-- Photos of colleges -->
            <section class="grid-wrap">
                <ul class="grid swipe-down" id="grid">
                    <?php while($row = mysqli_fetch_assoc($result))  { $id=$row['clg_id']; $college=$row['college_name']; ?>
                        <li>
                            <a href="review.php?id=<?php echo urlencode($id);?>&college<?php echo urlencode($college); ?>"><img src="img/<?php echo $id;?>.jpg" id="<?php echo $row['college_name'];?>">
                            <h3><?php echo $row['college_name']; echo "</h3></a>";
                             echo "</li>";
                           } ?>
                </ul>
            </section>
<!--         <div class="container">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <h1 style="color: #FF6E49; font-family: 'Roboto';">Search for More Colleges</h1>
            <ul class="pagination pagination pagination-lg">
                <li class="disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="colleges.php">1</a></li>
                <li><a href="colleges2.php">2</a></li>
                <li class="disabled"><a href="#">3</a></li>
                <li><a href="colleges2.php">Next</a></li>
            </ul>
        </div>
        <div class="col-md-3">
        </div>
    </div> -->
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
                        <div id="footerAddress" style="padding-top:10px;">
                            <br>
                            <span id="addressTitle" style="color: white;">CollegExplorer</span>
                        </div>
                        <div id="footerEmail"><a href="collegexplorer@gmail.com" style="text-decoration: none;">collegexplorer@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/uisearch.js"></script>
    <script>
        new UISearch(document.getElementById('sb-search'));
    </script>
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
    <script type="text/javascript" src="typeahead.js"></script>
    <script>
    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
            });

            cb(matches);
        };
    };

    var college = ['IIT DELHI', 'IIT MUMBAI', 'IIT KHARAGPUR', 'IIT MADRAS', 'IIT KANPUR', 'IT-BHU', 'BITS PILANI', 'IIT GUWAHATI', 'NIT TRICHY', 'NIT SURATKAL', 'ISM DHANBAD', 'NIT WARANGAL', 'NIT ROURKELA', 'IIIT HYDERABAD', 'NSIT DELHI', 'COEP PUNE', 'PSG COIMBATORE', 'IIIT ALLAHABAD', 'JNTUH HYDERABAD', 'DTU', 'BIT RANCHI', 'MIT', 'NIT HAMIRPUR', 'MS RAMIAH BANGALORE', 'NIT DURGAPUR', 'THAPAR PATIALA', 'BIT SINDRI DHANBAD', 'VNIT NAGPUR', 'NIE MYSORE', 'NIRMA', 'SGS INDORE', 'UNIVERSITY COLLEGE OF ENGINEERING HYDERABAD', 'VIT VELLORE', 'CHAITANYA BHARTI HYDERABAD', 'GURUNANAK DEV ENGINEERING LUDHIANA', 'ZAKIR HUSAIN COLLEGE ALIGARH', 'DJ SANGHVI MUMBAI', 'MIT PUNE', 'THIAGARAJAR MADURAI', 'KONGU ENGINEERING COLLEGE ERODE', 'BANNARI AMMAN IT ERODE'];

    $('.sb-search-input').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'college',
        source: substringMatcher(college)
    });

    // constructs the suggestion engine
    var college = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // `college` is an array of college names defined in "The Basics"
        local: college
    });

    $('#bloodhound .sb-search-input').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'college',
        source: college
    });</script>
        
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

