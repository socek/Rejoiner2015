//* On Page Scroll and AFTER passing the page's .banner
//* Let the Chapters Header become sticky
$(window).scroll(function() {
    // store header height in a variable
    var headerHeight = $("#special-page-section .banner").outerHeight();
    // get scroll bar position
    var windowOffset = $(window).scrollTop();

    //if scroll bar position matches header height
    if (windowOffset >= headerHeight) {
        //add "sticked" class
        $(".dg-header").addClass('sticked');
    } else {
        $(".dg-header").removeClass('sticked');
    }
});
// * Open/Close Primary Navigation
var nav_function = function(){
    $('.dg-menu-icon').toggleClass('is-clicked');
    $('.dg-header').toggleClass('menu-is-open').toggleClass('header-top');

    //in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
    if( $('.dg-primary-nav').hasClass('is-visible') ) {
        $('.dg-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
            $('.dg-primary-nav').removeClass('lower-index');
        });
    } else {
        $('.dg-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
            $('.dg-primary-nav').addClass('lower-index');
        });
    }
};
$('.dg-primary-nav-trigger').on('click', nav_function);
$('.data-guide-nav a').on('click', nav_function);
//* Hide - Show Chapter Titles as you go
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
$( document ).ready(function(){
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    $.ajax({
        url: 'http://app.rejoiner.com/statistics/abandoned',
        dataType: "json"
    }).done(function(data) {
        $('#desktop_graph').sparkline(
            data['desktop']['data'],
            {
                chartRangeMaxY: 100,
                height: 64,
                width: 300
            }
        );
        $('#phone_graph').sparkline(
            data['phone']['data'],
            {
                chartRangeMaxY: 100,
                height: 64,
                width: 300
            }
        );
        $('#tablet_graph').sparkline(
            data['tablet']['data'],
            {
                chartRangeMaxY: 100,
                height: 64,
                width: 300
            }
        );
        var all_last_month = data['desktop']['last_month']['all'];
        all_last_month += data['phone']['last_month']['all'];
        all_last_month += data['tablet']['last_month']['all'];
        $('#last_month_data').text(numberWithCommas(all_last_month));

        $('#phone_all').text(data['phone']['meta']['abandoned_rate'] + '%');
        $('#phone_change').text(data['phone']['last_month']['change'] + '%')

        $('#tablet_all').text(data['tablet']['meta']['abandoned_rate'] + '%');
        $('#tablet_change').text(data['tablet']['last_month']['change'] + '%')

        $('#desktop_all').text(data['desktop']['meta']['abandoned_rate'] + '%');
        $('#desktop_change').text(data['desktop']['last_month']['change'] + '%')

    });
});
