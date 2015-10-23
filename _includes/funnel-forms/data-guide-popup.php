<meta name="robots" content="noindex">

<div id="data-abandonment-guide" class="cd-popup guide-abandon-pop" role="alert">
	<div class="cd-popup-container data-guide-container">
		<div class="ebook_form">
		<h1>Download the Guide</h1>
		<p class="guide-small-talk">Get the PDF version of this guide and save it for later, or share it with your friends at the office.</p>
		<p style="margin-top:-10px; font-size:16px;padding-bottom: 0px;"><strong>Simply enter your email and we'll send it over.</strong></p>

		<!-- form starts -->
		<form action='<?php echo $appUrl; ?>/marketingsite/forms/data_guide_popup/' method='post' id='_form_1343' class="ac-form" accept-charset='utf-8' enctype='multipart/form-data'>

          <input type='hidden' name='f' value='1343'>
		  <input type='hidden' name='s' value=''>
		  <input type='hidden' name='c' value='0'>
		  <input type='hidden' name='m' value='0'>
		  <input type='hidden' name='act' value='sub'>
		  <input type='hidden' name='nlbox[]' value='7'>
		  <div class='_form'>
		    <div class='formwrapper'>
		      <div id='_field987'>
		        <div id='compile987' class='_field _type_input'>
		          <div class='_option'>
		            <input type='email' name='email' placeholder="email@me.com">
		          </div>
		        </div>
		      </div>
		      <div id='_field988'>
		        <div id='compile988' class='_field _type_input'>
		          <div class='_option'>
		            <input class="data-guide-btn" onClick="ga('send', 'event', { eventCategory: 'marketing', eventAction: 'download', eventLabel: 'dataGuide'});" type='submit' value="Download PDF">
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="preview_part">
		      <div id="notice">
		      </div>
		    </div>
		  </div>
		</form>

		<!-- form ends -->

			<ul class="cd-buttons">
				<!--<li><a href="#0">email me my ebook</a></li>
				<li><a href="#0">No</a></li>-->
			</ul>
			<a href="#0" class="cd-popup-close img-replace">&nbsp;</a>
		</div><!-- end ebook-form -->

		<div class="ebook_confirmation">
			<h1 class="data-guide">May the Force be with you</h1>
			<div class="envelope">
				<img src="img/forms/yoda-success.jpg" draggable="false">
			</div>
			<p style="margin-top:35px;" class="guide-small-talk green-line">Delivered to your inbox the PDF Guide is!</p>
			<br/>
			<div>
				<a href="#0" class="btn back-to">Back to the Guide</a>
			</div>
		</div>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->



<script type="text/javascript">
jQuery(document).ready(function($){
	//open popup
	$('.data-guide-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
		$('body').addClass('stop-scrolling');
	});
	//close popup
	$('.cd-popup').on('click', function(event){
		if($(event.target).is('.back-to') || $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
			// DISABLE BODY FROM SCROLLING
			$('body').removeClass('stop-scrolling');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
			// RE-ENABLE BODY FROM SCROLLING
			$('body').removeClass('stop-scrolling');
	    }
    });
    //hiding 'download pdf case study' button
    $("#_form_1343").submit(function(event) {
    	if ( $( "#_field988 input" ).val() !== "" ) {
	    	$('.download-guide-cta.data-guide-trigger').css( "display", "none" );
	    }
    });
});
</script>
