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
        url: 'https://staging.rejoiner.com/statistics/abandoned',
        dataType: "json"
    }).done(function(data) {
        var all_last_month = data['desktop']['last_month']['all'];
        all_last_month += data['phone']['last_month']['all'];
        all_last_month += data['tablet']['last_month']['all'];
        $('#last_month_data').text(numberWithCommas(all_last_month));
        var put_meta_data = function(name) {
            var all_id = '#'+ name + '_all';
            var all_value = data[name]['meta']['abandoned_rate'].toFixed(2);
            var change_id = '#'+ name + '_change';
            var change_value = data[name]['last_month']['change'].toFixed(2);
            if(change_value > 0) {
                change_value = '+' + change_value;
                $(change_id).addClass('change_green');
            } else {
                $(change_id).addClass('change_red');
            }

            $(all_id).text(all_value + '%');
            $(change_id).text(change_value + '%');
        };
        var draw_graph = function(name) {
            var graph_id = '#'+ name + '_graph'
            $(graph_id).sparkline(
                Array.from(data[name]['data'], x => x.toFixed(2)),
                {
                    chartRangeMaxY: 100,
                    chartRangeMinY: 0,
                    height: 64,
                    width: 300,
                    fillColor:'#dfdfdf', // kt
                    lineColor: '#c7c6c6', // kt
                    spotRadius: '3', // kt
                    spotColor:'#fa8600', //kt
                    lineWidth: 3, // kt
                    tooltipFormat: '{{y}}% in {{offset:offset}}',
                    tooltipValueLookups: {
                        'offset': months_data
                    },
                }
            );
        }
        draw_graph('phone');
        put_meta_data('phone');

        draw_graph('tablet');
        put_meta_data('tablet');

        draw_graph('desktop');
        put_meta_data('desktop');
    });
    $(document).ready( function() {
        $(".graph_line > div").filter(function() {
            return $(this).text().substr(0,1) == "-";
        }).addClass("number-minus");
    });
});
