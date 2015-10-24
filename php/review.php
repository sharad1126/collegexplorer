<?php session_start(); ?>
<?php require_once "connect.php" ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>Review Page</title>
            <link href='https://fonts.googleapis.com/css?family=Raleway|Dosis' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/review.css">
            <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
            <script type="text/javascript" href="assets/js/modernizr.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <link rel="shortcut icon" href="favicon.png" />
        </head>

        <body>
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
                                                echo $value."<br/>"; 
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
                                            $p=explode(".",$row['ugpg']);
                                            foreach($p as $value)
                                            {   
                                                echo "<li/>".$value."<br/>"; 
                                            }  
                                        }  ?>  </ul>
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
                                                echo $value."<br/>"; 
                                            }  
                                        }  ?>                         </ul>
                        <br>
                        <br>
                    </div>
                    <div class="one">
                        <div class="col-md-1">
                        </div>
                        <div class="col-xs-10 col-md-3" style="text-align: center;">
                            <h3 style="color: white;font-family: 'dosis',;">Rank Of IIT Bombay As Per Top Magazines</h3>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-xs-10 col-md-3">
                            <img src="assets/images/outlook.jpg" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                            <br>
                            <br>
                            <p style="color: white; text-align: center;">Rank : 2 </p>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-xs-10 col-md-3">
                            <img src="assets/images/careers360.png" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                            <br>
                            <br>
                            <p style="color: white; text-align: center;">Rank : 5</p>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-xs-10 col-md-3">
                            <img src="assets/images/indiatoday.png" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                            <br>
                            <br>
                            <p style="color: white; text-align: center;">Rank : 4 </p>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-xs-10 col-md-3">
                            <img src="assets/images/eduvidya.png" class="center-block" style="height: 150px; width: 200px; padding-top: 40px;">
                            <br>
                            <br>
                            <p style="color: white; text-align: center;">Rank : 3</p>
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
            <div class="container">
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Application Forms</h4>
                            </div>
                            <div class="modal-body">
                                <p>Online:</p>
                                <ul>
                                    <li>02/05/2015 - 07/05/2015</li>
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
                                <h4 class="modal-title">Examination Date</h4>
                            </div>
                            <div class="modal-body">
                                <p>Online</p>
                                <ul>
                                    <li>04/04/2015</li>
                                </ul>
                                <p>Offline</p>
                                <ul>
                                    <li>10/04/2015</li>
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
                                    <li>27/04/2015</li>
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
                                    <li>01/07/2015 - 26/07/2015</li>
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
                <q>A good, pragmatic and sympathetic review is always a wonderful surprise.</q>
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
                                
                                <h3 style=" font-size: 20px;font-family: 'dosis',sans-serif;text-transform: uppercase;color: #FC573A;">Level Of Burden</h3>
                                <p>
                                   <?php 
                            if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['burden']; 
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
                        <a href="login.php?id=<?php echo urlencode($id);?>"><button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Login to ask a question</button></a>
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
                        <a href="logout.php"><button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Logout</button></a>
                    </div>  
                </div>
            </div>
        </div>
                        <?php 
                        $id = $_GET['id'];
                        if(isset($_POST['ask']))
                        {
                            $id = $_GET['id'];
                            $question_ask = $_POST['ask']; 
                            if(!empty($question_ask))
                            {
                                $question_query = "INSERT INTO question(questiondb,cid) VALUES ('{$question_ask}', '{$id}')";
                                $result_question = mysqli_query($conn,$question_query);
                                //if($result_question) { echo "ok";}
                            }
                        }
                    ?>
                        <form action="review.php?id=<?php echo urlencode($id); ?>" method= "POST">
                            <input type="text" name="ask">
                            <br>
                            <button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
            <?php }  // session ?> 
            <?php 
                if(isset($_GET['id'])) {
                if(isset($_SESSION['user_id']) || !isset($_SESSION['user_id']) ) {
                $id= $_GET['id'];
                $question_query= "SELECT * FROM question WHERE cid= ".$id."";
                $result_question = mysqli_query($conn,$question_query);
                while($row = mysqli_fetch_assoc($result_question)) { $qid= $row['qid'];
                    ?> <BR> <CENTER>  
                <a href="question.php?qid=<?php echo urlencode($qid);?>">
                    <?php 
                echo $row['questiondb'];
                } 
            }
        }
            ?>
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
                            <form id="footerSignupForm" method= "POST" action ="review.php?id=<?php echo urlencode($id); ?>">
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
        <?php require_once("connect.php"); ?>
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
