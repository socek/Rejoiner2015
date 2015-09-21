<meta name="robots" content="noindex">

<div id="peakdesign-book" class="cd-popup lift-pop" role="alert">
	<div class="cd-popup-container">
		<div class="ebook_form">
		<h1>Download the Case Study</h1>
		<p>How Liftopia Recovered $714,00 and Reduced Their Cart Abandonment Rate 15% During Their Winter Season</p>

		<!-- form starts -->

		<form action='//rejoiner.activehosted.com/proc.php' method='post' id='_form_1339' class="ac-form"accept-charset='utf-8' enctype='multipart/form-data'>
		  <input type='hidden' name='f' value='1339'>
		  <input type='hidden' name='s' value=''>
		  <input type='hidden' name='c' value='0'>
		  <input type='hidden' name='m' value='0'>
		  <input type='hidden' name='act' value='sub'>
		  <input type='hidden' name='nlbox[]' value='22'>
		  <div class='_form'>
		    <div class='formwrapper'>
		      <div id='_field978'>
		        <div id='compile978' class='_field _type_input'>
		          <div class='_option'>
		            <input type='email' name='email' placeholder="email@me.com">
		          </div>
		        </div>
		      </div>
		      <div id='_field979'>
		        <div id='compile979' class='_field _type_input'>
		          <div class='_option'>
		            <input type='submit' value="Download PDF">
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
			<h1>success!</h1>
			<p>The Case Study is being delivered to your inbox!</p>
			<div class="envelope">
				<img src="img/forms/envelope-illust.png">
			</div>
			<div>
				<a href="#0" class="btn back-to">Back to the Case Study</a>
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
