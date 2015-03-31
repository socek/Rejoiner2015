<?php include("config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <meta name="description" content="">
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

  
  		<link rel="stylesheet" href="/css/animate.min.css" />
		<link rel="stylesheet" href="/css/jquery.nouislider.min.css" />
		<link rel="stylesheet" href="/css/global-old.css" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="/css/rssblog.css" />

    </head>
    <body>

		<header class="masthead clearfix">
			<div class="masthead-wrapper">
				<div class="site-logo"><a href="/index.php"><?php include("img/home/web-logo-rj.svg"); ?></a></div>
				<nav class="primary-menu">
					<a href="#product-intro">Product</a>
					<a href="/pricing.php">Pricing</a>
					<a href="tel:+18002844603">(800) 284-4603</a>
					<a href="https://app.rejoiner.com/accounts/login/" target="_blank" class="signin">Sign In</a>
				</nav>
			</div>
		</header>
	

	
	<div class="demo-popup">
		<div class="demo-popup-overlay"></div>
		<div class="demo-popup-wrapper">
			<button class="demo-popup-close">x</button>
			<div class="demo-popup-content box shadow">
				<h1>schedule your personalized demo</h1>
					<form id="demoformodal" class="demo-form" action="<?php echo $appUrl; ?>/marketingsite/forms/modal_demo_form/">
				        <input id="demoNameInput" style="float:left" placeholder="Name" type="text">
				        <input id="demoEmailInput" style="float:left" placeholder="Email Address" type="email">
				        <br>
				        <input id="demoWebsiteInput" style="float:left" placeholder="Website URL" type="text">
				        <select id="exampleRecipientInput" style="float:left" id="">
				          <option value="" disabled="disabled" selected="selected" style="display:none;">Total Anual Revenue</option>
				          <option value="0">Less than $1 Million</option>
				          <option value="1">Between $1 - $5 Million</option>
				          <option value="2">Between $5 - $25 Million</option>
				          <option value="3">Between $25 - $100 Million</option>
				          <option value="4">More than $100 Million</option>
				        </select>

				        <br>
				        <section class="section-cta">
				        	<input id="schedule-my-demo" value="Schedule My Demo" type="submit" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequest', eventLabel: 'scrollnav'});">
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
