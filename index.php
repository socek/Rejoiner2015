<?php
	$pageTitle = "Email Marketing Automation for eCommerce | Rejoiner";
	$metaDescription = "Rejoiner is a lifecycle email marketing software designed specifically to help online retailers and eCommerce companies reduce their cart abandonment rate and retain their best customers.";
	include("header-home.php");
?>
		
<section id="homebanner">
	<div>
		<div id="hometext">
			<h1>Automated Lifecycle Email Software to Help You Maximize Customer Lifetime Value and Reduce Your Cart Abandonment Rate Up To 15%</h1>
			<p>Rejoiner is data-driven automated lifecycle email software for eCommerce companies and online retailers looking to automate cart abandonment and retention email campaigns to grow revenue–on autopilot.</p>
			<!--<span class="animated fadeInDown arrow-img-anim"><br>scroll down to learn more</span>-->
		</div>
		<div class="clear"></div>
	</div>
</section>


<section id="clientlogos">
	<div>
		<h3>TO DATE CUSTOMERS LIKE THESE HAVE<br> 
		GENERATED&nbsp;<span class="money bolderUp">$</span><span class="countUp bolderUp" id="count">40,193,359</span>&nbsp;IN REVENUE</h3>
		<div class="logo-images">
			<img src="img/client-logos/mastercard.png" alt="Mastercard">
			<img src="img/client-logos/Hallmark.png" alt="Hallmark">
			<img src="img/client-logos/Dreamworld_logo.png" alt="Dreamworld">
			<img src="img/client-logos/amf-logo.png" alt="AMF">
			<img src="img/client-logos/liftopia-logo.png" alt="Liftopia">
			<img src="img/client-logos/vtech.png" alt="VTech">
		</div>
	</div>
</section>

	<section id="product-intro">
		<div>
			<div id="hometext">
				<h4>why rejoiner?</h4>
				<h1>Rejoiner Helps You Maximize Revenue From Your Existing Customers, Convert More Abandoned Carts Into New Customers, with the Ability to Continuously Optimize Campaigns to Increase Sales</h1>
				<div id="product-show">
					<img class="product-mobile" draggable="false" alt="Rejoiner Dashboard" src="CC-MobileAssets/product-show-mobile.png">
					<img class="product-desktop" draggable="false" alt="Rejoiner Dashboard" src="img/home/prod-cover-bg.png">
				</div>
			</div>
		</div>
	</section>


<?php include("inc-prodnav.php"); ?>



<section id="home-feature-section">
	<div class="main-spacer">
		<div class="three-intro-holder">

			      <div class="row">
			        <div class="thirds column">
			         <a href="/#recover"><div class="recover-teaser"></div></a>
			          <p>
			          	Reduce your cart abandonment rate and recover lost revenue instantly with automated cart abandonment email campaigns.
					  </p>
					  <a href="/#recover">learn more</a>
			        </div>

			        <div class="thirds column">
			        <a href="/#retain"><div class="retain-teaser"></div></a>
			          <p>
			          	Maximize customer lifetime revenue<br>per customer with highly personalized<br>and automated data-driven retention emails.
			          </p>
			          <a href="/#retain">learn more</a>
			        </div>

			        <div class="thirds column">
			      		<a href="/#optimize"><div class="optimize-teaser"></div></a>
			          <p>Optimize campaigns with personalization, segmentation, A/B testing and more to consistently maximize revenue from every campaign.</p>
			          <a href="/#optimize">learn more</a>
			        </div>

			  </div>
	</div>
</section>

<!-- INCLUDE ALL HOMEPAGE SECTIONS -->
<?php include("inc-recover.php"); ?>
<?php include("inc-retain.php"); ?>
<?php include("inc-optimize.php"); ?>
<?php include("inc-automate.php"); ?>
<?php include("inc-succeed.php"); ?>
<!-- end HOMEPAGE SECTIONS -->



<section id="last-call">
	<div>
		<div class="last-call-text">
			<h1>
				If you’re looking for a team of experts to help you with your lifecycle email automation needs. <span>We’re here to help.</span>
			</h1>
			<p>
				We are experts helping online retailers and ecommerce companies scale and automate the growth of their online stores. If you’d like to use as few internal resources as possible and get set up to succeed, then get in touch.
			</p>
			<a href="/request-a-demo" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequest', eventLabel: 'homepage'});">schedule demo</a>
		</div>
	</div>
</section>




<section id="btm-quote">
	<div>
		<div class="btm-quote-image">
			<img src="/img/new-home/hp-jason-z.png" draggable="false" alt="Jason Zhang Product Manager of Liftopia.com">
		</div>
		<div class="btm-quote-text">
			<p>"Rejoiner has helped us recover <span>$714,351.15</span> in lost revenue and it became a top 5 referral source for us during the 2013-14 ski season."</p>
			<small><b>JASON ZHANG</b>, PRODUCT MANAGER, LIFTOPIA.COM</small>
		</div>
	</div>
</section>



<!-- end OF PAGE // START OF JS -->

<!-- /////////////////////////////////////////////////////////// 
	SMOOTH SCROLL 
/////////////////////////////////////////////////////////// -->

<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 5
        }, 900);
        return false;
      }
    }
  });
});
</script> <!-- end SMOOTH SCROLL -->




<!-- ////////////////////////////////////////////////////////
	COUNT UP 
///////////////////////////////////////////////////////////-->

<script type="text/javascript">
$(function(){
    init_count_up('<?php echo $appUrl; ?>/marketingsite/stats/total-revenue.json');
});
</script> <!-- end COUNT UP -->



			
<?php include("footer.php"); ?>