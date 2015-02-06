<?php
	$pageTitle = "";
	$metaDescription = "";
	include("header.php");
?>

<section id="request">
	<h1>request a demo</H1>
	<h5 style="text-transform: none; color: #43474a; font-weight: normal; font-family: 'Ideal Sans SSm A'; line-height: 1.8em;">A personal tour without the sales pitch</h5>

	<p style="color: #6d7079; font-family: 'Ideal Sans SSm A'; line-height: 1.8em;">Mike, our founder &amp; CEO, will walk you through all of Rejoiner’s features and answer any questions that may come up along the way.</p>
</section>

<section id="req_form">
	<div>
		<img src="img/MikeDemo.jpg">
		
		<form>
			<div class="col">
				<label for="name">Your Name</label>
				<input type="text" id="name" placeholder="Your First and Last Name">
				
				<label for="website">Website URL</label>
				<input type="text" id="website" placeholder="www.businesssite.com">	
			</div>
			<div class="col">
				<label for="email">Company Email</label>
				<input type="text" id="email" placeholder="contact@mycompany.com">
				
				<label for="location">Location</label>
				<input type="text" id="location" placeholder="United States">
			</div>
			<div class="shortcol">
				<label for="time">Preferred Time:</label>
				<label for="date">Preferred Date:</label>
				<select id="time">
				    <option value="9am">9:00 A.M.</option>
				    <option value="10am">10:00 A.M.</option>
				    <option value="11am">11:00 A.M.</option>
				    <option value="12am">12:00 A.M.</option>
				</select>
				

				<input type="text" id="date" placeholder="January 1">
			</div>
			<div class="col">
				<a id="seehow" href="#">Schedule My Demo</a>
			</div>
			
			<div class="clear"></div>
		</form>

	</div>
</section>

<section id="tour">
	<h5>prefer a self guided tour?</h5>
	<p>Here’s a pre-recorded version of our demo:</p>
	
	<img src="img/tour.jpg">
</section>		

			
<?php include("footer.php"); ?>