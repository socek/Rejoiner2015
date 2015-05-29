<?php
	$pageTitle = "Pricing | Rejoiner";
	$metaDescription = "Pricing for Rejoiner's automated lifecycle email and cart abandonment software.";
	include("header.php");
?>

<section id="pricing" >
	<h1>Enterprise-Grade Lifecycle Email Software</h1>
	<h3>Transparent Pricing. Done-for-you Campaigns</h3>
	<section id="neue-pricing">
	<?php include("inc-pricing-plans.php"); ?>
	</section>
</section>

<div id="pricing-quote">
	<div>
		<img class="quote-image" draggable="false" alt="Jason Zhang" src="img/pricing/JasonZhang.png" alt="">
		<p class="quote-text">"Rejoiner has helped us recover $714,351.15 in lost revenue and it became a top 5 referral source for us during the 2013-14 ski season."<br><span><b>JASON ZHANG</b>, PRODUCT MANAGER, Liftopia.com</span></p>
	</div>
</div>
<section id="pricing-demo">
	<div>
		<div class="pricing-demo-text">
		  	<h1>get a short personalized demo</h1>
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



<section id="pricing-faqs">
	<div>
		<h1>FREQUENTLY ASKED QUESTIONS</h1>
		<div class="questions-holder">
			<div class="row">
				<div class="one-half column">
			    	<p><b>Do I have to sign a contract?</b></p>
			        <p>Nope. Rejoiner is a month-to-month subscription service that can be cancelled with 30 days notice.</p>
			    </div>

			    <div class="one-half column">
			          <p><b>Do you charge commission or a percentage of revenue generated?</b></p>
			          <p>Nope. Rejoiner is a flat subscription with no set up, pay for performance, or overage fees.</p>
			    </div>
			</div>   
			<div class="row">
			    <div class="one-half column">
			        <p><b>How long will it take before I can<br>start my campaign(s)?</b></p>
			        <p>It depends on your integration path. At the most, 7-10 business days.</p>
			        </div>
			    <div class="one-half column">
			          <p><b>Is there a setup or integration fee?</b></p>
			          <p>No. You have our full support during the integration process and this support does not cost extra.</p>
			    </div>
			</div>
			<div class="row">
			    <div class="one-half column">
			        <p><b>Can I pay my subscription annually?</b></p>
			        <p>Yes, we offer a 10% discount on annual subscriptions.</p>
			    </div>

			    <div class="one-half column">
			        <p><b>Do you have a video demo that<br>I could watch?</b></p>
			        <p>Yes, you can watch a 6-minute self-guided demo of Rejoiner <a href="/request-a-demo#tour">here</a>.</p>
			    </div>
			</div>
		</div> <!-- end questions holder -->
	</div><!-- end gen div -->
</section>


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

