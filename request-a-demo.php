<?php
	$pageTitle = "Request A Demo";
	$metaDescription = "";
	include("header.php");
?>

<section id="request" style="margin-top:70px;">
	<h1>request a demo</H1>
	<h5 style="text-transform: none; color: #43474a; font-weight: normal; font-family: 'Ideal Sans SSm A', 'Ideal Sans SSm B'; line-height: 1em;margin-top:20px;">A personal tour without the sales pitch</h5>

	<p style="color: #6d7079; font-family: 'Ideal Sans SSm A', 'Ideal Sans SSm B';  line-height: 1.8em; font-size:1em;">Mike, our founder &amp; CEO, will walk you through all of Rejoiner’s features and answer any questions that may come up along the way.</p>
</section>

<section id="req_form">
	<div>
		<img src="img/MikeDemo.png" style="margin-left:70px;">
		<form id="request_demo" action="//app.rejoiner.com/api/marketingsite/demo-form/">
			<div class="col">
				<label for="name">Your Name</label>
				<input id="name" placeholder="Your First and Last Name" type="text">

				<label for="website">Website URL</label>
				<input id="website" placeholder="www.businesssite.com" type="text">
			</div>
			<div class="col">
				<label for="email">Company Email</label>
				<input id="email" placeholder="contact@mycompany.com" type="text">

				<label for="location">Location</label>
				<input id="location" placeholder="United States" type="text">
			</div>
			<div class="shortcol">
				<label for="time">Preferred Time:</label>
				<label for="date">Preferred Date:</label>
				<span id="time">
					<select id="op_time" class="custom-dropdown__select custom-dropdown__select--white styled-select-arrow">
				    <option selected="selected" value="9am">9:00 A.M.</option>
				    <option value="10am">10:00 A.M.</option>
				    <option value="11am">11:00 A.M.</option>
				    <option value="12am">12:00 A.M.</option>
				    <option value="1pm">1:00 P.M.</option>
				    <option value="2pm">2:00 P.M.</option>
				    <option value="3pm">3:00 P.M.</option>
				    <option value="4pm">4:00 P.M.</option>
				    <option value="5pm">5:00 P.M.</option>
				    <option value="6pm">6:00 P.M.</option>

				</select>
				<input id="date" placeholder="Ex: January 1" type="text">
			</span></div>
			<div class="col">
				<a id="seehow" href="#send" style="margin-left:-70px; width:245px;">Schedule My Demo</a>
				<div id="progress-bar-req"></div>
			</div>

			<div class="clear"></div>
		</form>

	</div>
</section>

<section id="tour" style="margin-bottom:50px;">
	<h5>prefer a self guided tour?</h5>
	<p>Here’s a pre-recorded version of our demo:</p>
	<br>
	<iframe src="https://fast.wistia.net/embed/iframe/gtgu0cvlbn?wmode=opaque" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="525px" height="317px"></iframe>
</section>		




			
<?php include("footer.php"); ?>