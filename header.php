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


        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="//use.typekit.net/bon1cvx.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/7195332/626206/css/fonts.css" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/jquery-migrate-1.1.1.js"></script>
		<script src="/js/jquery.sparkline.min.js"></script>
		<script src="/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="/js/jquery.zclip.js"></script>
		<script src="/js/jquery.placeholder.min.js"></script>

	  
  		<link rel="stylesheet" href="/css/animate.min.css" />
  		<link rel="stylesheet" href="/css/skeleton.css" />
		<link rel="stylesheet" href="/css/jquery.nouislider.min.css" />
		<!--<link rel="stylesheet" href="/css/global-old.css" />-->
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="/css/rssblog.css" />
		<!--<link rel="stylesheet" href="/css/ebook-popup.css" />-->
		<link rel="stylesheet" href="/css/media-queries.css">
		


		<?php include("tracking-ga-code.php"); ?>
		<?php include("tracking-crazyegg-code.php"); ?>

    </head>
    <body>

<section id="site-container">
		<div class="menu-trigger"></div>
		
		<header id="stickynav" class="masthead clearfix">
			<div class="masthead-wrapper">
				<div class="site-logo"><a href="/"><img src="img/generic/green-shadow-logo.png"></a></div>
					<nav class="primary-menu">
						<img style="margin-right:-8px; opacity:.8;" src="/img/generic/phone-icon-small.jpg" draggable="false">
						<span>Call us&nbsp;&nbsp;(800) 284-4603&nbsp;&nbsp;or</span>
						<input id="fadePopup" type="submit" value="Request A Demo" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestclick', eventLabel: 'scrollnav'});">
					</nav>
			</div>
		</header>


			<!-- start FIXED NAVIGATION -->
			<header class="masthead clearfix">
			<div class="masthead-wrapper">
				<div class="site-logo"><a href="/"><img src="img/generic/green-shadow-logo.png"></a></div>
				<nav class="primary-menu">
					<a href="/#product-intro">Product</a>
					<a href="/pricing">Pricing</a>
					<a href="tel:+18002844603">(800) 284-4603</a>
					<a class="demo-request" href="/request-a-demo" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'navdemorequestclick', eventLabel: 'fixednav'});">Request a Demo</a>
					<a href="https://app.rejoiner.com/accounts/login/" target="_blank" class="signin">Sign In</a>
				</nav>
			</div>
		</header>
		<!-- end FIXED NAVIGATION -->




		<!-- demo pop up code -->

	<div class="demo-popup">
		<div class="demo-popup-overlay"></div>
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
	</div>

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