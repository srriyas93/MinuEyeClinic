<?php
    include('_includes/nxtconfig.php');
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">

<head>
  <title>Dr.Minu's Eye Clinic</title>
  <meta charset="utf-8">
  <!-- Meta -->
  <meta name="keywords" content="" />
  <meta name="author" content="">
  <meta name="robots" content="" />
  <meta name="description" content="" />

  <!-- this styles only adds some repairs on idevices  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo $GLOBALS['BASE_URL'] ?>images/favicon.ico">

  <!-- Google fonts - witch you want to use - (rest you can just remove) -->
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
    type='text/css'>

  <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

  <!-- Stylesheets -->
  <link rel="stylesheet" media="screen" href="<?php echo $GLOBALS['BASE_URL'] ?>js/bootstrap/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>js/mainmenu/menu.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>css/default.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>css/layouts.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>css/shortcodes.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>css/responsive-leyouts.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>js/masterslider/style/masterslider.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['BASE_URL'] ?>css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>css/et-line-font/et-line-font.css">
  <link href="<?php echo $GLOBALS['BASE_URL'] ?>js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['BASE_URL'] ?>js/tabs/assets/css/responsive-tabs.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['BASE_URL'] ?>js/smart-forms/smart-forms.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['BASE_URL'] ?>js/cubeportfolio/cubeportfolio.min.css">
  <!-- Floating Appointment Button -->
  <style>
        .whatsapp-right
        {
          position: fixed;
          bottom: 80px;
          margin: auto;
          right: 10px;
          z-index:9999;
        }

        .whatsapp-right img
        {
          width:60px;
        }
        
        .right 
        {
          position: fixed;
          top: 0;
          bottom: 0;
          height: 3.1em;
          margin: auto;
          background: #1FBEF0;
        }

        .right 
        {
          right: 0;
          -webkit-transform-origin: 100% 50%;
          -moz-transform-origin: 100% 50%;
          -ms-transform-origin: 100% 50%;
          -o-transform-origin: 100% 50%;
          transform-origin: 100% 50%;
          -webkit-transform: rotate(90deg) translate(50%, 50%);
          -moz-transform: rotate(90deg) translate(50%, 50%);
          -ms-transform: rotate(90deg) translate(50%, 50%);
          -o-transform: rotate(90deg) translate(50%, 50%);
          transform: rotate(90deg) translate(50%, 50%);
        }

  </style>
  
  <link rel="stylesheet" href="css/custom.css" type="text/css" />

  <!-- Remove the below comments to use your color option -->
  <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
  <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
  <!--<link rel="stylesheet" href="css/colors/green.css" />-->
  <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
  <!--<link rel="stylesheet" href="css/colors/red.css" />-->
  <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
  <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
  <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
  <!--<link rel="stylesheet" href="css/colors/violet.css" />-->
  <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
  <!--<link rel="stylesheet" href="css/colors/mossgreen.css" />-->

</head>

<body>
  <div class="site_wrapper">
    <div class="topbar light topbar-padding">
      <div class="container">
        <div class="topbar-left-items two">
          <ul class="toplist toppadding pull-left paddtop1">
            <li class="rightl">Call us</li>
            <li>+91 8714802881</li>
          </ul>
        </div>
        <!--end left-->

        <div class="topbar-right-items two pull-right">
          <ul class="toplist toppadding">
            <li>Opening Hours : Monday to Saturday - 4PM to 6PM</li>
            <li><a data-toggle="modal" data-target=".enquiry" class=" btn btn-yellow-3 less-top-bottom-padding btn-round btn-small-2">Make An Appointment</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div id="header">
      <div class="container">
        <div class="navbar blue navbar-default yamm">
          <div class="navbar-header row">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
              class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span
                class="icon-bar"></span></button>
            <a href="#" class="navbar-brand less-top-padding"><img src="<?php echo $GLOBALS['BASE_URL'] ?>images/logo.png" alt=""
                class="logoimg" /></a><span class="logotext">Dr Minu's Eye Clinic</span>
          </div>
          <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
            <ul class="nav blue navbar-nav">
              <li><a id="menu-index" href="<?php echo $GLOBALS['BASE_URL'] ?>index.php" class="dropdown-toggle">Home</a></li>
              <li><a id="menu-about" href="<?php echo $GLOBALS['BASE_URL'] ?>about.php" class="dropdown-toggle">About</a></li>
              <li class="dropdown"> <a id="menu-treatments" href="#" class="dropdown-toggle">Treatments</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a id="menu-treatments" href="<?php echo $GLOBALS['BASE_URL'] ?>treatments/cataract.php">Cataract</a> </li>
                  <li><a id="menu-treatments" href="<?php echo $GLOBALS['BASE_URL'] ?>treatments/oculoplasty.php">Oculoplasty</a> </li>
                  <li><a id="menu-treatments" href="<?php echo $GLOBALS['BASE_URL'] ?>treatments/squint.php">Squint</a> </li>
                </ul>
              </li>
              <li><a id="menu-news" href="<?php echo $GLOBALS['BASE_URL'] ?>news.php" class="dropdown-toggle">Health News</a></li>
              <li><a id="menu-gallery" href="<?php echo $GLOBALS['BASE_URL'] ?>gallery.php" class="dropdown-toggle">Gallery</a></li>
              <li><a id="menu-contact" href="<?php echo $GLOBALS['BASE_URL'] ?>contact.php" class="dropdown-toggle">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

     <!-- Right Float Button Whatsapp -->
     <a href="https://api.whatsapp.com/send?phone=+919895804177&text=Hi,Enquiry From drminuseyeclinic.com" class="whatsapp-right"><img src="<?php echo $GLOBALS['BASE_URL'] ?>images/whatsapp/wht.png" class="whatsappicon"></a>
    </a>
    <!-- Right Float Button and Contact Form -->
    <button type="button" class="btn btn-warning right" data-toggle="modal" data-target=".enquiry" style="z-index:999;background-color:#1FBEF0;border-color:#FFF;"><b>Book An Eye Test</b></button>
    <div class="modal fade enquiry" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container" style="width:80%; margin:0 auto;">
                    <h3 class="tittle" style="text-align:center;margin-top:20px;">Book An Eye Test</h3>
                    <form name="f1" class="contact__form" method="POST" action="<?php echo $GLOBALS['BASE_URL'] ?>emailer/mail-book-eye-test.php">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input name="mobile" type="text" class="form-control" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <label>Appointment Date</label>
                            <input name="apdate" type="text" class="form-control" placeholder="DD/MM/YYYY" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                        </div>
                          <input name="submit" type="submit" class="btn btn-primary" value="Send Message"> <button type="submit" class="btn btn-info" data-dismiss="modal">Close</button>
                          <div id="emailres"></div>
                        <br />
                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Write Review -->
    <div class="modal fade review" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container" style="width:80%; margin:0 auto;">
                    <h3 class="tittle" style="text-align:center;margin-top:20px;">Write your review</h3>
                    <form name= "f2" class="contact__review" method="POST" action="<?php echo $GLOBALS['BASE_URL'] ?>emailer/mail-review.php">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input name="review_name" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input name="review_mobile" type="text" class="form-control" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <label>Review</label>
                            <textarea name="review_message" class="form-control" placeholder="Review" required></textarea>
                        </div>
                          <input name="submit" type="submit" class="btn btn-primary" value="Send Review"> <button type="submit" class="btn btn-info" data-dismiss="modal">Close</button>
                          <div id="emailres"></div>
                          <div id="reviewdiv"></div>
                        <br />
                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>
   
