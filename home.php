<?php
	$pageTitle = "Email Marketing Automation & Cart Abandonment Software for eCommerce | Rejoiner";
	$metaDescription = "";
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
			<img src="img/client-logos/mastercard.png">
			<img src="img/client-logos/Hallmark.png">
			<img src="img/client-logos/Dreamworld_logo.png">
			<img src="img/client-logos/amf-logo.png">
			<img src="img/client-logos/liftopia-logo.png">
			<img src="img/client-logos/vtech.png">
		</div>
	</div>
	<img src="img/stroke.png" class="strokeimg">
</section>

	<section id="product-intro">
		<div>
			<div id="hometext">
				<h4>product features</h4>
				<h1>Rejoiner Helps You Maximise Revenue From Your Existing Customers, Convert More Abandoned Carts Into New Customers, with the Ability to Continuously Optimize Campaigns to Increase Sales</h1>
				<div id="product-show" class="animated"></div>
			</div>
		</div>
	</section>


	<div id="product-nav">
	<nav class="prod-holder">
		<ul>
			<li><a href="#recover"><b class="small-border">Recover</b></a></li>
			<li><a href="#retain"><b class="small-border">Retain</b></a></li>
			<li><a href="#optimize"><b class="small-border">Optimize</b></a></li>
			<li><a href="#automate"><b class="small-border">Automate</b></a></li>
			<li><a href="#succeed"><b class="small-border">Succeed</b></a></li>
		</ul>
	</nav>
</div> 





<section id="home-feature-section">
	<div class="main-spacer">
		<div class="three-intro-holder">

			      <div class="row">
			        <div class="thirds column">
			         <img src="/img/new-home/mail-fast.png" draggable="false" alt="mail fast">
			          <p>
			          	Reduce your cart abandonment rate and recover lost revenue instantly with automated cart abandonment email campaigns.
					  </p>
					  <a href="#">learn more</a>
			        </div>

			        <div class="thirds column">
			        <img src="/img/new-home/user-icon.png" draggable="false" alt="maximize">
			          <p>
			          	Maximise customer lifetime revenue<br>per customer with highly personalized<br>and automated data-driven
			          </p>
			          <a href="#">learn more</a>
			        </div>

			        <div class="thirds column">
			      		<img src="/img/new-home/test-icon.png" draggable="false" alt="test">
			          <p>Optimize campaigns with personalization, segmentation, A/B testing and more to consistently maximise revenue from every campaign.</p>
			          <a href="#">learn more</a>
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
				We are experts helping online retailers and ecommerce companies scale and automate the growth of their online stores. If you’d like to use as few internal resources as possible and get setup to succeed, then get in touch.
			</p>
			<a href="/pricing.php#pricing-demo">schedule demo</a>
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



<!-- SMOOTH SCROLL -->
<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -100
        }, 900);
        return false;
      }
    }
  });
});
</script>


<!-- COUNT UP -->
<script type="text/javascript">
var options = {  
    useEasing: true,
    useGrouping: true,
    separator: ',',
    decimal: '.',
    prefix: '',  
    suffix: ''
};
var count = new countUp("count", 35000000, 40193360, 2, 10000000, options);
var countFaster = new countUp("count", 35000000, 40193360, 2, 50, options);
//count.start();
  
	$(window).scroll(function() {
		$('.bolderUp').each(function(){
		var countRev = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (countRev < topOfWindow+850) {
				$(this).addClass("countMoreUp animated pulse");
				count.start();
				//countFaster.start();
				//speed up counter to endvalue -- sprint to finish
			//}
			//else if (countRev > topOfWindow+500) {
			//	$(this).removeClass("animated pulse").addClass("animated fadeIn");
			//	count.stop();
			//	countFaster.stop();
				
			}
			else if (countRev > topOfWindow+850) {
				$(this).removeClass("animated pulse").addClass("animated fadeIn");
				count.stop();
			}
		});
	});

</script> 

<!-- PRODUCT NAV SCRIPT -->
<script type="text/javascript">
	var productNav = $('#product-nav'),
		productNavTopPosition = productNav.offset().top,
		contentSections = $('#home-feature-section');
		activelink = $('prod-holder a');
		$(window).scroll(function() {
			var currentScroll = $(window).scrollTop();
			if (currentScroll >= productNavTopPosition) {
				productNav.addClass('is-fixed');
				//push the home feat sections with a top margin
			}
			else {
				productNav.removeClass('is-fixed');
				//push the sections back to normal
			}
		});
</script>

<!-- spacing -->

<!--<script type="text/javascript">
		function scrollNav() {
		  $('.prod-holder a').click(function(){  
		    //Toggle Class
		    $(".is-active").removeClass("is-active");      
		    $(this).closest('li').addClass("is-active");
		    var theClass = $(this).attr("class");
		    $('.'+theClass).parent('li').addClass('is-active');
		    //Animate
		    $('html, body').stop().animate({
		        scrollTop: $( $(this).attr('href') ).offset().top + 100
		    }, 400);
		    return false;
		  });
		  $('.scrollTop a').scrollTop();
		}
		scrollNav();
	</script>-->






			
<?php include("footer.php"); ?>