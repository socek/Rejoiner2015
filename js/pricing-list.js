$(function(){function o(){wintop=$(window).scrollTop(),n.each(function(){return $elm=$(this),$elm.hasClass("animated")?!0:(topcoords=$elm.offset().top,void(wintop>topcoords-.75*t&&$elm.addClass("animated").css("background-size","100%")))})}{var n=$(".animateblock"),t=$(window).height();$(document).height()}$(window).scroll(function(){o()})});