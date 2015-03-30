<?php
	$pageTitle = "Contact, Help & Support From The Rejoiner Team";
	$metaDescription = "Call us now, toll free on: 855-473-5646 or fill out our contact form to have any questions answered.";
	include("header.php");
?>

<section style="max-width: 980px; margin: auto;margin-top:70px; margin-bottom:70px;">
 <h1 style="text-align:center;margin-bottom:5px;">Contact Us</h1>
  <p style="text-align: center;	font-family: 'Ideal Sans SSm A';margin-bottom:30px;">Great support is a click or call away</p>

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
  		<a href="#submit" id="submit_contactform" class="btn" style="width:233px;padding:15px;inline-block;">Send Request</a>
  		<div class="tick"><img src="img/forms/chk-dark-green.png"></div>
  		<div class="progress-bar"></div>
  	</form>
	<div id="contacttext">
	  	<h5>Need help?</h5>
	  	<p>Fill out the form to the left or <a href="mailto:support@rejoiner.com?subject=Contact Rejoiner">email us directly.</a></p>
  	
	  	<h5>Have a question?</h5>
	  	<p>Our <a href="docs/faq">FAQs</a> cover most common questions.</p>

	    <h5>Prefer to talk with a person?</h5>
	    <p>Call us at (800) 284-4603 from 8-6 EST.</p>
	</div>

  </section>
</section>

			
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