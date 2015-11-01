<?php session_start(); ?>
<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once "connect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title>Question and Answers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="shortcut icon" href="favicon.png" />
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
    <script type="text/javascript" href="assets/js/comment.js"></script>
</head>
<style>
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
                     <a class="navbar-brand" href="collegexplorer.html" style="width: 130px;height: 25px; font-family: 'Open Sans', sans-serif;color: #fd5f54; margin-top: 8px; margin-left: 4px;">CollegExplorer</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <div class="menu-menu-glowne-en-container">
                            <ul id="menu-menu-glowne-en" class="menu">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="collegexplorer.php"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.php"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="maps.php"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="team.php"><span data-hover="TEAM">TEAM</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
       <div class="container-fluid">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="margin-top: 40px;">
            <div style="display:inline-block; vertical-align:bottom;">
                <img src="assets/images/user64x.png" class="img-circle" width="50px" height="50px">
            </div>
            <?php 
                if(isset($_GET['qid'])) {
                $qid= $_GET['qid'];
                $question_query= "SELECT * FROM question WHERE qid= ".$qid."";
                $result_question = mysqli_query($conn,$question_query);
                $row = mysqli_fetch_assoc($result_question) ;
                //echo $row['questiondb'];
                //echo $row['user_name'];
            }
            ?>  
            <div style="display:inline-block; vertical-align: top;">
                <h3 style="color: #2D2D2D; padding-left: 10px;"><b><?php echo $row['user_name']; ?></b></h3>
                <i style="padding-left: 10px;"><?php echo $row['time']; ?></i>
            </div>
            <h3 style="color: black; font-family: 'Open Sans', sans-serif; font-size: 22px; font-size: 20px; margin-left: 60px;"><?php echo $row['questiondb'];?></h3>
            <a href="#demo" class="comment" data-toggle="collapse" data-toggle="tooltip" title="Click to Comment" style="color: #444242; margin-left: 60px;">Comment</a>
            <div id="demo" class="collapse">
                <br>
                <?php 
                if(isset($_SESSION['user_id']))
                            {
                                $user_id= $_SESSION['user_id'];
                                $user_query= "SELECT * FROM login WHERE id='{$user_id}'";
                                $result_user = mysqli_query($conn,$user_query);
                                $row = mysqli_fetch_assoc($result_user);
                                $user_name= $row['username'];
                                $user_email=$row['email'];
                                $time = date('dS F,Y | g:i:s A');
                                if(isset($_POST['answer']))
                                {
                                    $answer=mysqli_real_escape_string($conn,htmlentities($_POST['answer']));
                                    $answer_query= "INSERT INTO answer(answerdb,qid,user_name,user_email,time) VALUES('{$answer}', '{$qid}', '{$user_name}','{$user_email}','{$time}')";
                                    $result_answer = mysqli_query($conn,$answer_query);
                                 } ?>
                                 
                <form action="question.php?qid=<?php echo urlencode($qid);?>" method="POST">
                <textarea rows="3" style="background-color: #F4F4F4" class="form-control autogrow" name="answer" value="" required="" placeholder="Write a comment..." name="answer" type="text"></textarea>
                <br>
                <input type="submit" name="submit" class="btn btn-info btn-sm" style="background-color: #444242; color: white;"> 
                </form>
                <?php 
                    }
                else
                    { if(isset($_GET['qid'])) {
                        $qid= $_GET['qid'];
                echo "<br>" .'<a href="login.php?qid='.urlencode($qid).'"><button type="submit" class="hitbtn" style="text-align: center;">Login to ask a Question</button></a><br>';
            }
        }
            ?>
            </div>
        </div>
        <?php 
            if(isset($_SESSION['user_id'])) { ?>
             <div class="logintoask">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-9">
                                    <a href="logout.php"><button type="submit" class="hitbtn" style="text-align: center;">Logout</button></a>
                                </div>  
                            </div>
                        </div>
        </div><?php
    }
    ?>
        <div class="col-md-2">
        </div>
    </div>
    <!-- image -->
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
            <a href="#" data-toggle="tooltip" title="Write your comment above"><img src="assets/images/boy.gif"></a>
        </div>
        <div class="col-md-2">
        </div>
    </div>

    <div class="space" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" style="margin-top: 40px;">
                <h3 style="text-align: center; font-size: 34px; font-family: 'dosis', sans-serif; text-transform: uppercase; color: #FC573A;"><b>Previous Comments</b></h3>
                <br>
        <?php 
        if(isset($_GET['qid'])) {  $qid= $_GET['qid'];
                                 $answer_query= "SELECT * FROM answer WHERE qid='{$qid}'";
                                    $result_answer = mysqli_query($conn,$answer_query);  
                                    while($row = mysqli_fetch_assoc($result_answer)) {   ?> 
                            <hr>
                            <div style="display:inline-block; vertical-align:bottom;">
                                <img src="assets/images/user64x.png" class="img-circle" width="50px" height="50px">
                            </div>
                            <div style="display:inline-block; vertical-align: top;">
                                <h3 style="color: #2D2D2D; padding-left: 10px;"><b><?php echo $row['user_name']; ?></b></h3>
                                <i style="padding-left: 10px;"><?php echo $row['time']; ?></i>
                            </div>
                            <br>
                            <br>
                            <p style="color: black; font-family: 'Open Sans', sans-serif; font-size: 20px; margin-left: 60px;"><?php echo $row['answerdb']; ?></p>
                                     <?php  
                                        }
                                    }
                                    ?>
                    <hr>                            
            </div>

            <hr>        
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <!-- footer     -->
    <footer id="footer" style="background-color:#2E3444; height:250px; margin-top: 30px;">
        <div class="container-fluid" style="height:250px;">
            <div class="row">
                <div class="col-md-3">
                    <div id="footerlogo">
                        <a href="collegexplorer.php"><img src="assets/images/favicon.png" alt="responsive-image" style="height:169px; width=169px; align:center; padding-left:20px; padding-top:20px; padding-bottom:20px; "></a>
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
                    <form id="footerSignupForm" method="POST" action="question.php?qid=<?php echo urlencode($qid);?>">
                        <div class="form-group">
                            <label class="sr-only" for="footerEmailInput"></label>
                            <input name="email" id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required="">
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
                            <a id="headerliBtn" class="headerSocialBtn" href="#" target="_blank"><img src="assets/images/linkedin.png" style="height:44px; width:44px;padding-top:10px;"></a>
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
    </footer>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
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
