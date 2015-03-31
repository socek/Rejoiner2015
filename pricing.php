<?php
	$pageTitle = "Pricing | Rejoiner";
	$metaDescription = "Pricing for Rejoiner's automated lifecycle email and cart abandonment software.";
	include("header.php");
?>

	<section id="pricing" style="margin-top:70px;" >
	    <h1>Enterprise-Grade Lifecycle Email Software</h1>
	    <h3 style="margin: -10px 0 0;">Transparent Pricing. Done-for-you Campaigns</h3>
	</section>

	<section id="neue-pricing" style="padding-bottom: 70px;">
	<?php include("inc-pricing-plans.php"); ?>
	</section>

	<section id="pricing-demo">
		<div>
			<div class="pricing-demo-text">
		  			<h1>get a short personalized demo</h1>
		  			<p>Join one of our conversion experts for a personalized product tour. They'll learn about your business email marketing and customize a demo that outlines how your company can grow with Rejoiner.</p>
			
					<form id="demoform" action="<?php echo $appUrl; ?>/marketingsite/forms/modal_demo_form/" class="demo-form">
				        <input placeholder="Name" id="demoNameInput" type="text">
				        <input placeholder="Email Address" id="demoEmailInput" type="email">
				        <br>
				        <input placeholder="Website URL" id="demoWebsiteInput" type="url">
				        <select id="exampleRecipientInput">
				          <option value="" disabled="disabled" selected="selected" style="display:none;">Total Anual Revenue</option>
				          <option value="0">Less than $1 Million</option>
				          <option value="1">Between $1 - $5 Million</option>
				          <option value="2">Between $5 - $25 Million</option>
				          <option value="3">Between $25 - $100 Million</option>
				          <option value="4">More than $100 Million</option>
				        </select>

				        <br>
				        <section class="section-cta">
				         <a href="#submit" id="submit_demoform" style="width:520px; height:25px;display:inline-block;" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestsubmit', eventLabel: 'pricingpage'});">Schedule My Demo</a>
				         <div id="demo-req-tick"><img src="img/forms/chk-orange.png"></div>
				         <div class="progress-bar"></div>
				         </section>
		     		 </form>
		     		 <p id="demo-form-info"></p>
			</div>
		</div>
		
	</section>



	<section id="pricing-faqs">
	  	<div>
		      <h1>FREQUENTLY ASKED QUESTIONS</h1>
		      <div class="questions-holder">
			      <div class="row">
			        <div class="one-half column">
			          <p><b>Do I have to sign a contract</b></p>
			         	<p>
			         	Nope. Rejoiner is a month-to-month subscription service that can be cancelled with 30 days notice. 
						</p>
			        </div>

			        <div class="one-half column">
			          <p><b>Do you charge commission or a percentage of revenue generated?</b></p>
			          <p>
			          	Nope. Rejoiner is a flat subscription with no set up, pay for performance, or overage fees. 
			          </p>
			        </div>
			      </div>
			      
			      <div class="row">
			        <div class="one-half column">
			          <p><b>How long will it take before I can<br>start my campaign(s)?</b></p>
			          <p>
			          	It depends on your integration path. At the most, 7-10 business days.
					  </p>
			        </div>

			        <div class="one-half column">
			          <p><b>Is there a set up or integration fee?</b></p>
			          <p>
			          	No. You have our full support during the integration process and this support does not cost extra.
			          </p>
			        </div>
			      </div>


			      <div class="row">
			        <div class="one-half column">
			          <p><b>Can I pay my subscription annually?</b></p>
			          <p>Yes, we offer a 10% discount on annual subscriptions.</p>
			        </div>

			        <div class="one-half column">
			          <p><b>Do you have a video demo that<br>I could watch?</b></p>
			          <p>Yes, you can watch a 6-minute self-guided demo of the product <a href="/request-a-demo.php#tour">here</a>.</p>
			        </div>
			      </div>
			  </div>

		</div>
	</section>




 <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 968046892;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/968046892/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- CRAZY EGG CODE -->	
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0018/0289.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
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


<?php include("footer.php"); ?>