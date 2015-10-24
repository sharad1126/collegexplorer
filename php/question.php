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
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="shortcut icon" href="favicon.png" />
    <script type="text/javascript" href="assets/js/modernizr.js"></script>
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
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="collegexplorer.html"><span data-hover="HOME">HOME</span></a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="colleges.html"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="maps.html"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#"><span data-hover="TEAM">TEAM</span></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <center>
    <?php 
                if(isset($_GET['qid'])) {
                $qid= $_GET['qid'];
                $question_query= "SELECT * FROM question WHERE qid= ".$qid."";
                $result_question = mysqli_query($conn,$question_query);
                $row = mysqli_fetch_assoc($result_question) ;
                echo $row['questiondb'];
            }
            ?>     
    <div class="container-fluid">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="margin-top: 100px;">
            <h3 style="color: black; font-family: 'Roboto', sans-serif;"></h3>
            <h4 style="text-align: right;"><a href="#demo" class="comment" data-toggle="collapse" style="color: #444242;">Comment</a>
            </h4>
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
                                $time = date('dS F Y - g : i : s A l T');
				                if(isset($_POST['answer']))
				                {
				                    $answer= $_POST['answer'];
				                    $answer_query= "INSERT INTO answer(answerdb,qid,user_name,user_email,time) VALUES('{$answer}', '{$qid}', '{$user_name}','{$user_email}','{$time}')";
				                    $result_answer = mysqli_query($conn,$answer_query);
				                 } ?>
				                 
            	<form action="question.php?qid=<?php echo urlencode($qid);?>" method="POST">
                <input  rows="2" style="background-color: #F4F4F4" class="form-control autogrow" name="answer" value="" required="" placeholder="Write a comment..." name="answer" type="text">
                <br>
                <input type="submit" name="submit" class="btn btn-info btn-sm" style="background-color: #444242; color: white;"> 
                </form>
                <?php 
		            }
		        else
		        	{ if(isset($_GET['qid'])) {
                        $qid= $_GET['qid'];
        		echo "<br>" .'<a href="login.php?qid='.urlencode($qid).'"><button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Login to answer a question</button></a><br>';
        	}
        }
            ?>
            <?php 
                if(isset($_GET['qid'])) {  $qid= $_GET['qid'];
                                 $answer_query= "SELECT * FROM answer WHERE qid='{$qid}'";
                                    $result_answer = mysqli_query($conn,$answer_query);
                                    while($row = mysqli_fetch_assoc($result_answer)) {
                                    echo $row['user_name']."<br><br>"; 
                                    echo $row['answerdb']." <br>";
                                    echo $row['time']." <br>"; 
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
			                        <a href="logout.php"><button type="submit" class="btn btn-success btn-lg" style="text-align: center;">Logout</button></a>
			                    </div>  
			                </div>
			            </div>
        </div><?php
    }
    ?>
    <div class="col-md-2">
    </div>
    </div>

    <div class="space" style="padding-top: 150px;">
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
