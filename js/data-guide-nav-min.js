function stickIt(){var i=$(".original").offset();orgElementTop=i.top,$(window).scrollTop()>=orgElementTop&&mq.matches?(orgElement=$(".original"),coordsOrgElement=orgElement.offset(),leftOrgElement=coordsOrgElement.left,widthOrgElement=orgElement.css("width"),$(".cloned").css("top",0).css("width",widthOrgElement).show(),$(".original").css("visibility","hidden")):($(".cloned").hide(),$(".original").css("visibility","visible"))}jQuery(document).ready(function(i){i(".dg-primary-nav-trigger").on("click",function(){i(".dg-menu-icon").toggleClass("is-clicked"),i(".dg-header").toggleClass("menu-is-open"),i(".dg-primary-nav").hasClass("is-visible")?i(".dg-primary-nav").removeClass("is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){i("body").removeClass("overflow-hidden")}):i(".dg-primary-nav").addClass("is-visible").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){i("body").addClass("overflow-hidden")})})});var mq=window.matchMedia("all and (max-width: 850px)");$(".dg-header").addClass("original").clone().insertAfter(".dg-header").addClass("cloned fixed").removeClass("original").hide(),scrollIntervalID=setInterval(stickIt,10),$(function(){$(".dg-header").stickyNavbar()});var mq=window.matchMedia("all and (max-width: 950px)");$(window).scroll(function(){$(".ch-title").each(function(){var i=$(this).position().top,n=$(this).position().top+$(this).outerHeight(),e=$(window).scrollTop(),o=$(this).attr("id");e>=i&&n>=e?$("#menu-"+o).css({display:"block"}).fadeIn("slow"):$("#menu-"+o).css({display:"none"})})});
