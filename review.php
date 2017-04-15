<?php session_start(); ?>
<?php require_once "connect.php" ?>
<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php 
$query= "SELECT * FROM college_list";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);  
if(isset($_GET['id']))
                {
                    $id=$_GET['id'];  }  ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
               <meta charset="utf-8">
    <title>Review Page</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway|Dosis' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/content.css" />
    <script src="assets/js/modernizr.custom.js"></script>
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
 <style class="cp-pen-styles">
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }
    
    html {
        overflow-y: scroll;
    }
    
    body {
        background-color: #FBFCF7;
    }
    
    p {
        font-family: 'Roboto', sans-serif;
        color: #0C0C0B;
        text-align: justify;
        font-size: 16px;
        text-justify: inter-word;
    }
    
    h1 {
        font-size: 45px;
        font-family: 'raleway', sans-serif;
        text-transform: uppercase;
        color: #FC573A;
    }
    
    h2 {
        font-size: 24px;
        font-family: 'dosis', sans-serif;
        text-transform: uppercase;
        color: #FC573A;
    }
    
    .ques a {
        color: black;
        font-family: 'Open Sans', sans-serif;
        font-size: 20px;
    }
    
    .ques a:hover {
        color: #6D3CBC;
    }
    
    .one {
        padding-left: 20px;
    }
    
    .one .col-md-3 {
        border: 1px solid white;
        background-color: #6F5499;
    }
    
    q {
        font-family: 'Allan', cursive;
        font-size: 40px;
        color: white;
        word-spacing: 3px;
    }
    
    .quote span {
        color: white;
        font-family: 'raleway', sans-serif;
        font-size: 25px;
    }
    
    .quote {
        background-color: #6F5499;
    }
    
    #review {
        text-align: justify;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
    }
    
    #review h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'raleway', sans-serif;
        text-transform: uppercase;
        color: #FC573A;
    }
    
    .border {
        border: 1px solid black;
        padding: 20px 45px 80px 45px;
        background-color: #F1F2ED;
    }
    
    textarea#styled {
        border: 3px solid #cccccc;
        padding-left: 10px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
    }
    
    a {
        text-decoration: none;
        color: #1ab188;
        -webkit-transition: .5s ease;
        transition: .5s ease;
    }
    
    a:hover {
        color: #179b77;
        text-decoration: none;
    }
    
    .form {
        background: rgba(19, 35, 47, 0.9);
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }
    
    .tab-group {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
    }
    
    .tab-group:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .tab-group li a {
        display: block;
        text-decoration: none;
        padding: 15px;
        background: rgba(160, 179, 176, 0.25);
        color: #a0b3b0;
        font-size: 20px;
        float: left;
        width: 50%;
        text-align: center;
        cursor: pointer;
        -webkit-transition: .5s ease;
        transition: .5s ease;
    }
    
    .tab-group li a:hover {
        background: #179b77;
        color: #ffffff;
    }
    
    .tab-group .active a {
        background: #1ab188;
        color: #ffffff;
    }
    
    .tab-content > div:last-child {
        display: none;
    }
    
    label {
        position: absolute;
        -webkit-transform: translateY(6px);
        -ms-transform: translateY(6px);
        transform: translateY(6px);
        left: 13px;
        color: rgba(255, 255, 255, 0.5);
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
        -webkit-backface-visibility: hidden;
        pointer-events: none;
        font-size: 22px;
    }
    
    label .req {
        margin: 2px;
        color: #1ab188;
    }
    
    label.active {
        -webkit-transform: translateY(50px);
        -ms-transform: translateY(50px);
        transform: translateY(50px);
        left: 2px;
        font-size: 14px;
    }
    
    label.active .req {
        opacity: 0;
    }
    
    label.highlight {
        color: #ffffff;
    }
    
    input,
    textarea {
        font-size: 22px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #a0b3b0;
        color: #ffffff;
        border-radius: 0;
        -webkit-transition: border-color .25s ease, box-shadow .25s ease;
        transition: border-color .25s ease, box-shadow .25s ease;
    }
    
    input:focus,
    textarea:focus {
        outline: 0;
        border-color: #1ab188;
    }
    
    textarea {
        border: 2px solid #a0b3b0;
        resize: vertical;
    }
    
    .field-wrap {
        position: relative;
        margin-bottom: 40px;
    }
    
    .top-row:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .top-row > div {
        float: left;
        width: 48%;
        margin-right: 4%;
    }
    
    .top-row > div:last-child {
        margin: 0;
    }
    
    .button {
        border: 0;
        outline: none;
        border-radius: 0;
        padding: 15px 0;
        font-size: 2rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .1em;
        background: #1ab188;
        color: #ffffff;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    
    .button:hover,
    .button:focus {
        background: #179b77;
    }
    
    .button-block {
        display: block;
        width: 100%;
    }
    
    .forgot {
        margin-top: -20px;
        text-align: right;
    }

    .hitbtn {
        position: relative;
        background: #1E9E53;
        color: white;
        padding: 0 30px;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 1.2px;
        font-size: 16px;
        border-radius: 3px;
        border: none;
        outline: none;
        line-height: 2.7;
    }
    </style>
    <style>
    #map-canvas {
        width: 280px;
        height: 280px;
        background-color: #CCC;
    }
    </style>
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
    <?php 
