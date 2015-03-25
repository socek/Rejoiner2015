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





<section id="home-feature-section" style="margin-top:50px;">
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
			<a id="fadePopup" href="#">schedule demo</a>
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
				        <input id="demoWebsiteInput" style="float:left" placeholder="Website URL" type="url">
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
				        	<input value="Schedule My Demo" type="submit">
				         </section>
		     		 </form>
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
        }, 900);
        return false;
      }
    }
  });
});
</script>


<!-- COUNT UP -->
<script type="text/javascript">
$(function(){
    init_count_up('<?php echo $appUrl; ?>/marketingsite/stats/total-revenue');
});
</script> 

<!-- PRODUCT NAV SCRIPT -->
<script type="text/javascript">
	slide_in = true;
	slide_out = false;
	$(window).scroll(function() {
	    if ($("#product-nav").hasClass("is-fixed")) {
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
	        $('.scrollto').each(function() {
	            sections[this.id] = $(this).offset().top;
	        });

	        var $this = $(this),
	            pos = $this.scrollTop();
	        for (i in sections) {
	             if (sections[i] > pos && sections[i] < pos + _height) {
	                $('#menuPositions').find('a').removeClass('activated');
	                $('a[href="#' + i + '"]').addClass('activated');
	            }
	        }

	    } else {
	        //push the sections back to normal
	        if (slide_out) {
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
	         $('#menuPositions').find('a').removeClass('activated');
	    }
	});
</script>



<script type="text/javascript">
$(function () {
    $('#product-nav').stickyNavbar({
        activeClass: "", // Class to be added to highlight nav elements
        sectionSelector: "scrollto", // Class of the section that is interconnected with nav links
        animDuration: 350, // Duration of jQuery animation as well as jQuery scrolling duration
        startAt: 150, // Stick the menu at XXXpx from the top of the this() (nav container)
        easing: "swing", // Easing type if jqueryEffects = true, use jQuery Easing plugin to extend easing types - gsgd.co.uk/sandbox/jquery/easing
        animateCSS: true, // AnimateCSS effect on/off
        animateCSSRepeat: false, // Repeat animation everytime user scrolls
        cssAnimation: "fadeInDown", // AnimateCSS class that will be added to selector
        jqueryEffects: false, // jQuery animation on/off
        jqueryAnim: "slideDown", // jQuery animation type: fadeIn, show or slideDown
        selector: "a", // Selector to which activeClass will be added, either "a" or "li"
        mobile: false, // If false, nav will not stick under viewport width of 480px (default) or user defined mobileWidth
        mobileWidth: 480, // The viewport width (without scrollbar) under which stickyNavbar will not be applied (due user usability on mobile)
        zindex: 9999, // The zindex value to apply to the element: default 9999, other option is "auto"
        stickyModeClass: "is-fixed", // Class that will be applied to 'this' in sticky mode
        unstickyModeClass: "is-static" // Class that will be applied to 'this' in non-sticky mode

        // CURRENTLY THIS WORKS GREAT - WE NEED TO ADD A SCROLL OFFSET TO THE LINKS
        // CURRENTLY THEY ARE ANCHORING EVERY href WAY ON TOP OF THE SELECTED SECTION.
    });
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