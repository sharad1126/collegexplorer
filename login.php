<!DOCTYPE html>
<html lang="en">
<?php require_once("connect.php");?>
<?php require_once("functions.php");?>
<?php if(isset($_GET['id']))$id= $_GET['id']; ?>
<?php if(isset($_GET['qid']))$qid= $_GET['qid']; ?>
<?php $loginerror = ""; ?>
<?php
if(isset($_POST['uname']) && isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['email'])&& isset($_POST['password']))
{
     if($_POST['g-recaptcha-response']!="") 
     { 
        $uname= mysqli_real_escape_string($conn,htmlentities($_POST['uname']));
        $Fname= mysqli_real_escape_string($conn,htmlentities($_POST['Fname']));
      $Lname= mysqli_real_escape_string($conn,htmlentities($_POST['Lname']));
      $email= mysqli_real_escape_string($conn,htmlentities($_POST['email']));
      $password=mysqli_real_escape_string($conn,htmlentities($_POST['password']));
      $password_hash = md5($password);
     if(!empty($uname) && !empty($Fname) && !empty($Lname) && !empty($email) && !empty($password) )
    { 
        $query = mysqli_query($conn, "SELECT * FROM login WHERE username='$uname'");
            if (mysqli_num_rows($query)!=0)
                {
                    echo "<script>alert('Username already exists');</script>";
                }
             else
                {  
                      $query = "INSERT INTO login(username,firstname,lastname,email,password) VALUES ('{$uname}','{$Fname}','{$Lname}','{$email}','{$password_hash}')"; 
                      $user_registered = mysqli_query($conn,$query);
                      $query_run = "SELECT * FROM login WHERE username='{$uname}'" ;
                      $result_query = @mysqli_query($conn,$query_run);
                       $result_s=mysqli_fetch_assoc($result_query);
                      if(isset($_GET['id']))
                        {
                         $flag=0;
                         confirm_logged($result_s['id'],$id,$flag);

                        } 
                        else
                        {
                            $flag=1;
                            confirm_logged($result_s['id'],$qid,$flag);
                        }  
                }
    }
}
else
echo "<script>alert('Please verify that you are not a Robot.');</script>";
}
?>
 <?php 
                                    if(isset($_POST['UNAME']) && isset($_POST['PASSWORD']) )
                                { 
                                    $loginerror= "";
                                    $uname=  mysqli_real_escape_string($conn,htmlentities($_POST['UNAME']));
                                    $password=mysqli_real_escape_string($conn,htmlentities($_POST['PASSWORD']));
                                    $password_hash= md5($password);
                                    if(!empty($uname) && !empty($password) )        
                                    {        
                                        $query_run = "SELECT * FROM login WHERE username='{$uname}'" ;
                                        $result_query = @mysqli_query($conn,$query_run); 
                                            if($result_query)
                                                {
                                                    $user_exist= mysqli_num_rows($result_query);
                                                    $result_s=mysqli_fetch_assoc($result_query);
                                                    if($password_hash==$result_s['password'])
                                                    {
                                                        if(isset($_GET['id']))
                                                        {
                                                             $flag=0;
                                                             confirm_logged($result_s['id'],$id,$flag);
                                                        } 
                                                        else
                                                        {
                                                            $flag=1;
                                                            confirm_logged($result_s['id'],$qid,$flag);
                                                        }
                                                    } else { $loginerror= "Username and/or Password incorrect.Try again.";}   } } }  
                 ?>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta charset="UTF-8">
                    <meta name="robots" content="noindex">
                    <title>Login/SignUp</title>
                    <link rel="canonical" href="loginform.html">
                    <link href="css" rel="stylesheet" type="text/css">
                    <link rel="stylesheet prefetch" href="http://codepen.io/assets/reset/normalize.css">
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
                        background: #c1bdba;
                        font-family: 'Titillium Web', sans-serif;
                    }
                    
                    a {
                        text-decoration: none;
                        color: #1ab188;
                        -webkit-transition: .5s ease;
                        transition: .5s ease;
                    }
                    
                    a:hover {
                        color: #179b77;
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
                    
                    h1 {
                        text-align: center;
                        color: #ffffff;
                        font-weight: 300;
                        margin: 0 0 40px;
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
                    </style>
                     <script src='https://www.google.com/recaptcha/api.js'></script>
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
                <body>
                    <div class="form">
                        <ul class="tab-group">
                            <li class="tab active"><a href="#signup">Sign Up</a></li>
                            <li class="tab"><a href="#login">Log In</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="signup">
                                <h1>Sign Up</h1>
                                <?php 
                                    if(isset($_GET['id']))
                                    $url="login.php?id=".urlencode($id);
                                    else
                                    $url="login.php?qid=".urlencode($qid);

                                ?>
                                <form action="<?php echo $url;?>" method="POST">
                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <label>
                                                Username<span class="req">*</span>
                                            </label>
                                            <input type="text" required="" autocomplete="off" name="uname">
                                        </div>
                                        <div class="field-wrap">
                                            <label>
                                                First Name<span class="req">*</span>
                                            </label>
                                            <input type="text" required="" autocomplete="off" name="Fname">
                                        </div>
                                        <div class="field-wrap">
                                            <label>
                                                Last Name<span class="req">*</span>
                                            </label>
                                            <input type="text" required="" autocomplete="off" name="Lname">
                                        </div>
                                    </div>
                                    <div class="field-wrap">
                                        <label>
                                            Email Address<span class="req">*</span>
                                        </label>
                                        <input type="email" required="" autocomplete="off" name="email">
                                    </div>
                                    <div class="field-wrap">
                                        <label>
                                            Set A Password<span class="req">*</span>
                                        </label>
                                        <input type="password" required="" autocomplete="off" name="password">
                                    </div>
                                     <div class="g-recaptcha" data-sitekey="6LcXPAwTAAAAAKYhmZakX3JhI-RjxwWd5Qaubcum" style="padding-left: 115px;padding-bottom: 20px;"></div>
                                    <button type="submit" class="button button-block">Get Started</button>
                                </form>
                            </div>
                            <div id="login">
                                <h1>Welcome Back!</h1>
                                <form action="<?php echo $url;?>" method="POST">
                                    <div class="field-wrap">
                                        <label>
                                            Username<span class="req">*</span>
                                        </label>
                                        <input type="text" required="" autocomplete="off" name="UNAME">
                                    </div>
                                    <div class="field-wrap">
                                        <label>
                                            Password<span class="req">*</span>
                                        </label>
                                        <input type="password" required="" autocomplete="off" name="PASSWORD">
                                    </div> 
                                    <p class="forgot"><?php echo $loginerror; ?></p> 
                                    <button class="button button-block">Log In</button>
                                </form>
                            </div>
                        </div>
                        <!-- tab-content -->
                    </div>
                    <!-- /form -->
                    <script src="stopExecutionOnTimeout.js"></script>
                    <script src="jquery.min.js"></script>
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
                    //@ sourceURL=pen.js
                    </script>
                    <script src="css_live_reload_init.js"></script>
                </body>

                </html>
