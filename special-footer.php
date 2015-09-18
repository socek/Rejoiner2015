
	<section class="special-footer-links">
		<div>
			<span>LEARN MORE:</span>
			<a href="/request-a-demo"><strong>Request a Demo</strong></a>
			<a href="/#product">Product</a>
			<a href="/pricing">Pricing</a>
			<a href="/resources">Resources</a>
			<a href="/about">About Us</a>
		</div>
	</section>

	<section id="minimal-footer">
		<div class="minimal-container-footer">
			<div class="top-row-mfooter">
				<div class="mfooter-left">
					<h3>Get started today</h3>
					<a href="tel:+18002844603">Call Us</a> or <a href="mailto:support@rejoiner.com">Email Us</a>
					<a style="float:right;" href="https://twitter.com/rejoinerapp" target="_blank">@rejoinerapp</a>
				</div>
			</div>
			<div class="bottom-row-mfooter">
				<div class="mfooter-links">
					<a href="#" class="rj-mark">&copy;</a> <?php echo date("Y") ?> Rejoiner, Inc. All Rights Reserved&nbsp;&nbsp;<span style="color:#cdcdcd">|</span>&nbsp;<a href="/terms">Terms</a>&nbsp;<span style="color:#cdcdcd">|</span>&nbsp;<a href="/security">Security</a>
				</div>
			</div>
		</div>
	</section>

	<footer id="graybar">
		<section class="clearfix">
			<div>
				<a href="https://twitter.com/rejoinerapp" target="_blank"><img src="/img/footer/tweet.png" draggable="false"></a><a href="https://twitter.com/rejoinerapp" target="_blank">@rejoinerapp</a>
			</div>
			<div>
				<a href="tel:+18002844603">(800) 284-4603</a>&nbsp;&nbsp;<a href="#" style="color:#cccccc;font-weight:300;margin-left:1%;">|</a>&nbsp;&nbsp;<a href="#intercom" onclick="Intercom('showNewMessage')">support@rejoiner.com</a>
			</div>
			<div>
				&copy; <?php echo date("Y") ?> Rejoiner, Inc. All Rights Reserved&nbsp;&nbsp;<span style="color:#cdcdcd">|</span>&nbsp;<a href="/terms">Terms</a>&nbsp;<span style="color:#cdcdcd">|</span>&nbsp;<a href="/privacy">Privacy</a>&nbsp;<span style="color:#cdcdcd">|</span>&nbsp;<a href="/security">Security</a>
			</div>
		</section>
	</footer>

</section> <!-- end SITE CONTAINER -->

<script src="/js/plugins.js"></script>
<script src="/js/tipsy.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/forms.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>


<script>
(function(){

  var shareButtons = document.querySelectorAll(".share-btn");

  if (shareButtons) {
      [].forEach.call(shareButtons, function(button) {
      button.addEventListener("click", function(event) {
 				var width = 650,
            height = 450;

        event.preventDefault();

        window.open(this.href, 'Share Dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width='+width+',height='+height+',top='+(screen.height/2-height/2)+',left='+(screen.width/2-width/2));
      });
    });
  }

})();
</script>


		<script type="text/javascript">
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top - 5
		        }, 900);
		        return false;
		      }
		    }
		  });
		});
		</script>

		</script>

        <script>
        window.intercomSettings = {
            app_id: "5qjle8l9",
            anonymous: true,
        }
        if (top.location.pathname == "/pricing") {
            window.intercomSettings.widget = {
                activator: "#IntercomDefaultWidget"
            };
        }
        </script>
        <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/5qjle8l9';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>


    </body>
</html>
