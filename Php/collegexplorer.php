<?php require_once("connect.php"); ?>
<?php 
error_reporting(1);
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contactno']) && isset($_POST['msg']))
    {
        $name =  $_POST['name'];
        $email=  $_POST['email'];
        $contactno = $_POST['contactno'];
        $msg =  $_POST['msg'];
        if(!empty($name) && !empty($email) && !empty($contactno) && !empty($msg) )
          {  
          if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           {          
                 $query = "INSERT INTO contact(name,email,contactno,msg) VALUES ('{$name}','{$email}','{$contactno}','{$msg}')"; 
                 $result = mysqli_query($conn,$query);
                 if(!$result)
                        {
                           die("Error");                        // redirect to login page.
                        }
          }
          else
          {
            echo "<script type='text/javascript'>alert('Enter Valid E-MAIL ID!')</script>";
          } 
          /*  Email Validation is done and the values are inserted into teh database. 
          */  
        }
      /*  if the user doesn't fill in all the details then, we return a message. 
      */
    else
        {
            echo " Please Fill In All Details";
        }    
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome To CollegExplorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <!-- CSS and Js for slideshow on first page -->
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <!-- CSS and Js for the nav bar and contact us page and easy scrolling -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script type="text/javascript" href="js/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script type="text/javascript" href="js/jquery.easing.1.3.js"></script>
    <!-- footer -->
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
</head>

<body>
    <!--slideshow-->
    <section id="front-page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
            <li><span>Image 07</span></li>
            <li><span>Image 08</span></li>
            <li><span>Image 09</span></li>
        </ul>
    </section>
    <!--menu bar-->
    <header role="banner" class="pageheader">
        <nav role="navigation" class="naviHead">
            <div class="layout">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="logo">CollegExplorer</h1>
                            <a href="#" id="navTrigger1">HOME</a>
                        </div>
                        <div class="col-md-8">
                            <div class="menu-menu-glowne-en-container">
                                <ul id="menu-menu-glowne-en" class="menu">
                                    <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="#"><span data-hover="COLLEGES">COLLEGES</span></a></li>
                                    <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="#"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
                                    <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#"><span data-hover="TEAM">TEAM</span></a></li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#contact"><span data-hover="ABOUT US">ABOUT US</span></a></li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#contact"><span data-hover="CONTACT US">CONTACT US</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div style="height: 660px;">
    </div>
    <!--   Contact Us    -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-heading">Contact Us</h1> 
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sent-message" id="contactForm" method="POST" action="collegexplorer.php" novalidate>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your name " id="name" required data-validation-required-message="Please enter your name" name="name" maxlength="70">
                                </div>
                                <div class="form-group">
                                 <input id="footerEmailInput" class="form-control" type="email" placeholder="Email address" aria-required="true" required="" name="email" maxlength="25">
                                </div>
                                <div class="form-group">
                                    <input type="mobileno" class="form-control" placeholder="Enter your mobile numnber " id="mobileno" required data-validation-required-message="Please enter your mobile number" name="contactno" maxlength="13">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter your message " id="message" required data-validation-required-message="Message" name="msg"  maxlength="150" rows="10" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  
</body>

</html>
