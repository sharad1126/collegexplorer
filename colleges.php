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
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="assets/js/modernizr.custom1.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script type="text/javascript" href="assets/js/modernizr.js"></script>
            <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
            <!-- Search Bar-->
            <link rel="stylesheet" type="text/css" href="assets/css/component4.css" />
            <!-- navbar -->
            <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
            <link rel="shortcut icon" href="favicon.png" />
        </head>

        <body class="loading" style="max-width:100%; overflow-x:hidden;">
            <!--menu bar-->
            <!-- <section id="navbar">
                <nav class="navbar navbar-default" style="background-color: rgba(51,51,51,0.8);opacity: 1;text-align: center;border-radius:0px;height: 60px;top: 0;left: 0;width: 100%;z-index: 100;box-shadow: 2px 7px 7px rgba(100,100,100,0.49);border:none;">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
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
            </section> -->
            <div id="container" class="cf">
                <div id="main" role="main">
                    <section class="slider">
                        <div class="flexslider">
                            <h4>hey</h4>
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
<!--                                 <li>
                                    <img src="assets/images/iitkh_slide.jpg" />
                                </li> -->
                                <li>
                                    <img src="assets/images/bitspilani_slide.jpg" />
                                </li>
                               <!--  <li>
                                    <img src="assets/images/iitroor_slide.jpg" />
                                </li> -->
                                <!-- <li>
                                    <img src="assets/images/nitwar_slide.jpg" />
                                </li> -->
                                <li>
                                    <img src="assets/images/iitmad_slide.jpg" />
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            
            
            <!-- Search Bar --> 
            <!-- <div id="sb-search" class="sb-search">
                <form method="POST" action="colleges.php">
                    <input class="sb-search-input" placeholder="Enter the college you are searching for..." type="text" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span>
                </form>
            </div> -->
            
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
    <!-- footer     -->
    <!-- <footer id="footer" style="background-color:#2E3444; height:250px; margin-top: 30px;">
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
                    <form id="footerSignupForm" method="POST" action="colleges.php">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required="" name="email">
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
    </footer> -->
    
    <!-- FlexSlider -->
    <script src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        console.log("First");

        $(function() {
            SyntaxHighlighter.all();
            });
        $(window).load(function() {
                    console.log("Inside Window Load");

        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
            $('body').removeClass('loading');
                                    console.log("Inside FlexSlider function");

            }
        });
    });
    </script>
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
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

