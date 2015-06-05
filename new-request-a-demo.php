<?php
	$pageTitle = "Request A Demo";
	$metaDescription = "See the power of Rejoiner and learn about what it can do for your growth with automated, granular email campaigns.";
	include("header.php");
?>

<section id="new-request-demo">
	<div class="demo-text-top">
		<h3>Discover how Rejoiner can help you maximize revenue from your existing customers, convert more from abandoned carts into new customers, and give you the ability to continuously, optimize campaigns to grow revenue.</h3>
	</div>
	<div class="demo-text-bottom">
		<h4>During this demo we'll also show you</h4>
		<ul>
			<li>The first campaign we set up for our customers on average adds 10% revenue growth in the first 12 months.</li>
			<li>How Rejoiner, once setup, helps you automate email campaigns to grow revenue on autopilot.</li>
			<li>How our lifecycle email marketing experters can set up, manage and optimize all of your lifecycle email campaigns to ensure your company succeeds – guaranteed!</li>
			<li>Our "top down" A/B testing approach to improve campaign performance by 100%+ in terms of revenue generated.</li>
		</ul>
	</div>

	<div id="req_form">
		<div class="form-container">
			<form id="request_demo" action="<?php echo $appUrl; ?>/marketingsite/forms/demo_form/">
				<div class="col">   
					<label for="time">Schedule Your Personalized Demo</label>
				    <input id="name" placeholder="Your First and Last Name" type="text">
			    	<span class="bar"></span>
			    	<div class="help-text"></div>
			    </div>
				<div class="col">
					<input id="email" placeholder="Your Company Email" type="text">
					<span class="bar"></span>
					<div class="help-text"></div>
				</div>
				<div class="col">
					<input id="website" placeholder="Company's Website" type="text">
					<span class="bar"></span>
					<div class="help-text"></div>
				</div>
				<div class="col">
					<select id="op_time" class="custom-dropdown__select custom-dropdown__select--white styled-select-arrow">
						<option selected="selected" value="Unspecified">Total Annual Revenue</option>
						<option value="Less than $1 Million">Less than $1 Million</option>
						<option value="Between $1 - $5 Million">Between $1 - $5 Million</option>
						<option value="Between $5 - $25 Million">Between $5 - $25 Million</option>
						<option value="Between $25 - $100 Million">Between $25 - $100 Million</option>
						<option value="More than $100 Million">More than $100 Million</option>
					</select>
				</div>
				<div class="col">
					<label class="date" for="time">What time and date works best for you?</label>
						<select id="op_time" class="custom-dropdown__select custom-dropdown__select--white styled-select-arrow">
						<option selected="selected" value="9am">9:00 A.M.</option>
						<option value="10am">10:00 A.M.</option>
						<option value="11am">11:00 A.M.</option>
						<option value="12am">12:00 P.M.</option>
						<option value="1pm">1:00 P.M.</option>
						<option value="2pm">2:00 P.M.</option>
						<option value="3pm">3:00 P.M.</option>
						<option value="4pm">4:00 P.M.</option>
						<option value="5pm">5:00 P.M.</option>
						<option value="6pm">6:00 P.M.</option>
					</select>
					<input id="date" placeholder="Time Zone" type="text">
					<span class="bar"></span>
					<div class="help-text"></div>
				</div>
				<div class="col">
					<input id="location" placeholder="Preferred Date" type="text">
					<span class="bar"></span>
					<div class="help-text"></div>
				</div>
				<div class="col demo-btn">
					<a id="seehow" href="#send" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestsubmit', eventLabel: 'demopage'});">Schedule My Demo</a>
					<div id="tick-req"><img style="border-style:none;" src="img/forms/chk-dark-green.png"></div>
					<div id="progress-bar-req"></div>
				</div>
				<div class="clear"></div>
			</form>
		</div>
	</div>

</section>

<section id="demo-btm-quote">
	<div>
		<h2>Schedule a demo to see how our customers have generated $46,000,000 + to date using Rejoiner's automated lifecycle email software.</h2>
		<div class="demo-btm-quote-image">
			<img src="/img/new-home/hp-jason-z.png" draggable="false" alt="Jason Zhang Product Manager of Liftopia.com">
		</div>
		<div class="demo-btm-quote-text">
			<p>"Rejoiner has helped us recover <span>$714,351.15</span> in lost revenue and it became a top 5 referral source for us during the 2013-14 ski season."</p>
			<small><b>JASON ZHANG</b>, PRODUCT MANAGER, LIFTOPIA.COM</small>
		</div>
	</div>
</section>
<section id="tour">
	<h5>prefer a self guided tour?</h5>
	<p>Here’s a pre-recorded version of our demo:</p>
	<div id="wistia-video">
		<iframe id="guidedDemoTour" src="//fast.wistia.net/embed/iframe/dovzh2ewgx?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="560" height="315"></iframe>
		<script src='//fast.wistia.com/static/iframe-api-v1.js'></script>
	</div>
</section>		

			
<?php include("footer.php"); ?>