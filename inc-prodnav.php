<meta name="robots" content="noindex">

<!-- PRODUCT NAV DEMO FORM + JS -->
  <div id="product-nav" class="highlight">
        <div id="logoSlide">
           <div>
              <?php include("img/home/web-logo-rj.svg"); ?>
           </div>
        </div>
        <div id="menuPositions">
           <nav class="prod-holder">
              <ul>
                 <li><a href="#recover" class="small-border"><b>Recover</b></a></li>
                 <li><a href="#retain" class="small-border"><b>Retain</b></a></li>
                 <li><a href="#optimize" class="small-border"><b>Optimize</b></a></li>
                 <li><a href="#automate" class="small-border"><b>Automate</b></a></li>
                 <li><a href="#succeed" class="small-border"><b>Succeed</b></a></li>
              </ul>
           </nav>
        </div>
        <div id="demoSlide">
           <div class="primary-menu">
              <a href="/request-a-demo"><input type="submit" value="Request A Demo"></a>
           </div>
        </div>
    </div> 



<!-- end PRODUCT NAV + JS -->

<!-- ///////////////////////////////////////////////////////////
	CLONE OF PRODUCT NAV
/////////////////////////////////////////////////////////// -->

<script type="text/javascript">
// Create a clone of the menu, right next to original.
$('#product-nav').addClass('original').clone().insertAfter('#product-nav').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','5000').css('height','70px').removeClass('original').hide();
scrollIntervalID = setInterval(stickIt, 10);

function stickIt() {

  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() >= (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.     
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
    $('.original').css('visibility','hidden');
    $('#logoSlide').addClass('animated fadeOut').css('display','visible');
    $('#demoSlide').addClass('animated fadeOut').css('visibility','visible');
  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').hide();
    $('.original').css('visibility','visible');
    $('#logoSlide').css('display','block').css('visibility', 'hidden').addClass('animated fadeOut');
    $('#demoSlide').css('display','block').css('visibility', 'hidden').addClass('animated fadeOut');
  }
};

</script> <!-- end CLONE PRODUCT NAV -->



<!-- highlight links -->

<script type="text/javascript">

    /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and 
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("activated");
            } else {
                $("a[href='" + theID + "']").removeClass("activated");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$("nav li:last-child a").hasClass("activated")) {
                var navActiveCurrent = $(".activated").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("activated");
                $("nav li:last-child a").addClass("activated");
            }
        }
    });

</script>