<meta name="robots" content="noindex">

		<div id="cart-lookbook" class="cd-popup" role="alert">
		<div class="cd-popup-container">
		<div class="ebook_form">
		<h1>GET YOUR FREE EBOOK</h1>
		<p>2013 Cart Abandonment Email Lookbook</p>

		<form style="margin-bottom:50px;" action='//app.rejoiner.com/marketingsite/forms/cartlookbook/' method='post' id='_form_1197' accept-charset='utf-8' enctype='multipart/form-data'>
		  <input type='hidden' name='f' value='1197'>
		  <input type='hidden' name='s' value=''>
		  <input type='hidden' name='c' value='0'>
		  <input type='hidden' name='m' value='0'>
		  <input type='hidden' name='act' value='sub'>
		  <input type='hidden' name='nlbox[]' value='5'>
		  <div class='_form'>
		    <div class='formwrapper'>
		      <div id='_field601'>
		        <div id='compile601' class='_field _type_input'>
		          <div class='_option'>
		          <input type='text' name='fullname' placeholder='Your Name' >
		          </div>
		        </div>
		      </div>
		      <div id='_field581'>
		        <div id='compile581' class='_field _type_input'>
		          <div class='_option'>
		             <input type='email' name='email' placeholder='Your Email Address'>
		          </div>
		        </div>
		      </div>
		      <div id='_field582'>
		        <div id='compile582' class='_field _type_input'>
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
		</div>
	<div class="ebook_confirmation">
		<h1>success!</h1>
		<p>Check your inbox momentarily and enjoy!</p>
		<div class="envelope">
			<img src="/Users/marcinspek/Inne/Rejoiner2015/img/forms/envelope-illust.png">
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
	$('.cart-lookbook-trigger').on('click', function(event){
		event.preventDefault();
		$('#cart-lookbook').addClass('is-visible');
	});
	
	//close popup
	$('#cart-lookbook').on('click', function(event){
		if($(event.target).is('.back-to') || $(event.target).is('.cd-popup-close') || $(event.target).is('#cart-lookbook') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('#cart-lookbook').removeClass('is-visible');
	    }
    });
});
</script>