<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="//use.typekit.net/bon1cvx.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/7195332/626206/css/fonts.css" />

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="/PagesRJ/www/js/jquery-migrate-1.1.1.js"></script>
		<script src="/PagesRJ/www/js/jquery.sparkline.min.js"></script>
		<script src="/PagesRJ/www/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="/PagesRJ/www/js/jquery.zclip.js"></script>
		<script src="/PagesRJ/www/js/rejoiner-code-generator.js"></script>
		<script src="/PagesRJ/www/js/jquery.placeholder.min.js"></script>
		<script src="/PagesRJ/www/js/jquery.nouislider.all.min.js"></script>
  
  		<link rel="stylesheet" href="/PagesRJ/www/css/animate.min.css" />
		<link rel="stylesheet" href="/PagesRJ/www/css/jquery.nouislider.min.css" />
		<link rel="stylesheet" href="/PagesRJ/www/css/global-old.css" />
		<link rel="stylesheet" href="/PagesRJ/www/css/main.css" />

    </head>
    <body>

		<div class="menu-trigger"></div>
		
		<header id="stickynav" class="animated fadeIn">
			<div class="holder" class="clearfix">
				<div id="logo"><a href="/PagesRJ/www/home.php"><img src="img/Rejoiner_HorizontalGreen.svg"></a></div>
				<nav>
					<input type="text" placeholder="yourname@email.com" name="header-email" />
					<input type="submit" value="Get Started"><!--<span>No credit card required</span>--><a href="#" class="signin">Sign In</a>
				</nav>
			</div>
		</header>

		<header class="fixednav clearfix">
			<div class="holder">
				<img src="img/header-bar.png" id="headerbar">
				<div id="logo"><a href="/PagesRJ/www/home.php"><img src="img/Rejoiner_HorizontalGreen.svg"></a></div>
				<nav>
					<ul id="dropdown">
						<li><a href="#">Features</a>
							<ul>
								<li><a href="#">Cart Abandonment</a></li>
								<li><a href="#">Post Purchase Email</a></li>
								<li><a href="#">Segmentation</a></li>
							</ul>
						</li>
					</ul>
					<a href="#">Pricing &amp; Sign Up</a>
					(800) 284-4603 <a href="#" class="signin">Sign In</a>
				</nav>
			</div>
		</header>
		
		<script>
			window.onscroll=function(){document.getElementById('stickynav').setAttribute('class', (window.pageYOffset>800?'stickyon clearfix':'clearfix'));}
		</script>