if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                    $result= mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                    $latitude = $row['latitude'];
                    $longitude = $row['longitude']; 
                }
                ?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng('<?php echo $latitude; ?>', '<?php echo $longitude; ?>'),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script> 
        <body>
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
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="index.php"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="maps.php?id=<?php echo urlencode($id);?>"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
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
                        <li><a href="maps.php?id=<?php echo urlencode($id);?>">FOOD JOINT</a></li>
                        <li><a href="team.php">TEAM</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
            <div class="container-fluid" style="padding-left: 40px; padding-right: 20px">
                <h1 style="text-align: center;"> <?php 
            if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                    $result= mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                    echo $row['college_name']; 
                } ?></h1>
                <div class="row">
                    <br>
                    <br>
                    <div class="col-md-8">
                        <h2>Preface</h2>
                        <p>
                            <?php 
                                if(isset($_GET['id']))
                                    {
                                        $id=$_GET['id'];
                                        $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                        $result= mysqli_query($conn,$query);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['preface']; 
                                    }
                             ?>
                        </p>
                        <br>
                        <h2>Campus and Infrastructure</h2>
                        <p><?php 
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                $result= mysqli_query($conn,$query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['campus']; 
                            } ?></p>
                        <br>
                        <h2>Hostels</h2>
                        <p><?php 
                                if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['hostel']; 
                                } ?>
                        </p>
                        <br>
                        <h2>Undergraduate </h2>
                        <ul style="list-style-type: disc;margin: 0px;padding-left: 35px;overflow: hidden;font-family: 'Roboto', sans-serif;font-size: 16px;color: #0C0C0B;">
                                   <?php 
                                    if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                            $result= mysqli_query($conn,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $p=explode(",",$row['ug']);
                                            foreach($p as $value)
                                            {   
                                                echo "<li>".$value."</li>"; 
                                            }  
                                        }  ?> 
                        </ul>
                        <br>
                        <h2>Undergraduate-cum-postgraduate dual programs</h2>
                        <ul style="list-style-type: disc;margin: 0px;padding-left: 35px;overflow: hidden;font-family: 'Roboto', sans-serif;font-size: 16px;color: #0C0C0B;">
                            <?php 
                                    if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                            $result= mysqli_query($conn,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $p=explode(",",$row['ugpg']);  
                                            foreach($p as $value)
                                            {   
                                                echo "<li>".$value."</li>"; 
                                            }   
                                        }  ?>  
                                        </ul>
                        <br>
                        <h2>Postgraduate programs</h2>
                        <ul style="list-style-type: disc;margin: 0px;padding-left: 35px;overflow: hidden;font-family: 'Roboto', sans-serif;font-size: 16px;color: #0C0C0B;">
                            <?php 
                                    if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                            $result= mysqli_query($conn,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $p=explode(",",$row['pg']);
                                            foreach($p as $value)
                                            {   
                                                echo "<li>".$value."</li>"; 
                                            }  
                                        }  ?>                         </ul>
                        <br>
                        <br>
                    </div>
                     <div class="col-md-1">
            </div>
            <div class="col-xs-10 col-md-3" style="text-align: center;">
               <section>
               <?php  if(isset($_SESSION['user_id']) && isset($_GET['id']))
                        {
                            if(isset($_POST['review']))
                            {
                               
                                $user_id= $_SESSION['user_id'];
                                $review= mysqli_real_escape_string($conn,htmlentities($_POST['review']));
                                $id = $_GET['id'];
                                $user_query= "SELECT * FROM login WHERE id='{$user_id}'";
                                $result_user = mysqli_query($conn,$user_query);
                                $row = mysqli_fetch_assoc($result_user);
                                $user_name= $row['username'];
                                $time = date('dS F,Y | g:i:s A');
                                if(!empty($review))
                            {
                                $review_query = "INSERT INTO review(review,clg_id,user_name,time) VALUES ('{$review}', '{$id}','{$user_name}','{$time}')";
                                $result_review = mysqli_query($conn,$review_query);
                                }
                            }
                         ?> 
                    <a href="logout.php"><button type="submit" class="hitbtn" style="text-align: center;">LOGOUT</button></a>
                    <div class="morph-button morph-button-overlay morph-button-fixed">
                        <button type="button" style="border-radius: 2px;">Write a Review</button>
                         <div class="morph-content">
                            <span class="icon icon-close"></span>
                            <div class="container-fluid">
                                <div class="col-md-12" style="margin-top: 40px; text-align: center;">
                                    <img src="assets/images/review.png" style="float: middle;">
                                    <p style="font-family: 'raleway', sans-serif; font-size: 30px; text-align: center;"><strong>Write a Review</strong></p>
                                    <br>
                                    <form name="sent-message" id="contactForm" method= "POST" action="review.php?id=<?php echo urlencode($id); ?>">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <form action="review.html">
                                                        <textarea class="form-control" placeholder="Post a Review..." id="styled" name= "review" rows="8" required></textarea>
                                                        <br>
                                                        <button type="submit" class="hitbtn" style="text-align: center;">SUBMIT</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                            </div>
                             <?php 
                        } 
                        else 
                        { ?>
                             
                              <a href="login.php?id=<?php echo urlencode($id);?>" class="morph-button morph-button-overlay morph-button-fixed"><button type="button" style="border-radius: 2px;">Login To Write a Review</button></a> 
                         
                       <?php } 
                        ?>
                            
                </section>
            </div>
            <div class="one">
                <div class="col-md-1">
                </div>
                <div class="col-xs-10 col-md-3">
                    <img src="assets/images/eduvidya.png" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                    <br>
                    <br>
                    <?php 
              if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query_date = "SELECT * FROM final_list WHERE clg_id= ".$id." LIMIT 1";
                    $result_date = mysqli_query($conn,$query_date);
                    $row = mysqli_fetch_assoc($result_date);
                    $p=explode(" ",$row['rank']);
                     }
             ?>  
                    <p style="color: white; text-align: center;">Rank :<?php if($p[0]==-1) echo "Not Available"; else echo $p[0];  ?> </p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-xs-10 col-md-3">
                    <img src="assets/images/careers360.png" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                    <br>
                    <br>
                    <p style="color: white; text-align: center;">Rank :<?php if($p[1]==-1) echo "Not Available"; else echo $p[1];?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-xs-10 col-md-3">
                    <img src="assets/images/indiatoday.png" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                    <br>
                    <br>
                    <p style="color: white; text-align: center;">Rank :<?php if($p[2]==-1) echo "Not Available"; else echo $p[2];?> </p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-xs-10 col-md-3">
                    <img src="assets/images/outlook.jpg" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                    <br>
                    <br>
                    <p style="color: white; text-align: center;">Rank : <?php if($p[3]==-1) echo "Not Available"; else echo $p[3];  ?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-xs-10 col-md-3" style="background-color:#FBFCF7;">
                    <br>
                    <?php 
                                    if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $query= "SELECT * FROM college_contact WHERE clg_id= ".$id." LIMIT 1";
                                            $result= mysqli_query($conn,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $p=explode("-",$row['address']); 
                                            $q= $row['number'];
                                            $email = $row['email']; 
                                        }  ?> 
                    <h2>Contact Info:</h2> <?php for($i=0;$i<sizeof($p); $i++) { ?>
                    <p><?php echo $p[$i]; ?></p> <?php } ?>  
                    <p>Phone: <?php  echo $q; ?></p>
                    <p><a href="mailto:<?php echo $email; ?>" style="text-decoration: none;">Email: <?php echo $email; ?></a></p>
                    <div id="map-canvas"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
            <!-- Trigger the modal with a button -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <p style="font-size: 27px; font-family: 'dosis',sans-serif; color: #FC573A;">Important Dates and Events</p>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal1">Application Forms</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal2">Examination Date</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal3">Result Declarance</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal4">Counselling Dates</button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <?php 
              if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query_date = "SELECT * FROM dates WHERE clg_id= ".$id." LIMIT 1";
                    $result_date = mysqli_query($conn,$query_date);
                    $row = mysqli_fetch_assoc($result_date);
                     }
             ?>  
            <div class="container">
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="font-color: black;">Application forms</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li><?php $p=explode(":",$row['application']);  
                                            foreach($p as $value)
                                            {   
                                                echo $value,"<br>"; 
                                            }    ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="font-color: black;">Examination Date</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <?php $p=explode(",",$row['exam']);  
                                            for($i=0;$i<sizeof($p); $i++)
                                            {   if($i%2==0) {
                                                   echo "<li>".$p[$i]."</li>"; } 
                                                 else
                                                 { echo $p[$i]."<br>";}  
                                            }    ?>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Result Date</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li><?php echo $row['result']; ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Counselling Dates</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li><?php echo $row['counselling']; ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="quote" style="text-align:center;">
                <hr>
                <br>
                <q>A good, pragmatic and sympathetic review is always a wonderful surprise</q><span> -Joyce Carol</span>
                <br>
                <br>
            </div>
            <div class="container" style="padding-top: 100px;">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                        <section id="review">
                            <div class="border">
                                <h1>Review</h1>
                                <br>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Foreword</h3>
                                <p>
                                   <?php 
                                    if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                            $result= mysqli_query($conn,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            echo $row['forward']; 
                                        } ?> </p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Procedure & Preparation</h3>
                                <p>
                                    <?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['procedure']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Fests and Events</h3>
                                <p><?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['fests']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Sports Facilities</h3>
                                <p>
                                   <?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['sports']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Faculty</h3>
                                <p><?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['faculty']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Interaction With Seniors</h3>
                                <p>  <?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['senior']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Placements & Internships</h3>
                                <p><?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['placement']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Hostel and Mess</h3>
                                <p>
                                    <?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['hmess']; 
                                } ?></p>
                                <br>
                                
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Responsibilities</h3>
                                <p>
                                   <?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['responsibility']; 
                                } ?></p>
                                <br>
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Verdict</h3>
                                <p><?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['verdict']; 
                                } ?>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <br>
            <br>
               <?php
            //session_start();
            if(!isset($_SESSION['user_id']))
            {  
               ?>
        <div class="logintoask">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                        <a href="login.php?id=<?php echo urlencode($id);?>"><button type="submit" class="hitbtn" style="text-align: center;">Login to Ask a Question</button></a>
                    </div>  
                </div>
            </div>
        </div>
        <?php } ?>
        <?php
            //session_start();
            if(isset($_SESSION['user_id']) && isset($_GET['id']))
            {  ?>
         <div class="logintoask">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                        <a href="logout.php"><button type="submit" class="hitbtn" style="text-align: center;">LOGOUT</button></a>
                    </div>  
                </div>
            </div>
        </div>
                        <?php 
                        $id = $_GET['id'];
                        if(isset($_POST['ask'])&& isset($_SESSION['user_id']))
                        {
                            $id = $_GET['id'];
                            $user_id = $_SESSION['user_id'];
                            $user_query= "SELECT * FROM login WHERE id='{$user_id}'";
                                $result_user = mysqli_query($conn,$user_query);
                                $row = mysqli_fetch_assoc($result_user);
                                $user_name= $row['username'];
                                $time = date('dS F,Y | g:i:s A');
                            $question_ask = mysqli_real_escape_string($conn,htmlentities($_POST['ask'])); 
                            if(!empty($question_ask))
                            { 
                                $question_query = "INSERT INTO question(questiondb,cid,user_name,time) VALUES ('{$question_ask}', '{$id}','{$user_name}','{$time}')";
                                $result_question = mysqli_query($conn,$question_query);
                                }   
                         }
                    ?>
                         <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                    <br>
                        <form action="review.php?id=<?php echo urlencode($id); ?>" method= "POST">
                            <textarea type="text" name="ask" style="color:black;" placeholder="Ask your doubts here .." rows="7" class="form-control autogrow" id="styled" required></textarea> 
                            <br>
                            <button type="submit" class="hitbtn" style="text-align: center;">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php }  // session ?> 

            <div class="space" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" style="margin-top: 30px;">
                <h2 style="text-align: center; font-size: 40px;"><b>Question and Answers</b></h2>
                <br>
                 <?php  
        if(isset($_GET['id'])) {
        if(isset($_SESSION['user_id']) || !isset($_SESSION['user_id']))      
         {  $id= $_GET['id'];
            
                                 $question_query= "SELECT * FROM question WHERE cid='{$id}'";
                                    $result_question = mysqli_query($conn,$question_query);  
                                    while($row = mysqli_fetch_assoc($result_question)) { $question=$row['questiondb']; $qid =$row['qid']; ?> 
                <div class="here" id="data">
                    <hr>
                    <div style="display:inline-block; vertical-align:bottom;">
                        <img src="assets/images/user64x.png" class="img-circle" width="50px" height="50px">
                    </div>
                    <div style="display:inline-block; vertical-align: top;">
                        <h3 style="color: #2D2D2D; padding-left: 10px; text-transform: capitalize;"><b><?php echo $row['user_name']; ?></b></h3>
                        <i style="padding-left: 10px; color: black;"><?php echo $row['time']; ?></i>
                    </div>
                    <br>
                    <br>
                    <div class="ques" style="margin-left: 60px;">
                        <a href="question.php?qid=<?php echo urlencode($qid);?>&<?php echo urlencode($question);?>"><?php echo $row['questiondb']; ?></a>
                    </div>
                </div>
                <?php } }  } ?>
                <hr>
            </div> 
            <div class="col-md-2">
            </div>
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
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/uiMorphingButton_fixed.js"></script>
    <script>
    (function() {
        var docElem = window.document.documentElement,
            didScroll, scrollPosition;

        // trick to prevent scrolling when opening/closing button
        function noScrollFn() {
            window.scrollTo(scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0);
        }

        function noScroll() {
            window.removeEventListener('scroll', scrollHandler);
            window.addEventListener('scroll', noScrollFn);
        }

        function scrollFn() {
            window.addEventListener('scroll', scrollHandler);
        }

        function canScroll() {
            window.removeEventListener('scroll', noScrollFn);
            scrollFn();
        }

        function scrollHandler() {
            if (!didScroll) {
                didScroll = true;
                setTimeout(function() {
                    scrollPage();
                }, 60);
            }
        };

        function scrollPage() {
            scrollPosition = {
                x: window.pageXOffset || docElem.scrollLeft,
                y: window.pageYOffset || docElem.scrollTop
            };
            didScroll = false;
        };

        scrollFn();

        var el = document.querySelector('.morph-button');

        new UIMorphingButton(el, {
            closeEl: '.icon-close',
            onBeforeOpen: function() {
                // don't allow to scroll
                noScroll();
            },
            onAfterOpen: function() {
                // can scroll again
                canScroll();
                // add class "noscroll" to body
                classie.addClass(document.body, 'noscroll');
                // add scroll class to main el
                classie.addClass(el, 'scroll');
            },
            onBeforeClose: function() {
                // remove class "noscroll" to body
                classie.removeClass(document.body, 'noscroll');
                // remove scroll class from main el
                classie.removeClass(el, 'scroll');
                // don't allow to scroll
                noScroll();
            },
            onAfterClose: function() {
                // can scroll again
                canScroll();
            }
        });
    })();
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
    $('.form').find('input, textarea').on('keyup blur focus', function(e) {
        var $this = $(this),
            label = $this.prev('label');
        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {
            if ($this.val() === '') {
                label.removeClass('highlight');
            } else if ($this.val() !== '') {
                label.addClass('highlight');
            }
        }
    });
    $('.tab a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        target = $(this).attr('href');
        $('.tab-content > div').not(target).hide();
        $(target).fadeIn(600);
    });
    </script>
            <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
