<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="public/img/favicon.png" type="image/png">
        <title>Enactus VITC</title>
        <link rel="stylesheet" href="public/css/bootstrap.css">
        <link rel="stylesheet" href="public/vendors/linericon/style.css">
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="public/vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/responsive.css">
        <!--Start Of Styling Required for this page only-->
        <style type="text/css">
        	.rslides {
			  position: relative;
			  list-style: none;
			  overflow: hidden;
			  width: 100%;
			  padding: 0;
			  margin: 110px 10px;
			  }

			.rslides li {
			  -webkit-backface-visibility: hidden;
			  position: absolute;
			  display: none;
			  width: 100%;
			  left: 0;
			  top: 0;
			  }

			.rslides li:first-child {
			  position: relative;
			  display: block;
			  float: left;
			  }

			.rslides img {
			  display: block;
			  height: auto;
			  float: left;
			  width: 100%;
			  border: 0;
			  }
        	.notebook{
        		padding: 0;
			}
			.notebook>img{
				width: inherit;
				border-radius: 20px;
			}
			.overlap{
				z-index: 1;
				position: absolute;
				padding: 1.6% 15% 1% 5%;
				width: auto;
			}
			.overlap p{
				color: black;
				font-size: x-large;
			}
			@media(min-width: 1200px)
			{
				.col-lg-6{
					max-width: 50%;
					float: left;
					margin-bottom: 2%;
				}
			}
			@media(min-width: 768px)
			{
				.col-md-6{
					max-width: 50%;
					float: left;
					margin-bottom: 2%;
				}
			}
			@media(min-width: 576px)
			{
				.col-sm-6{
					max-width: 50%;
					float: left;
					margin-bottom: 2%;
				}
				.rslides{
					display: none;
				}
			}
			@media(max-width: 575px)
			{.col-xs-12{
				display: none;
			}
			}
			@media (max-width: 768px){
				.overlap>p{
					font-size: larger;
				}
			}
			@media (max-width: 360px){
				.overlap>p{
					font-size: medium;
				}
			}
			.fontn{
				font-family: Harrington
			}
		    .container2>li {
		      margin-bottom: 20px;
		    }
		    
		    .container2 {
		      -webkit-box-sizing: border-box;
		              box-sizing: border-box;
		      display: block;
		      background-color: transparent;
		      list-style: none;
		      padding: 0;
		    }
			/* Hide the radio button/checkbox */
		    input[type=radio]{
		        display: none;
		    }

		    /* Click to expand div (Bigger clickable area for radio buttons by adding label for="") */
		    label{
		      display: block;
		      background-color: #fec3005e;
		      cursor: pointer;
		      -webkit-user-select: none;
		      -moz-user-select: none;
		      -ms-user-select: none;
		      user-select: none;
		      padding: 20px;
		      border-radius: 20px;
		      font-size: 24px;
		      margin:0px 10px;
		    }

		    label:hover {
		     	background-color: #FEC300;
		    }

		    /*  Hide the toggle content */
		    .toggle-content{
		      display: none;
		    }

		    /*  Show the toggle content by using the general sibling selector */
		    input[type=radio]:checked ~ label{
		        background-color: #FEC300;
		        border-radius: 20px;
		    }

		    input[type=radio]:checked ~ .toggle-content{
		        display: block;
		        background-color: transparent;
		        padding: 20px;
		        border-bottom-left-radius: 4px;
		        border-bottom-right-radius: 4px;
		    }
        </style>
        <!--End Of Styling Required for this page only-->
    </head>
<body>
	<!--<% include frontpart/navbar %>-->
	<?php include('frontpart/navbar.php');?>

	<!--================ Home Banner Area =================-->
	<section class="home_banner_area" >
		<div class="banner_inner"  data-slides='["public/img/banner/ban1.jpg","public/img/banner/ban2.jpg","public/img/banner/ban3.jpg"]'>
			<div class="container" >
				<div class="banner_content">
					<p class="upper_text">Give a hand</p>
					<h2>to make the better world</h2>
					<p>
						That don't lights. Blessed land spirit creature divide our made two
						itself upon you'll dominion waters man second good you they're divided upon winged were replenish night
					</p>
					<a class="primary_btn mr-20" href="#">Donate Now</a>
					<a class="primary_btn yellow_btn text-white" href="#">See Causes</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Causes Area =================--
	<section class="causes_area">
		<div class="container">
			<div class="main_title">
				<h2>Our Projects</h2>
				<p>Creepeth called face upon face yielding midst is after moveth </p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Give Donation</h4>
						<img src="img/causes/c1.png" alt="">
						<p>
							It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Give Inspiration</h4>
						<img src="img/causes/c2.png" alt="">
						<p>
							It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Become Bolunteer</h4>
						<img src="img/causes/c3.png" alt="">
						<p>
							It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!--================ End Causes Area =================-->
