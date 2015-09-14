<?php include("config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $pageTitle ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta name="description" content="<?php echo $metaDescription ?>"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- html5shiv -->
	<script src="/js/html5shiv.js" async></script>
	<script src="/js/html5shiv-printshiv.js" async></script>
    <!-- Stylesheets -->
  	<link rel="stylesheet" href="/css/skeleton.min.css"/>
	<!--<link rel="stylesheet" href="/css/jquery.nouislider.min.css"/>-->
    <link rel="stylesheet" href="/css/reset.min.css"/>
	<link rel="stylesheet" href="/css/main.min.css"/>
	<link rel="stylesheet" href="/css/rj-mobile-menu.min.css">
	<link rel="stylesheet" href="/css/media-queries.min.css">
	<link rel="stylesheet" href="/css/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/7195332/626206/css/fonts.css" />
	<!-- Scripts-->
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="//use.typekit.net/bon1cvx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js" defer="defer"></script>
	<script src="/js/jquery.sparkline.min.js" defer="defer"></script>
	<script src="/js/jquery.easing.min.js" defer="defer"></script>
	<!-- <script src="/js/jquery-ui-1.10.3.custom.js" defer="defer"></script> -->
	<!--	<script src="/js/wow.min.js" async></script>-->

	<!-- Tracking Codes -->
	<?php include("_googleanalytics/tracking-ga-code.php"); ?>
	<?php include("_googleanalytics/tracking-crazyegg-code.php"); ?>
</head>

<body>
	<!-- site holder -->
	<section id="site-container">
		<div class="menu-trigger"></div>

		<!-- sticky navigation -->
		<header id="stickynav" class="masthead clearfix">
			<div class="masthead-wrapper">
				<a href="/" style="border:none;border:0;"><div class="site-logo"></div></a>
					<nav class="primary-menu">
						<img style="margin-right:-8px; opacity:.8;" src="/img/generic/phone-icon-small.jpg" draggable="false">
						<span>Call us&nbsp;&nbsp;(800) 284-4603&nbsp;&nbsp;or</span>
						<input id="fadePopup" type="submit" value="Request A Demo" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestclick', eventLabel: 'scrollnav'});">
					</nav>
			</div><!-- end masthead wrapper -->
		</header>
		<!-- end sticky navigation -->

		<!-- new mobile menu start -->
		<div id="rf">
		  <div id="top-bar">
		  	<a href="/careers" id="hiring-alert">We're Hiring!</a>
		    <a class="site-logo" href="/"></a>
		    <a id="nav-toggle" style="margin-right:-.5%;" class="ninja-btn" title="menu"><span></span></a>
		    <!-- start navigation -->
		    <nav class="rj-mobile-menu">
		    	<!-- start list of menu items -->
		      	<ul id="rj-mobile">
		        	<li><a href="/#product-intro">Product</a></li>
		        	<li><a href="/pricing">Pricing</a></li>
		        	<!-- start submenu -->
		        	<li class="submenu">
		          		<a id="use-cases-cell" href="#">Rejoiner For <?php echo $pageName; ?><i></i></a>
		          		<!--[if gte IE 7 ]>
							<a id="use-cases-cell" href="#">Rejoiner is For</a>
						<![endif]-->
		          		<ul id="industries">
		            		<li><a href="/agencies">Agencies</a></li>
		            		<li><a href="/online-retailers">Online Retailers</a></li>
		            		<li><a href="/ticketing-vendors">Ticketing Vendors</a></li>
		          		</ul>
		        	</li>
		        	<!-- end submenu -->
		        	<li><a class="mob-show" href="/about">About Us</a></li>
		        	<li><a class="mob-show" href="/resources">Free Resources</a></li>
		        	<li><a class="mob-hide phone" href="tel:+18002844603">(800) 284-4603</a></li>
		        	<li><a href="/request-a-demo" id="demo-request">Request a Demo</a></li>
		        	<li><a href="http://app.rejoiner.com" id="signin">Sign In</a></li>
		      	</ul>
		      	<!-- end menu items list -->
		    </nav>
		    <!-- end navigation -->
		  </div><!-- end top bar -->
		</div><!-- end rf div -->


	<script type="text/javascript">
	$('#nav-toggle').click(function() {
		$('nav').toggleClass("active");
		$('.ninja-btn').toggleClass("active");
	});
	$('.submenu').click(function() {
		$(this).toggleClass("open");
	});
	</script>


	<!-- demo pop up code -->
	<div class="demo-popup">
		<!-- start overlay -->
		<div class="demo-popup-overlay"></div>
		<!-- end overlay -->
		<!-- start demo form wrapper -->
		<div class="demo-popup-wrapper">
			<button class="demo-popup-close">x</button>
			<div class="demo-popup-content box shadow">
				<h1>schedule your personalized demo</h1>
				<form id="demoformodal" class="demo-form" action="<?php echo $appUrl; ?>/marketingsite/forms/modal_demo_form/">
				    <input id="demoNameInput" placeholder="Name" type="text">
				    <input id="demoEmailInput" placeholder="Email Address" type="email">
				    <input id="demoWebsiteInput" placeholder="Website URL" type="text">
				    <select id="exampleRecipientInput" id="">
				        <option value="" disabled="disabled" selected="selected" style="display:none;">Total Annual Revenue</option>
				        <option value="0">Less than $1 Million</option>
				        <option value="1">Between $1 - $5 Million</option>
				        <option value="2">Between $5 - $25 Million</option>
				        <option value="3">Between $25 - $100 Million</option>
				        <option value="4">More than $100 Million</option>
				    </select>
			        <section class="section-cta">
			        	<input id="schedule-my-demo" value="Schedule My Demo" type="submit" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestsubmit', eventLabel: 'popoverlay'});">
			        	<div class="progress-bar"></div>
			        </section>
		     	</form>
		     	<p id="demo-form-info"></p>
			</div>
		</div>
		<!-- end demo form wrapper -->
	</div> <!-- end demo popup-->

	<!-- request demo button -->
	<script type="text/javascript">
		var $body = $('body'),
		    $popup = $('.demo-popup');
		$('#fadePopup').click(function() {
		  $body.addClass('popup-active');
		  $popup.fadeIn();
		});

		$('.demo-popup-close').add('.demo-popup-overlay').click(function() {
		  $body.removeClass('popup-active');
		  $popup.fadeOut();
		});
	</script>
	<!-- end demo pop up code -->

	<!-- SMOOTH SCROLL -->
		<script type="text/javascript">
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top -10
		        }, 300);
		        return false;
		      }
		    }
		  });
		});
		</script>

	<!-- kt js code stickynav -->
		<script type="text/javascript">
					(function($) {
					var animationDown = 'animated fadeInDown';
					var animationUp = 'animated fadeInUp';
					    $(document).ready(function(){
					        $(window).scroll(function(){
					            if ($(this).scrollTop() > 900) {
					                $('#stickynav').fadeIn(100);
					            } else {
					                $('#stickynav').fadeOut(100);
					            }
					        });
					    });
					})(jQuery);
		</script>

		<!-- image pre-loeader -->
		<!--<script type="text/javascript">
		$.preloadImages = function() {
		  for (var i = 0; i < arguments.length; i++) {
		    $("<img />").attr("src", arguments[i]);
		  }
		}

		$.preloadImages("../img/industries/retailers/retailers-header-bg.jpg","../img/industries/ticketing/ticketing-header-bg.jpg", "../img/industries/retailers/retailers-lower-header-bg.jpg", "../img/industries/ticketing/bg-middle-ticketing.jpg", "../img/backgrounds/agency-header-bg.jpg", "../img/industries/ticketing/cta-bg-ticketing.jpg", "../img/industries/retailers/cta-bg-retailers.jpg", "../img/backgrounds/agency-header-bg.jpg", "../img/backgrounds/careers-header-bg.jpg");
		</script>-->
