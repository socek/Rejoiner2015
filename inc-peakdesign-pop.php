<meta name="robots" content="noindex">

		<div id="peakdesign-book" class="cd-popup" role="alert">
		<div class="cd-popup-container">
		<h1>GET YOUR FREE EBOOK</h1>
		<p>How Peak Design Recovers</p>

		<form style="margin-bottom:50px;" action='//rejoiner.activehosted.com/proc.php' method='post' id='_form_1200' accept-charset='utf-8' enctype='multipart/form-data'>
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
		           <input style="width:300px;" class="btn" type='submit' value="email me my book">
		                <br><br>
		                <span>Absolutely free and your information is safe.</span>
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
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->



<script type="text/javascript">
jQuery(document).ready(function($){
	//open popup
	$('.peakdesign-trigger').on('click', function(event){
		event.preventDefault();
		$('#peakdesign-book').addClass('is-visible');
	});
	
	//close popup
	$('#peakdesign-book').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('#peakdesign-book') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('#peakdesign-book').removeClass('is-visible');
	    }
    });
});
</script>