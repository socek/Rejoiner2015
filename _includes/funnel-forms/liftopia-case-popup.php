<meta name="robots" content="noindex">

		<div id="peakdesign-book" class="cd-popup lift-pop" role="alert">
		<div class="cd-popup-container">
		<div class="ebook_form">
		<h1>Download the Case Study</h1>
		<p>How Liftopia Recovered $714,00 and Reduced Their Cart Abandonment Rate 15% During Their Winter Season</p>

		<form style="margin-bottom:50px;" action='<?php echo $appUrl; ?>/marketingsite/forms/peakdesign/' method='post' id='_form_1200' accept-charset='utf-8' enctype='multipart/form-data'>
		  <input type='hidden' name='f' value='1200'>
		  <input type='hidden' name='s' value=''>
		  <input type='hidden' name='c' value='0'>
		  <input type='hidden' name='m' value='0'>
		  <input type='hidden' name='act' value='sub'>
		  <input type='hidden' name='nlbox[]' value='14'>
		  <div class='_form'>
		    <div class='formwrapper'>
		      <div id='_field602'>
		        <div id='compile602' class='_field _type_input'>
		          <div class='_option'>
		             <input type='text' name='fullname' placeholder='Your Name' >
		          </div>
		        </div>
		      </div>
		      <div id='_field590'>
		        <div id='compile590' class='_field _type_input'>
		          <div class='_option'>
		          <input type='email' name='email' placeholder='Your Email Address'>
		          </div>
		        </div>
		      </div>
		      <div id='_field591'>
		        <div id='compile591' class='_field _type_input'>
		          <div class='_option'>
		           <input style="width:300px;" class="btn" type='submit' value="download case study">
		                <br />
		                <span>&nbsp;</span>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="preview_part">
		    </div>
		  </div>
		</form>
		<ul class="cd-buttons">
			<!--<li><a href="#0">email me my ebook</a></li>
			<li><a href="#0">No</a></li>-->
		</ul>
		<a href="#0" class="cd-popup-close img-replace">&nbsp;</a>
	</div>
	<div class="ebook_confirmation">
		<h1>success!</h1>
		<p>Check your inbox momentarily and enjoy!</p>
		<div class="envelope">
			<img src="img/forms/envelope-illust.png">
		</div>
		<div>
			<a href="#0" class="btn back-to" style="width:250px;padding:15px;">back to rejoiner</a>
		</div>
	</div>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->



<script type="text/javascript">
jQuery(document).ready(function($){
	//open popup
	$('.liftopiaCS-trigger').on('click', function(event){
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
});
</script>
