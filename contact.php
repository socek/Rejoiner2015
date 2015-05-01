<?php
	$pageTitle = "Contact, Help & Support From The Rejoiner Team";
	$metaDescription = "Call us now, toll free on: 855-473-5646 or fill out our contact form to have any questions answered.";
	include("header.php");
?>

<section class="contactPage">
 <h1>Contact Us</h1>
  <p>Great support is a click or call away</p>

  <section class="contactus clearfix">

  	<form name="contactform" id="contactform" action="<?php echo $appUrl; ?>/marketingsite/forms/contact_us/" class="clearfix">
  		<label for="name">Your Name</label>
  		<input required="required" placeholder="First &amp; Last Name" name="name" type="text">

  		<label for="email">Email Address</label>
  		<input required="required" placeholder="yourname@company.com" name="email" id="email" type="email">

  		<label for="website">Website</label>
  		<input placeholder="yourcompany.com" required="required" name="website" type="url">

  		<label for="company">Company</label>
  		<input placeholder="Your Company, Inc." required="required" name="company" type="text">

  		<label for="comments">Comments</label>
  		<textarea name="comments" id="comments" required="required"></textarea>
		<div class="clear"></div>
  		<a href="#submit" id="submit_contactform" class="btn" onClick="ga('send', 'event', { eventCategory: 'mainsite', eventAction: 'contactrequest', eventLabel: 'contactpage'});">Send Request</a>
  		<div class="tick"><img src="img/forms/chk-dark-green.png"></div>
  		<div class="progress-bar"></div>
  	</form>
	<div id="contacttext">
	  	<h5>Need help?</h5>
	  	<p>Fill out the form to the left or <a href="mailto:support@rejoiner.com?subject=Contact Rejoiner">email us directly.</a></p>
  	
	  	<h5>Have a question?</h5>
	  	<p>Our <a href="http://docs.rejoiner.com/collection/23-faqs">FAQs</a> cover most common questions.</p>

	    <h5>Prefer to talk with a person?</h5>
	    <p>Call us at (800) 284-4603 from 8-6 EST.</p>
	</div>

  </section>
</section>



      
<?php include("footer.php"); ?>