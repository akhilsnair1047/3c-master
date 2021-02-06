<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themearth.com/demo/html/emeet/view/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 07:08:37 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>3C's</title>
    <meta name="description" content="Responsive Emeet HTML Template"/>
    <meta name="keywords" content="Bootstrap3, Event,  Conference, Meetup, Template, Responsive, HTML5"/>
    <meta name="author" content="themearth.com"/>

    <!-- twitter card starts from here, if you don't need remove this section -->
   

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Career, Counselling, Corporate"/>
    <meta property="og:url" content="http://www.spadeems.com"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Spade EMS"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">


    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="../assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="../assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="../assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />


    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cPoppins:300,400,400i,600,600i,700,800,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="../assets/css/style-default.min.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="../price.css">

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script>
 
    function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'a4');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#content')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('invoice.pdf');
            }, margins
        );
    }

</script>
</head>
</body>
<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<h1><b>Transaction details:</b></h1>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		$statux="Success";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is <h1>failure</h1></b>" . "<br/>";
        $statux="Failed";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		
				echo "<br>"."ORDER ID"." = ".$paramList['ORDERID'];
} ?>

<br>
<div class='container' id='content'>
	<header >
    <div id="lgx-header" class="lgx-header" >
        <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed " > <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container" > <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo">
                            <a href="index.html" class="lgx-scroll">
                                <img src="../assets/img/logo.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        
                        <ul class="nav navbar-nav lgx-nav navbar-right">
                            <li>
                                <a href="index.html"  role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
                                
                            <li><a class="lgx-scroll" href="#about">About Us</a></li>
                            <li><a class="lgx-scroll" href="#speaker">Speaker</a></li>
                            <li><a class="lgx-scroll" href="#schedule">Schedule</a></li>
                            
                            
                            <li><a class="lgx-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>


   <table class='table table-dark'>
    <thead>
      <tr>
        <th>Order-ID</th>
        <th><?php echo $paramList['ORDERID']; ?></th>
      </tr>
      <tr>
          <th>Order-Status</th>
          <th><?php echo $statux; ?></th>
      </tr>
<tr>
          <th>Order-For</th>
          <th>Linkedin-Strategy</th>
      </tr>
    </thead>
    </table>
    <table class='table table-dark'>
    <tbody>
      <tr>
        <td>Amount</td>
        <td><?php echo $paramList['TXNAMOUNT']; ?></td>
      </tr>
<tr>
        <td>Transaction ID</td>
        <td><?php echo $paramList['TXNID']; ?></td>
      </tr>
      <tr>
          <td>Email</td>
          <td><?php echo $_SESSION['EMAIL']; ?></td>
      </tr>
<tr>
          <td>Name</td>
          <td><?php echo $_SESSION['NAME']; ?></td>
      </tr>
<tr>
          <td>Contact Number</td>
          <td><?php echo $_SESSION['PHONE']; ?></td>
      </tr>
     
    </tbody>
  </table>
  <footer id="contact">
    <div id="lgx-footer" class="lgx-footer lgx-footer-black"> <!--lgx-footer-black-->
        <div class="lgx-inner-footer">
            <div class="lgx-subscriber-area ">
                <div class="container">
                    <div class="lgx-subscriber-inner">  <!--lgx-subscriber-inner-indiv-->
                        <h3 class="subscriber-title">Join Us!</h3>
                        <form class="lgx-subscribe-form" >
                            <div class="form-group form-group-email">
                                <input type="email" id="subscribe" placeholder="Enter your email Address  ..." class="form-control lgx-input-form form-control"  />
                            </div>
                            <div class="form-group form-group-submit">
                                <button type="submit" name="lgx-submit" id="lgx-submit" class="lgx-btn lgx-submit"><span>Subscribe</span></button>
                            </div>
                        </form> <!--//.SUBSCRIBE-->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <br>
                        <br>
                        <br>
                        <a class="logo" href="index.html"><img src="../assets/work-img/logo1.png" alt="Logo" style="width:300px"></a>
                    </div> <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Event Location </h3>
                        <h4 class="date">
                            Spadeems Youtube Channel
                        </h4>
                        <h3 class="footer-title">Timing</h3>
                        <h4 class="date">
                            11:00 to 01:00
                        </h4>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Social Connection</h3>
                        <p class="text">
                            Connect with us for more updates!
                        </p>
                        <br>
                        <ul class="list-inline lgx-social-footer">
                            <li><a href="https://www.facebook.com/marketingspade/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.twitter.com/EmsSpade/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/marketingspade/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/spadeems/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="https://wa.me/917508450610/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/marketingspade/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!--<div class="lgx-footer-single">
                        <h2 class="footer-title">Instagram Feed</h2>
                        <div id="instafeed">
                        </div>
                    </div>-->
                </div>
                <!-- Modal-->
                <div id="lgx-modal-map" class="modal fade lgx-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="lgxmapcanvas map-canvas-default" id="map_canvas"> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- //.Modal-->

                <div class="lgx-footer-bottom">
                    <div class="footer-copyright text-white text-center">
                        Copyright: © 2020
                        <a href="https://spadeems.com/" style="text-decoration: none;">
                        <strong class="text-blue">SPADE EMS</strong>
                        </a>
                        All Rights Reserved.
                        </div>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>

</footer>
</div>
<a href='javascript:demoFromHTML()' class='button'>Save Reciept</a>
<?php 
if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>You will recieve an email reagrding the conference soon</b>" . "<br/>";

echo "Kindly Save the Reciept for assistance in any disputes";
	}
	
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.

	
}

?>
</body>
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="../assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- Smooth Scroll  -->
<script src="../assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="../assets/libs/jquery.validate.js"></script>


<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="../assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="../assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="../assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="../assets/libs/countdown.js"></script>
<script src="../assets/libs/timer/TimeCircles.js"></script>

<!-- Counter JS -->
<script src="../assets/libs/waypoints.min.js"></script>
<script src="../assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="../assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="../assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="../assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="../assets/libs/header-parallax.js"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="../assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="../assets/js/custom.script.js"></script>
</html>

