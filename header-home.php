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
		<script src="/js/jquery.sparkline.min.js"></script>
		<script src="/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="/js/jquery.easing.min.js"></script>

		<!-- counter javascript -->
		<script src="/js/home-counter/countUp.js"></script>
		<script src="/js/jquery.waypoints.min.js"></script>
		<!-- js media queries -->
		<!--<script src="/js/enquire.js"></script>  -->

  
  		<link rel="stylesheet" href="/css/font-awesome.min.css">
  		<link rel="stylesheet" href="/css/animate.min.css" />
		<link rel="stylesheet" href="/css/jquery.nouislider.min.css" />
		<link rel="stylesheet" href="/css/global-old.css" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="/css/rssblog.css" />
		<link rel="stylesheet" href="/css/media-queries.css">
		<link rel="stylesheet" href="/css/mobile-menu.css">


		<?php include("tracking-ga-code.php"); ?>
		<?php include("tracking-crazyegg-code.php"); ?>
		

    </head>
    <body>

<section id="site-container">
		<!--<header class="masthead clearfix">
			<div class="masthead-wrapper">
				<a href="/"><div class="site-logo">&nbsp;</div></a>
				<nav class="primary-menu">
					<a href="/#product-intro">Product</a>
					<a href="/pricing">Pricing</a>
					<a href="tel:+18002844603">(800) 284-4603</a>
					<a class="demo-request" href="/request-a-demo" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'navdemorequestclick', eventLabel: 'homepagefixednav'});">Request a Demo</a>
					<a href="https://app.rejoiner.com/accounts/login/" target="_blank" class="signin">Sign In</a>
				</nav>
				<div id="mobile-toggle">
					<label class="mobile-label" for="mobile-menu-toggle">&nbsp;</label>
					<input type="checkbox" id="mobile-menu-toggle"/>
					<div id="mobile-menu">
					 <a href="#">Product</a>
					 <a href="#">Pricing</a>
					 <a href="#">About Us</a>
					 <a href="#">Contact Us</a>
					 <a href="#">Request a Demo</a>
					</div>
				</div>
			</div>
		</header>-->



	<!-- start NEW RESPONSIVE NAV -->

		<div>
		  <header id="activate-mobile" class="wrapper">
		    <div class="site-logo"></div>
		    <div class="responsive"></div>
		    <nav class="resp-new-menu">
		      <ul>
		        <li><a href="/">Product</a></li>
		        <li><a href="/pricing">Pricing</a></li>
		        <li class="mob-show"><a href="/resources">Free Resources</a></li>
		        <li class="mob-show"><a href="/contact">Contact Us</a></li>
		        <li><a href="tel:+18002844603">(800) 284-4603</a></li>
		        <li class="demopush"><a class="demo-request" href="/request-a-demo">Request a Demo</a></li>
		        <li class="signin"><a class="signin" href="https://app.rejoiner.com/accounts/login/">Sign In</a></li>
		      </ul>
		    </nav>
		  </header>
		</div>


		<script type="text/javascript">
		$('div.responsive').click(function() {
		  $('nav').slideToggle(300);
		  $('div.responsive').addClass("rotateIn animated");
		  $('nav ul').addClass("fadeIn animated");
		});
		</script>


	<!-- end NEW RESPONSIVE NAV -->




	