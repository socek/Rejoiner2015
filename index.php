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
			<img src="img/client-logos/mastercard.png" alt="Mastercard">
			<img src="img/client-logos/Hallmark.png" alt="Hallmark">
			<img src="img/client-logos/Dreamworld_logo.png" alt="Dreamworld">
			<img src="img/client-logos/amf-logo.png" alt="AMF">
			<img src="img/client-logos/liftopia-logo.png" alt="Liftopia">
			<img src="img/client-logos/vtech.png" alt="VTech">
		</div>
	</div>
	<img src="img/stroke.png" class="strokeimg">
</section>

	<section id="product-intro">
		<div>
			<div id="hometext">
				<h4>why rejoiner?</h4>
				<h1>Rejoiner Helps You Maximize Revenue From Your Existing Customers, Convert More Abandoned Carts Into New Customers, with the Ability to Continuously Optimize Campaigns to Increase Sales</h1>
				<div id="product-show" class="animated"></div>
			</div>
		</div>
	</section>


	<div id="product-nav" class="highlight">
        <div id="logoSlide">
           <div>
           		<?php include("img/home/web-logo-rj.svg"); ?>
           </div>
        </div>
        <div id="menuPositions">
           <nav class="prod-holder">
              <ul>
                 <li><a href="#recover" class="small-border"><b>Recover</b></a></li>
                 <li><a href="#retain" class="small-border"><b>Retain</b></a></li>
                 <li><a href="#optimize" class="small-border"><b>Optimize</b></a></li>
                 <li><a href="#automate" class="small-border"><b>Automate</b></a></li>
                 <li><a href="#succeed" class="small-border"><b>Succeed</b></a></li>
              </ul>
           </nav>
        </div>
        <div id="demoSlide">
           <div class="primary-menu">
              <input id="fadePopup" type="submit" value="Request A Demo">
           </div>
        </div>
    </div> 


<!-- PRODUCT NAV DEMO FORM + JS -->
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
				        	<input id="schedule-my-demo" value="Schedule My Demo" type="submit">
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

<!-- end PRODUCT NAV + JS -->




<section id="home-feature-section" style="margin-top:50px;">
	<div class="main-spacer">
		<div class="three-intro-holder">

			      <div class="row">
			        <div class="thirds column">
			         <img src="/img/new-home/mail-fast.png" draggable="false" alt="Reduce your cart abandonment rate and recover lost revenue instantly">
			          <p>
			          	Reduce your cart abandonment rate and recover lost revenue instantly with automated cart abandonment email campaigns.
					  </p>
					  <a href="#">learn more</a>
			        </div>

			        <div class="thirds column">
			        <img src="/img/new-home/user-icon.png" draggable="false" alt="Maximize customer lifetime revenue">
			          <p>
			          	Maximize customer lifetime revenue<br>per customer with highly personalized<br>and automated data-driven retention emails.
			          </p>
			          <a href="#">learn more</a>
			        </div>

			        <div class="thirds column">
			      		<img src="/img/new-home/test-icon.png" draggable="false" alt="Optimize cart abandonment campaigns">
			          <p>Optimize campaigns with personalization, segmentation, A/B testing and more to consistently maximize revenue from every campaign.</p>
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
			<a id="fadeFooterPopup" href="#">schedule demo</a>
		</div>
	</div>
</section>

<!-- FOOTER DEMO POPUP + JS -->

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
				        	<input id="schedule-my-demo" value="Schedule My Demo" type="submit">
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

		$('#fadeFooterPopup').click(function() {
		  $body.addClass('popup-active');
		  $popup.fadeIn();
		});

		$('.demo-popup-close').add('.demo-popup-overlay').click(function() {
		  $body.removeClass('popup-active');
		  $popup.fadeOut();
		});
		</script>

		<!-- GA CODE -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-25500978-2', 'auto');
		  ga('send', 'pageview');

		</script>


<!-- end FADE FOOTER POPUP + JS -->


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
          scrollTop: target.offset().top - 20
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



<!-- ///////////////////////////////////////////////////////////
	CLONE OF PRODUCT NAV
/////////////////////////////////////////////////////////// -->

<script type="text/javascript">
// Create a clone of the menu, right next to original.
$('#product-nav').addClass('original').clone().insertAfter('#product-nav').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','5000').css('height','70px').removeClass('original').hide();

scrollIntervalID = setInterval(stickIt, 10);


function stickIt() {

  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() >= (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.     
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
    $('.original').css('visibility','hidden');
  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').hide();
    $('.original').css('visibility','visible');
  }
}
</script> <!-- end CLONE PRODUCT NAV -->



<!-- ///////////////////////////////////////////////////////////
 PRODUCT NAV SCRIPT // SLIDE IN LOGO AND DEMO BUTTON FROM SIDES
////////////////////////////////////////////////////////////////
-->

<script type="text/javascript">
	slide_in = true;
	slide_out = false;
	$(window).scroll(function() {
	    if ($("#product-nav").hasClass("cloned")) {
	        //push the home feat sections with a top margin
	        if (slide_in) {
	            $('#logoSlide > div').css('position', 'relative').animate({
	                left: $('#logoSlide').width() - $('#logoSlide > div').width()
	            }, {
	                'start': function() {
	                    $('#logoSlide > div').css({
	                        "display": 'inline'
	                    });

	                }
	            });
	            $('#demoSlide > div').css('position', 'relative').animate({
	                right: $('#demoSlide').width() - $('#demoSlide > div').width()
	            }, {
	                'start': function() {
	                    $('#demoSlide > div').css({
	                        "display": 'inline'
	                    });
	                }
	            });
	            slide_in = false;
	            slide_out = true;
	        }

	        var sections = {},
	            _height = $(window).height(),
	            i = 0;

	        // Grab positions of sections
	        $('.highlight').each(function() {
	            sections[this.id] = $(this).offset().top;
	        });

	        var $this = $(this),
	            pos = $this.scrollTop();
	        for (i in sections) {
	             if (sections[i] > pos && sections[i] < pos + _height) {
	                $('#menuPositions').find('li a').removeClass('activated');
	                $('li a[href="#' + i + '"]').addClass('activated');
	            }
	        }

	    } else {
	        //push the sections back to normal
	        if ($("#product-nav").hasClass("original")) {
	            $('#logoSlide > div').css('position', 'relative').animate({
	                left: 0
	            }, {
	                'done': function() {
	                    $("#logoSlide > div").fadeOut("slow");
	                }
	            });
	            $('#demoSlide > div').css('position', 'relative').animate({
	                right: 0
	            }, {
	                'done': function() {
	                    $("#demoSlide > div").fadeOut("slow");
	                }
	            });
	            slide_out = false;
	            slide_in = true;
	        }
	         $('#menuPositions').find('li a').removeClass('activated');
	    }
	});
</script> <!-- end LOGO + DEMO SLIDE IN -->









			
<?php include("footer.php"); ?>