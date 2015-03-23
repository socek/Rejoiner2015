$(function(){

    // resources - dynamic content
    $('a[href^="#op_"]').click(function(e) {
        e.preventDefault();
        var $target = $($(this).attr('href'));
        if($target.length){
            $($target).show().siblings().hide();
            return false;
        }
    });

    // quote scroller on hp
    $("section.press-hp ul li:first").addClass("visible");
    setInterval(function(){
        var nextLi = $("section ul li.visible").next().length;
        if(nextLi == 1){
            $("section.press-hp ul li.visible").fadeOut(function(){
                $(this).removeClass("visible");
                $(this).next("li").fadeIn().addClass("visible");
            });
        }
        else{
            $("section.press-hp ul li.visible").fadeOut(function(){
                $(this).removeClass("visible");
                $("section.press-hp ul li:first").fadeIn().addClass("visible");
            });
        }
    }, 6000);

    //scroll to anchor
    $("a.scroll").click(function(e){
        // e.preventDefault();
        var thisA = $(this).attr("href");
        if(thisA == "#top"){
            $('html,body').animate({scrollTop: 0}, "fast");
        }
        else{
            $('html,body').animate({scrollTop: ($(thisA).offset().top)-20}, "fast");
        }
    });

    //opt out form submit
    $("#optoutform a").on("click", function(e){
        e.preventDefault();
        var frm = $("#optoutform");
        var url = $(frm).attr("action");
        var myval = $("#email-opt-out").val();
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(re.test(myval)){
            $.post(url, $(frm).serialize(), function(data){
                if(data)
                    {
                        $("section.opt-out-form").html("<h1>Opt Out</h1><p>Thank you. Your email address has been added to our \"Do not contact\" list.</p>");
                    }
            });
        }
    });

    //contact form submit
    $("article.contact #contactform a").on("click", function(e){
        e.preventDefault();
        var frm = $("#contactform");
        var url = $(frm).attr("action");
        var email = $("#email").val();
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(re.test(email)){
            $.post(url, $(frm).serialize(), function(data){
                if(data){
                    $("#contactform").append("<p>Thanks! We'll be in touch shortly.</p>");
                    $("#contactform a.btn, #contactform a.cancel").hide();
                    $(".pricing #contactform").html("<p>Thanks! We'll be in touch shortly.</p><p>Feel free to call us toll free as well: <br />855-473-5646</p>");
                    _gaq.push(['_trackEvent', 'contactform', 'submitted'])
                }
            });
        }
        else{
            $("#email").addClass("error").prev("label").addClass("error");
        }

    });

    //contact form submit
    $("article.pricing #contactform a.btn").on("click", function(e){
        e.preventDefault();
        var frm = $("#contactformfrm");
        var url = $(frm).attr("action");
        var email = $("#email").val();
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(re.test(email)){
            $.post(url, $(frm).serialize(), function(data){
                if(data){
                    $(".pricing #contactform").html("<p>Thanks! We'll be in touch shortly.</p><p>Feel free to call us toll free as well: <br />855-473-5646</p>");
                    _gaq.push(['_trackEvent', 'quoteRequest', 'submitted'])
                }
            });
        }
        else{
            $("#email").addClass("error").prev("label").addClass("error");
        }

    });

    $("a.requestpricing").on("click", function(e){
        e.preventDefault();
        $("section.contactus").hide();
        $("#contactform").show();
    });

    $("#contactform a.cancel").on("click", function(e){
        e.preventDefault();
        $("section.contactus").show();
        $("#contactform").hide();
    });

    //add tails to quote bubbles on happy customers page
    $(".happycustomers q").append('<div class="tailtop"></div><div class="tailbottom"></div>');

    //add targets to happy customers cite urls
    $(".happycustomers cite a").attr("target", "_blank");

    function formatCurrency(number) {
        var number = Math.round(number).toString(),
        dollars = number.split('.')[0];
        dollars = dollars.split('').reverse().join('')
            .replace(/(\d{3}(?!$))/g, '$1,')
            .split('').reverse().join('');
        return '$' + dollars ;
    }

    //numbers only in the calculator
    $(".calculator input").keypress(function(evt){
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
         }
         return true;
    });

    //ROI calc
    $(".calculator input").keyup(function(){
        var checkoutVisits = parseInt($("#checkoutVisits").val());
        var aov = parseInt($("#aov").val());
        var abandonrate = $("#abandonrate").val() / 100;
        var pctArray = [5,10,20,30]; //recovery rate percent
        var pct, recovered, anualrecovered;

        //recovery equation
        $.each(pctArray, function(i){
            pct = pctArray[i]/100;
            recovered = (((checkoutVisits*0.2)*abandonrate)*pct)*aov;
            anualrecovered = recovered * 12
            $("#roitable ul:eq("+(i+1)+")").html("<li>"+pctArray[i]+"%</li><li>"+formatCurrency(recovered)+"</li><li>"+formatCurrency(anualrecovered)+"</li>");
        });

        
    });

    //select all copy in box on focus
    $(".calculator input").click(function(){
        var fld = $(this).prop("id");
        document.getElementById(fld).focus();
        document.getElementById(fld).select();
    });

    $(".pricing .features ul li a").tipsy({gravity: 'w'});
    $(".pricing .features ul li a").on("click", function(e){
        e.preventDefault();
    });

    $("a.getquote").on("click", function(e){
        e.preventDefault();
        $("#blackout").show();
        $("#freetrialform").animate({
            top: "20px"
        });
    });

    $("a.closeform, #blackout").on("click", function(e){
        e.preventDefault();
        $("#freetrialform").animate({
            top: "-650px"
        }, function(){
            $("#blackout").hide();
        });
    });

    var resetAboutNav = function(){

        var ulHeight = $(".whatwebelieve").outerHeight();
        console.log(ulHeight);
        var top = (ulHeight/2)+40;
        $(".whatwebelieve nav").css({
            top: top
        });

    }

    $(".about .whatwebelieve nav a.next").on("click", function(e){

        e.preventDefault();

        var nextLi = $(".whatwebelieve ul li:visible").next();

        $(".whatwebelieve ul li").hide();

        if(nextLi.length > 0){
            $(nextLi).fadeIn();
        }
        else{
            $(".whatwebelieve ul li").first().fadeIn();
        }

        resetAboutNav();

    });

    $(".about .whatwebelieve nav a.prev").on("click", function(e){

        e.preventDefault();

        var prevLi = $(".whatwebelieve ul li:visible").prev();

        $(".whatwebelieve ul li").hide();

        if(prevLi.length > 0){
            $(prevLi).fadeIn();
        }
        else{
            $(".whatwebelieve ul li").last().fadeIn();
        }

        resetAboutNav();

    });



    $(".ourteam ul.people li").on("click", function(e){

        e.preventDefault();

        var cpos = $(this).index();
        var vis = $(".ourteam ul.person > li:visible").index();

        if(cpos !== vis){

            $(".ourteam ul.person > li").hide();
            $(".ourteam ul.person > li:eq("+cpos+")").show();

        }

    });
	
	$('#slider').noUiSlider({
		start: [ 0 ],
		range: {
			'min': [ 0, 10 ],
			'50%': [ 980, 20 ],
			'75%': [ 1800, 100 ],
			'90%': [ 5000, 100 ],
			'max': [ 6000 ]
		},
		format: wNumb({
			decimals: 0
		}),
		
	});
	$("#slider").Link('lower').to('-inline-<div id="tooltip"></div>');
	$('#tooltip').append('<img style="position:absolute;top:0;left:0;z-index:999;" id="tooltipGrn" src="/img/tooltipGrn.png">');
	$("#slider").on({
		change: function(){
			var size = $("#slider").val(),
				planCurrent = '#'+$('.plan:visible').attr('id'),
				planNew = "",
				$permonth = $('#permonth'),
				$permonthVal = $('#permonth span');
			
			if (size == "0") {
				$('#tooltip').append('<img style="position:absolute;top:0;left:0;z-index:999; display: none;" id="tooltipGrn" src="/img/tooltipGrn.png">').find('img').fadeIn('fast');
			}
			switch (true){
				case size <= 100:
					planNew = "#startup";
					break;
				case size <= 400 && size > 100:
					planNew = "#small";
					break;
				case size <= 1000 && size > 400:
					planNew = "#medium";
					break;
				case size <= 2000 && size > 1000:
					planNew = "#established";
					break;
				case size > 2000:
					planNew = "#enterprise";
					break;
			}

			$permonthVal.animate({'opacity':0},function(){
				if ($permonth.css('opacity') < .99){
					$permonth.animate({'opacity':1});
				}
				$permonthVal.html(size).animate({'opacity':1});
			});
						
			if (planNew != planCurrent) {


				
				$(planCurrent).fadeOut(function(){
					$(planNew).fadeIn();
				})
			}
		}
	});

});