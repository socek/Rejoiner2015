<?php
	$pageTitle = "Pricing | Rejoiner";
	$metaDescription = "Pricing for Rejoiner's automated lifecycle email and cart abandonment software.";
	include("header.php");
?>


<section id="pricing-new">
	<div class="hero">
		<h1>Pricing For Busy, Successful eCommerce Companies Looking For A Done-For-You Solution With A Guaranteed ROI</h1>
	</div>
	<div class="survey-list">
		<div>
			<p><strong>If you have a successful eCommerce company that is growing</strong>, and you're looking for new ways to maximize revenue and grow faster.</p>
		</div>
		
		<div class="check-after animateblock"></div>

		<div>
			<p><strong>But you don't want to spend $50,000, plus time and energy you don't have:</strong></p>
				<span>Hiring new staff and training them up inside your business.</span>
				<span>Piecing together a designer, HTML developer, and a number of different contractors to launch and manage your lifecycle email campaigns.</span>
				<span>Training your existing staff on new software and best practices just so you can get the results you're after.</span>
		</div>

		<div class="check-after animateblock"></div>
		
		<div>
			<p><strong>Of if you're unsure of the best way to segment and score your customer base and launch</strong> a lifecycle email campaign yourself...</p>
		</div>

		<div class="check-after animateblock"></div>

	</div>
	<div class="team-solution">
		<h2>Then Our Team's Done-For-You Solution May Be Right For You:</h2>
		
		<div class="solution-point">
			<p><strong>We'll take care of integrating the software</strong> into your eCommerce platform so that you can start tracking all abandonment &amp; purchase activity on your website.</p>
		</div>

		<div class="solution-point">
			<p><strong>We set up the right segments and automated campaigns you need</strong>, guaranteed to succeed – because this is what we do every day and we know what works and what does not.</p>
		</div>

		<div class="solution-point">
			<p><strong>You'll get access to our team</strong> who will develop custom responsive HTML email templates for you each month to match your brand and make you more sales – meaning you never have to worry about hiring anymore people for this.</p>
		</div>
		
		<div class="solution-point">
			<p><strong>We'll increase your conversions and revenue every month</strong> by developing, executing and optimizing campaigns through A/B testing (included with the optimize package).</p>
		</div>

		<div class="team-photo"><img src="/img/pricing/team-pricing-loose.png" alt="The Rejoiner Team: Mike, Ed, Karina and Max" draggable="false"></div>
	</div>

	<div class="pricing-plans">
		<h2>Our Plans &amp; Pricing</h2>
		<p>All packages include unlimited email sends with full service account management, plus unlimited HTML development, copyqriting, campaign strategy and monthly reviews, to help you maximize ROI.</p>
		<a href="#pricing-demo">REQUEST A DEMO</a>

		<div class="recover-plan"></div>
		<div class="retain-plan"></div>
		<div class="optimize-plan"></div>
		<div class="agency-plan"></div>
	</div>
</section>

<section id="pricing-demo">
	<div>
		<div class="pricing-demo-text">
		  	<h2>get a short personalized demo</h2>
		  	<p>Join one of our conversion experts for a personalized product tour. They'll learn about your business and customize a demo that outlines how your company can grow with Rejoiner.</p>
			<form id="demoform" action="<?php echo $appUrl; ?>/marketingsite/forms/modal_demo_form/" class="demo-form">
				<input placeholder="Name" id="demoNameInput" type="text">
				<input placeholder="Email Address" id="demoEmailInput" type="email">
				<br>
				<input placeholder="Website URL" id="demoWebsiteInput" type="url">
				<select id="exampleRecipientInput">
				    <option value="" disabled="disabled" selected="selected" style="display:none;">Total Annual Revenue</option>
				    <option value="0">Less than $1 Million</option>
				    <option value="1">Between $1 - $5 Million</option>
				    <option value="2">Between $5 - $25 Million</option>
				    <option value="3">Between $25 - $100 Million</option>
				    <option value="4">More than $100 Million</option>
				</select>
				<br>
				<section class="section-cta">
				    <a href="#submit" id="submit_demoform" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestsubmit', eventLabel: 'pricingpage'});">Schedule My Demo</a>
				    <div class="progress-bar"></div>
				</section>
		    </form>
		    <div id="demo-form-info-pricing"><img src="img/forms/chk-orange.png"> <p class="success-message"></p></div>
		</div>
	</div>	
</section>

<script>
    $(function(){
    var $elems = $('.animateblock');
    var winheight = $(window).height();
    var fullheight = $(document).height();
 
      $(window).scroll(function(){
        animate_elems();
      });
      function animate_elems() {
        wintop = $(window).scrollTop(); // calculate distance from top of window
     
        // loop through each item to check when it animates
        $elems.each(function(){
          $elm = $(this);
     
          if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
     
          topcoords = $elm.offset().top; // element's distance from top of page in pixels
     
          if(wintop > (topcoords - (winheight*.75))) {
            // animate when top of the window is 3/4 above the element
            $elm.addClass('animated').addClass('pull-down-check');
          }
        });
      } // end animate_elems()
    });
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 968046892;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/968046892/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>
<?php include("footer.php"); ?>

