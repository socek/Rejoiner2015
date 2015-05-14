<?php
	$pageTitle = "Request A Demo";
	$metaDescription = "See the power of Rejoiner and learn aboyt what it can do for your growth with automated, granular email campaigns.";
	include("header.php");
?>

<section id="request" style="margin-top:4%;">
	<h1>request a demo</H1>
	<h5>A personal tour without the sales pitch</h5>

	<p>A lifecycle email marketing expert will walk you through all of Rejoiner’s features and answer any questions that may come up along the way.</p>
</section>

<section id="req_form">
	<div>
		<img class="mikeDemo" src="img/MikeDemo.png" alt="Mike Arsenault">
		<form id="request_demo" action="<?php echo $appUrl; ?>/marketingsite/forms/demo_form/">
			<div class="col">
				<label for="name">Your Name</label>
				<input id="name" placeholder="Your First and Last Name" type="text">
				<div class="help-text"></div>

				<label for="website">Website URL</label>
				<input id="website" placeholder="yourcompany.com" type="text">
				<div class="help-text"></div>
			</div>
			<div class="col">
				<label for="email">Company Email</label>
				<input id="email" placeholder="name@yourcompany.com" type="text">
				<div class="help-text"></div>

				<label for="location">Location</label>
				<input id="location" placeholder="United States" type="text">
				<div class="help-text"></div>
			</div>
			<div class="shortcol">
				<div class="left-side">
					<label for="time">Preferred Time</label>
					<span id="time">
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
				</div>
				<div class="right-side">
					<label id="date" for="date">Preferred Date</label>
					<input id="date" placeholder="Ex: January 1" type="text">
				</div>
			</span></div>
			<div class="col demo-btn">
				<a id="seehow" href="#send" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'demorequestsubmit', eventLabel: 'demopage'});">Schedule My Demo</a>
				<div id="tick-req"><img style="border-style:none;" src="img/forms/chk-dark-green.png"></div>
				<div id="progress-bar-req"></div>
			</div>

			<div class="clear"></div>
		</form>

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