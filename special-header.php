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
		<!--<link rel="stylesheet" href="/css/jquery.nouislider.min.css"/>-->
		<link rel="stylesheet" href="/css/reset.min.css"/>
        <link rel="stylesheet" href="/css/main.min.css"/>
        <link rel="stylesheet" href="/css/special-pages.min.css"/>
		<link rel="stylesheet" href="/css/media-queries.min.css">
        <link rel="stylesheet" href="/css/special-pages-mobile.min.css">
		<link rel="stylesheet" href="/css/animate.min.css"/>
		<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/7195332/626206/css/fonts.css" />
        <!-- Scripts -->
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="//use.typekit.net/bon1cvx.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/jquery.sparkline.min.js" defer="defer"></script>
		<!-- <script src="/js/jquery-ui-1.10.3.custom.js" defer="defer"></script> -->
		<script src="/js/jquery.easing.min.js" defer="defer"></script>
		<!-- Tracking Codes -->
		<?php include("_googleanalytics/tracking-ga-code.php"); ?>
		<?php include("_googleanalytics/tracking-crazyegg-code.php"); ?>

    </head>
    <body>
    <!-- site holder -->
	<section id="site-container">

        <?php
            $highColorLiftopia = "#71a3ce";
            $fbLink = "https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.rejoiner.com%2Fliftopia-case-study";
            $twLink = "https://twitter.com/share?url=http%3A%2F%2Frejoiner.com%2Fliftopia-case-study&text=How eCommerce Company Liftopia Recovered $714,000 in Cart Abandonment Revenue. Here's the link:&via=rejoinerapp";
            $gplusLink = "";
            $lnLink = "";
        ?>

		<!-- new mobile menu start -->
		<div id="special-header">
		  <div class="top-bar">
              <div class="left-side">
                  <a class="white-logo" href=""></a>
              </div>
              <div class="right-side">
                  <a class="down-book" href="#download-guide-anchor">Download PDF Case Study</a>
                  <div class="share">
                      <span>SHARE</span>
                          <a href="<?php echo $fbLink; ?>" title="Share on Facebook" class="facebook facebook-share share-btn" data-js="facebook-share">&nbsp;&nbsp;</a>
                          <a href="<?php echo $twLink; ?>" title="Share on Twitter" class="twitter twitter-share share-btn" data-js="twitter-share">&nbsp;&nbsp;</a>
                          <a href="#" title="#" class="social">&nbsp;&nbsp;&nbsp;</a>
                  </div>
              </div>
		  </div><!-- end top bar -->
		</div><!-- end rf div -->


		<!-- new mobile menu end -->
