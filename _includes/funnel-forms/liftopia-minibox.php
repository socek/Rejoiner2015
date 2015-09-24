<div id="dialogue" class="mini-box liftopia">

    <div class="main-bar">
        <p class="headline">TICKETING CASE STUDY</p>
        <div id="x-button" class="x-button">X</div>
    </div>

    <div class="mini-content">

    <!-- Name/title -->
    <div class="title" href="/liftopia-case-study">
    <p class="header">How Liftopia Recovered $714,000 and Reduced Their Cart Abandonment Rate 15% During Their Winter Season.</p>
    <p class="support-text">This ungated case study reveals the strategies and email creative Liftopia used to achieve these results.</p>
    </div>

    <!-- Follow button -->
    <a id="btn-go" class="btn-go orange" href="/liftopia-case-study">Read Case Study</a>
    </div><!-- end content -->

</div>

<script type="text/javascript">
// * https://github.com/shorttompkins/scrollToggle/blob/master/README.md
var ScrollToggle = function (top, callbackShow, callbackHide) {
    this.ontop = 0;
    this.hontop = 0;
    this.top = top + 20;
    this.show = callbackShow;
    this.hide = callbackHide;
    var self = this;
    (function () {
        $(window).scroll(function (event) {
            var y = $(window).scrollTop();
            if (y >= self.top)
                self.ontop = 1;
            else
                self.ontop = 0;
            if (self.ontop !== self.hontop) {
                if (self.ontop) {
                    self.show();
                }
                else {
                    self.hide();
                }
            }
            self.hontop = (self.ontop * 1);
        });
    })();
};
//ScrollToggle(verticalScrollTriggerPosition, callbackScrolledTO, callbackScrolledAWAY)
//verticalScrollTriggerPosition can be a number, property, or computed. It is the vertical Y coord of the scrollbar destination.

var getCookie = function(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
};
var myScroller = new ScrollToggle($('#miniboxtrigger').position().top, function () {
	if(getCookie('popupLiftopiaCaseSeen') !== 'true') {
	    console.log("Element has been reached - Show modal.");
		event.preventDefault();
		$('.mini-box').addClass('activate animated fadeIn');
		$('#x-button').click(function(){
        $('.mini-box').animate(500,function(){
            $('.mini-box').fadeOut('fast');
        });
    });
	}
}, function () {
	if(getCookie('popupCaseSeen') !== 'true') {
	    console.log("Element is gone - Hide Modal");
	    //set cookie
	    var d = new Date();
	    d.setTime(d.getTime() + (24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = "popupLiftopiaCaseSeen=true" + "; " + expires;
	}
});
</script>