<div style="height:200px"></div>
<!--NO CHANGES MADE ABOVE THIS PONT -->
<ul class="container2">
  <li>
      <input id="radio-toggle-1" type="radio" name="toggle" />
       
      <label class="fontn" for="radio-toggle-1">Project Heading</label>
    <div class="toggle-content">
      	<div class="container notebook">
			<div class="overlap">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="clearfix visible"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<!--Arrangement Changes To Responsive Slides when on mobile screen-->
					<ul class="rslides">
					  <li><img src="public/Soumi/SI1.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI2.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI3.jpg" alt=""></li>
					</ul>
			</div>
			<img src="public/Soumi/Lined_Notebook3.jpg" alt="background-image">
		</div>
    </div>
  </li>
  <li>
      <input id="radio-toggle-2" type="radio" name="toggle"/>
      <label class="fontn" for="radio-toggle-2">Project Heading</label>
    <div class="toggle-content">
      	<div class="container notebook">
			<div class="overlap">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="clearfix visible"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<!--Arrangement Changes To Responsive Slides when on mobile screen-->
					<ul class="rslides">
					  <li><img src="public/Soumi/SI1.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI2.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI3.jpg" alt=""></li>
					</ul>
			</div>
			<img src="public/Soumi/Lined_Notebook3.jpg" alt="background-image">
		</div>
    </div>
  </li>
  <li>
      <input id="radio-toggle-3" type="radio" name="toggle"/>
      <label class="fontn" for="radio-toggle-3">Project Heading</label>
    <div class="toggle-content">
      	<div class="container notebook">
			<div class="overlap">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="clearfix visible"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<!--Arrangement Changes To Responsive Slides when on mobile screen-->
					<ul class="rslides">
					  <li><img src="public/Soumi/SI1.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI2.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI3.jpg" alt=""></li>
					</ul>
			</div>
			<img src="public/Soumi/Lined_Notebook3.jpg" alt="background-image">
		</div>
    </div>
  </li>
  <li>
      <input id="radio-toggle-4" type="radio" name="toggle"/>
      <label class="fontn" for="radio-toggle-4">Project Heading</label>
    <div class="toggle-content">
      	<div class="container notebook">
			<div class="overlap">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="clearfix visible"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI2.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI1.jpg" alt="background-image" style="width: inherit;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img src="public/Soumi/SI3.jpg" alt="background-image" style="width: inherit;">
					</div>
					<!--Arrangement Changes To Responsive Slides when on mobile screen-->
					<ul class="rslides">
					  <li><img src="public/Soumi/SI1.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI2.jpg" alt=""></li>
					  <li><img src="public/Soumi/SI3.jpg" alt=""></li>
					</ul>
			</div>
			<img src="public/Soumi/Lined_Notebook3.jpg" alt="background-image">
		</div>
 		<div class="clearfix visible"></div>
    </div>
  </li>
</ul>
 <div class="clearfix visible"></div>
	<!--<% include frontpart/footer %>-->
	<?php include('frontpart/footer.php');?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<script src="public/js/popper.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/stellar.js"></script>
	<script src="public/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="public/js/jquery.ajaxchimp.min.js"></script>
	<script src="public/js/mail-script.js"></script>
	<script src="public/js/countdown.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="public/js/gmaps.min.js"></script>
	<script src="public/js/theme.js"></script>
	<!--Added these Javascripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
	<script >
	(function($) {

'use strict';

var $slides = $('[data-slides]');
var images = $slides.data('slides');
var count = images.length;
var slideshow = function() {
	$slides
		.css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
		.show(0, function() {
			setTimeout(slideshow, 3000);
		});
		
};

slideshow();

}(jQuery));

	</script>
	<script>
  $(function() {
    $(".rslides").responsiveSlides({
    	  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 2000,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: false,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
    });
  });
</script>
</body>
</html>