<?php
	$pageTitle = "Pricing | Rejoiner";
	$metaDescription = "Pricing for Rejoiner's automated lifecycle email and cart abandonment software.";
	include("header.php");
?>

	<section id="pricing" style="margin-top:70px;" >
	    <h2>transparent all inclusive pricing</h1>
	    <h3 style="margin: -10px 0 0;">send unlimited emails. no caps or overage fees</h3>
	</section>

	<section id="neue-pricing" style="padding-bottom: 70px;">
	<?php include("inc-pricing-plans.php"); ?>
	</section>

	<section id="pricing-demo">
		<div>
			<div class="pricing-demo-text">
		  			<h2>get a short personalized demo</h2>
		  			<p>Join one of our conversion experts for a personalized product tour. They'll learn about your business and customize a demo that outlines how your company can grow with Rejoiner.</p>
			
					<form id="demoform" action="//app.rejoiner.com/api/marketingsite/modal-demo-form/" class="demo-form">
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
				         <a href="#submit" id="submit_demoform" style="width:520px; height:25px;">Schedule My Demo</a>
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
			          	Negative. Rejoiner is a flat subscription with no set up, pay for performance, or overage fees. 
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
			          <p>Yes, you can watch a 6-minute self-guided demo of the product <a href="/request-a-demo.php">here</a>.</p>
			        </div>
			      </div>
			  </div>

		</div>
	</section>





<?php include("footer.php"); ?>