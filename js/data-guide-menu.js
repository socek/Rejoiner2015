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
