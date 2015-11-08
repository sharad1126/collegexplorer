<?php require_once"connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disclaimer</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="assets/css/privacy.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
</head>
<style>
@media only screen and (max-width: 768px) {
    .img1 {
        display: none;
    }
}

@media only screen and (min-width: 768px) {
    .img2 {
        display: none;
    }
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
<body>
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
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="map.php"><span data-hover="FOOD JOINTS">FOOD JOINTS</span></a></li>
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
                        <li><a href="maps.php">FOOD JOINT</a></li>
                        <li><a href="team.php">TEAM</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="container-fluid">
        <div class="row display-area">
        <div class="img1">
            <div class="col-sm-4 display-ce" style="margin-top: 70px;">
                <img src="favicon.png" height="400px" width="400px;" align="middle">
            </div>
        </div>
        <div class="img2">
            <div class="col-sm-4 display-ce" style="margin-top: 70px;">
                <img src="favicon.png" height="320px" width="320px;" align="middle">
            </div>
        </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12" style="height: 550px; overflow: scroll; text-align: justify;">
                        <br>
                        <h3 style="color: #ED4F44"><strong>Disclaimer</strong></h3>
                        <br>
                        <h4 style="color: #ED4F44">Website Agreement</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            The www.collegexplorer.co.in Web Site (the "Site") is an online information service provided by CollegExplorer ("www.collegexplorer.co.in "), subject to your compliance with the terms and conditions set forth below. PLEASE READ THIS DOCUMENT CAREFULLY BEFORE ACCESSING OR USING THE SITE. BY ACCESSING OR USING THE SITE, YOU AGREE TO BE BOUND BY THE TERMS AND CONDITIONS SET FORTH BELOW. IF YOU DO NOT WISH TO BE BOUND BY THESE TERMS AND CONDITIONS, YOU MAY NOT ACCESS OR USE THE SITE. www.collegexplorer.co.in MAY MODIFY THIS AGREEMENT AT ANY TIME, AND SUCH MODIFICATIONS SHALL BE EFFECTIVE IMMEDIATELY UPON POSTING OF THE MODIFIED AGREEMENT ON THE SITE. YOU AGREE TO REVIEW THE AGREEMENT PERIODICALLY TO BE AWARE OF SUCH MODIFICATIONS AND YOUR CONTINUED ACCESS OR USE OF THE SITE SHALL BE DEEMED YOUR CONCLUSIVE ACCEPTANCE OF THE MODIFIED AGREEMENT.
                        </p>
                        <h4 style="color: #ED4F44">Copyright, Licenses and Idea Submissions</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            The entire contents of the Site are protected by international copyright and trademark laws. The owner of the copyrights and trademarks are www.collegexplorer.co.in, its affiliates or other third party licensors. YOU MAY NOT MODIFY, COPY, REPRODUCE, REPUBLISH, UPLOAD, POST, TRANSMIT, OR DISTRIBUTE, IN ANY MANNER, THE MATERIAL ON THE SITE, INCLUDING TEXT, GRAPHICS, CODE AND/OR SOFTWARE. You may print and download portions of material from the different areas of the Site solely for your own non-commercial use provided that you agree not to change or delete any copyright or proprietary notices from the materials. You agree to grant to www.collegexplorer.co.in a non-exclusive, royalty-free, worldwide, perpetual license, with the right to sub-license, to reproduce, distribute, transmit, create derivative works of, publicly display and publicly perform any materials and other information (including, without limitation, ideas contained therein for new or improved products and services) you submit to any public areas of the Site (such as bulletin boards, forums and newsgroups) or by e-mail to www.collegexplorer.co.in by all means and in any media now known or hereafter developed. You also grant to www.collegexplorer.co.in the right to use your name in connection with the submitted materials and other information as well as in connection with all advertising, marketing and promotional material related thereto. You agree that you shall have no recourse against www.collegexplorer.co.in for any alleged or actual infringement or misappropriation of any proprietary right in your communications to www.collegexplorer.co.in.
                        </p>
                        <h4 style="color: #ED4F44">Trademarks</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            Publications, products, content or services referenced herein or on the Site are the exclusive trademarks or servicemarks of www.collegexplorer.co.in. Other product and company names mentioned in the Site may be the trademarks of their respective owners.
                        </p>
                        <h4 style="color: #ED4F44">Use of this Site</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            You understand that, except for information, products or services clearly identified as being supplied by www.collegexplorer.co.in, www.collegexplorer.co.indoes not operate, control or endorse any information, products or services on the Internet in any way. Except for www.collegexplorer.co.in- identified information, products or services, all information, products and services offered through the Site or on the Internet generally are offered by third parties, that are not affiliated with www.collegexplorer.co.in a. You also understand that www.collegexplorer.co.in cannot and does not guarantee or warrant that files available for downloading through the Site will be free of infection or viruses, worms, Trojan horses or other code that manifest contaminating or destructive properties. You are responsible for implementing sufficient procedures and checkpoints to satisfy your particular requirements for accuracy of data input and output, and for maintaining a means external to the Site for the reconstruction of any lost data. YOU ASSUME TOTAL RESPONSIBILITY AND RISK FOR YOUR USE OF THE SITE AND THE INTERNET. www.collegexplorer.co.in PROVIDES THE SITE AND RELATED INFORMATION "AS IS" AND DOES NOT MAKE ANY EXPRESS OR IMPLIED WARRANTIES, REPRESENTATIONS OR ENDORSEMENTS WHATSOEVER (INCLUDING WITHOUT LIMITATION WARRANTIES OF TITLE OR NONINFRINGEMENT, OR THE IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE) WITH REGARD TO THE SERVICE, ANY MERCHANDISE INFORMATION OR SERVICE PROVIDED THROUGH THE SERVICE OR ON THE INTERNET GENERALLY, AND www.collegexplorer.co.in SHALL NOT BE LIABLE FOR ANY COST OR DAMAGE ARISING EITHER DIRECTLY OR INDIRECTLY FROM ANY SUCH TRANSACTION. IT IS SOLELY YOUR RESPONSIBILITY TO EVALUATE THE ACCURACY, COMPLETENESS AND USEFULNESS OF ALL OPINIONS, ADVICE, SERVICES, MERCHANDISE AND OTHER INFORMATION PROVIDED THROUGH THE SERVICE OR ON THE INTERNET GENERALLY. www.collegexplorer.co.in DOES NOT WARRANT THAT THE SERVICE WILL BE UNINTERRUPTED OR ERROR-FREE OR THAT DEFECTS IN THE SERVICE WILL BE CORRECTED. YOU UNDERSTAND FURTHER THAT THE PURE NATURE OF THE INTERNET CONTAINS UNEDITED MATERIALS SOME OF WHICH ARE SEXUALLY EXPLICIT OR MAY BE OFFENSIVE TO YOU. YOUR ACCESS TO SUCH MATERIALS IS AT YOUR RISK. www.collegexplorer.co.in HAS NO CONTROL OVER AND ACCEPTS NO RESPONSIBILITY WHATSOEVER FOR SUCH MATERIALS.
                        </p>
                        <h4 style="color: #ED4F44">Limitation of Liability</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            IN NO EVENT WILL www.collegexplorer.co.in BE LIABLE FOR (I) ANY INCIDENTAL, CONSEQUENTIAL, OR INDIRECT DAMAGES (INCLUDING, BUT NOT LIMITED TO, DAMAGES FOR LOSS OF PROFITS, BUSINESS INTERRUPTION, LOSS OF PROGRAMS OR INFORMATION, AND THE LIKE) ARISING OUT OF THE USE OF OR INABILITY TO USE THE SERVICE, OR ANY INFORMATION, OR TRANSACTIONS PROVIDED ON THE SERVICE, OR DOWNLOADED FROM THE SERVICE, OR ANY DELAY OF SUCH INFORMATION OR SERVICE. EVEN IF www.collegexplorer.co.in OR ITS AUTHORIZED REPRESENTATIVES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, OR (II) ANY CLAIM ATTRIBUTABLE TO ERRORS, OMISSIONS, OR OTHER INACCURACIES IN THE SERVICE AND/OR MATERIALS OR INFORMATION DOWNLOADED THROUGH THE SERVICE. BECAUSE SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. IN SUCH STATES, www.collegexplorer.co.in LIABILITY IS LIMITED TO THE GREATEST EXTENT PERMITTED BY LAW. www.collegexplorer.co.in makes no representations whatsoever about any other web site which you may access through this one or which may link to this Site. When you access a non-www.collegexplorer.co.in web site, please understand that it is independent from www.collegexplorer.co.in, and that www.collegexplorer.co.in has no control over the content on that web site. In addition, a link to a www.collegexplorer.co.in web site does not mean that www.collegexplorer.co.in endorses or accepts any responsibility for the content, or the use, of such web site.
                        </p>
                        <h4 style="color: #ED4F44">Indemnification</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            You agree to indemnify, defend and hold harmless www.collegexplorer.co.in, its officers, directors, employees, agents, licensors, suppliers and any third party information providers to the Service from and against all losses, expenses, damages and costs, including reasonable attorneys' fees, resulting from any violation of this Agreement (including negligent or wrongful conduct) by you or any other person accessing the Service.
                        </p>
                        <h4 style="color: #ED4F44">Third-Party Rights</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            The provisions of paragraphs 2 (Use of the Service), and 3 (Indemnification) are for the benefit of www.collegexplorer.co.in and its officers, directors, employees, agents, licensors, suppliers, and any third party information providers to the Service. Each of these individuals or entities shall have the right to assert and enforce those provisions directly against you on its own behalf.
                        </p>
                        <h4 style="color: #ED4F44">Term; Termination</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            This Agreement may be terminated by either party without notice at any time for any reason. The provisions of paragraphs 1 (Copyright, Licenses and Idea Submissions), 2 (Use of the Service), 3 (Indemnification), 4 (Third Party Rights) and 6 (Miscellaneous) shall survive any termination of this Agreement.
                        </p>
                        <h4 style="color: #ED4F44">Miscellaneous</h4>
                        <p style="font-family: 'Roboto', sans-serif;color: white;">
                            This Agreement shall all be governed and construed in accordance with the laws of India applicable to agreements made and to be performed in India. You agree that any legal action or proceeding between www.collegexplorer.co.in and you for any purpose concerning this Agreement or the parties' obligations hereunder shall be brought exclusively in a federal or state court of competent jurisdiction sitting in India . Any cause of action or claim you may have with respect to the Service must be commenced within one (1) year after the claim or cause of action arises or such claim or cause of action is barred. www.collegexplorer.co.in's failure to insist upon or enforce strict performance of any provision of this Agreement shall not be construed as a waiver of any provision or right. Neither the course of conduct between the parties nor trade practice shall act to modify any provision of this Agreement. www.collegexplorer.co.in may assign its rights and duties under this Agreement to any party at any time without notice to you. Any rights not expressly granted herein are reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 0px; margin: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center quote">
                    <div class="space">
                    </div>
                    <q style="font-family: 'Allan', cursive;">If you don’t build your dream, someone else will hire you to help them build theirs</q><span> - Dhirubhai Ambani </span>
                </div>
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
            <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </body>
        </html>
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
