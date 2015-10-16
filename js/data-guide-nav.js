jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MQL = 900;
	//open/close primary navigation
	$('.dg-primary-nav-trigger').on('click', function(){
		$('.dg-menu-icon').toggleClass('is-clicked');
		$('.dg-header').toggleClass('menu-is-open');

		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('.dg-primary-nav').hasClass('is-visible') ) {
			$('.dg-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('.dg-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
			});
		}
	});
});

var mq = window.matchMedia('all and (max-width: 850px)');
// Create a clone of the menu, right next to original.
$('.dg-header').addClass('original').clone().insertAfter('.dg-header').addClass('cloned fixed').removeClass('original').hide();
scrollIntervalID = setInterval(stickIt, 10);

function stickIt() {
  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;

  if ($(window).scrollTop() >= (orgElementTop) && mq.matches) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('top',0).css('width',widthOrgElement).show();
    $('.original').css('visibility','hidden');
  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').hide();
    $('.original').css('visibility','visible');
  }
};

//* DG-HEADER NAVIGATION Gets Activated
//* Through stickyNavbar Plugin

$(function () {
 $('.dg-header').stickyNavbar();
});

var mq = window.matchMedia('all and (max-width: 950px)');

//* Hide - Show Chpater Titles as you go

$(window).scroll(function() {
    $('.ch-title').each( function(i){
        var top_of_object = $(this).position().top;
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var top_of_window = $(window).scrollTop();
        var id = $(this).attr('id');

        if (top_of_window >= top_of_object && top_of_window <= bottom_of_object) {
            $('#menu-'+id).css({'display':'block'}).fadeIn( "slow" );
        } else {
            $('#menu-'+id).css({'display':'none'});
        }
    });
});
