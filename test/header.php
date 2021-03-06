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
		<script src="/js/jquery-migrate-1.1.1.js"></script>
		<script src="/js/jquery.sparkline.min.js"></script>
		<script src="/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="/js/jquery.zclip.js"></script>
		<script src="/js/rejoiner-code-generator.js"></script>
		<script src="/js/jquery.placeholder.min.js"></script>
		<script src="/js/jquery.nouislider.all.min.js"></script>
		<script src="/js/countUp.js"></script>
		<script src="/js/noframework.waypoints.min.js"></script>
  
  		<link rel="stylesheet" href="/css/animate.min.css" />
		<link rel="stylesheet" href="/css/jquery.nouislider.min.css" />
		<link rel="stylesheet" href="/css/global-old.css" />
	<!--	<link rel="stylesheet" href="/css/main.css" />-->
		<link rel="stylesheet" href="/css/rssblog.css" />


		
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/foundation/normalize.css" />
		<!-- This is how you would link your custom stylesheet -->
		<link rel="stylesheet" href="css/foundation/rejoiner.css">



    </head>
    <body>




<!--
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name"><a href="#"><img src="img/generic/green-logo.png" draggable="false"></a>
    </li>
  </ul>

  <section class="top-bar-section">
    <div class="right">
        <a href="#">link</a>
        <a href="#">link</a>
        <a href="#">link</a>
    </div>
  </section>
</nav>
-->

		<!--
		<header id="stickynav" class="">
			<div class="sticky-holder" class="clearfix">
				<div id="logo"><a href="home.php"><img src="img/generic/green-logo.png"></a></div>
				<div class="holder-right">
					<nav>
						<img style="margin-right:-8px; opacity:.8;" src="img/generic/phone-icon-small.jpg" draggable="false"><span>Call us&nbsp;&nbsp;(800) 284-4603&nbsp;&nbsp;or</span>
						<input type="submit" value="Request A Demo">
					</nav>
				</div>
			</div>
		</header>
-->
		<header class="fixednav clearfix">
			<div class="row" style="height:4rem;padding: 20px auto;">
				<div class="large-6" style="float:left; padding-top: 15px;"><a href="home.php"><img src="img/generic/green-logo.png"></a></div>
				<div class="large-6" style="float:right; text-align:right;padding:25px 15px;font-size:13px; text-transform:uppercase;">
					<a href="home.php#product-intro" onClick="document.getElementById('product-intro').scrollIntoView();">Product</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="pricing.php">Pricing</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href=""tel:+18002844603"">(800) 284-4603</a>
					<a style="margin-left:15px;" href="https://app.rejoiner.com/accounts/login/" target="_blank" class="signin">Sign In</a>
				</div>
			</div>
		</header>
	

	<script>
    $(document).foundation();
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
			                 $('#stickynav').addClass(animationDown);
			            } else {
			                $('#stickynav').fadeOut(100);
			            }
			        });
			    });
			})(jQuery);
		</script>	


		<!--<script>
			window.onscroll=function(){document.getElementById('stickynav').setAttribute('class', (window.pageYOffset>800?'stickyon clearfix':'clearfix'));}
		</script>-->