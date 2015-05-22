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
  
  		<link rel="stylesheet" href="/css/font-awesome.min.css">
  		<link rel="stylesheet" href="/css/animate.min.css" />
		<link rel="stylesheet" href="/css/jquery.nouislider.min.css" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="/css/rssblog.css" />
		<link rel="stylesheet" href="/css/rj-mobile-menu.css">
		<link rel="stylesheet" href="/css/media-queries.css">

		<?php include("tracking-ga-code.php"); ?>
		<?php include("tracking-crazyegg-code.php"); ?>

    </head>
    <body>
    <!-- site holder -->	
	<section id="site-container">

		<!-- new mobile menu start -->
		<div id="rf">
		  <div id="top-bar">
		  	<a href="/careers" id="hiring-alert">We're Hiring!</a>
		    <a class="site-logo" href="/"></a>
		    <a href="#" id="nav-toggle"><img src="http://rejoiner.com/CC-MobileAssets/menu-icon.png" draggable="false"></a>
		    <nav class="rj-mobile-menu">
		      	<ul id="rj-mobile">
		        	<li><a href="/#product-intro">Product</a></li>
		        	<li><a href="/pricing">Pricing</a></li>
		        	<li class="submenu">
		          		<a id="use-cases-cell" href="#">Use Cases<i></i></a>
		          		<!--[if gte IE 7 ]>
							<a id="use-cases-cell" href="#">Use Cases</a>
						<![endif]-->
		          		<ul id="industries">
		            		<li><a href="/agencies">Agencies</a></li>
		            		<li><a href="/online-retailers">Online Retailers</a></li>
		            		<li><a href="/ticketing-vendors">Ticketing Vendors</a></li>
		          		</ul>
		        	</li>
		        	<li><a class="mob-show" href="/about">About Us</a></li>
		        	<li><a class="mob-show" href="/resources">Free Resources</a></li>
		        	<li><a class="mob-hide phone" href="tel:+18002844603">(800) 284-4603</a></li>
		        	<li><a href="/request-a-demo" id="demo-request">Request a Demo</a></li>
		        	<li><a href="htpp://app.rejoiner.com" id="signin">Sign In</a></li>
		      	</ul>
		    </nav>
		  </div><!-- end top bar -->
		</div><!-- end rf div -->


		<script type="text/javascript">
		$('#nav-toggle').click(function() {
			$('nav').toggleClass("active");
		});
		$('.submenu').click(function() {
			$(this).toggleClass("open");
		});
		</script>

			
		<!-- new mobile menu end -->




	