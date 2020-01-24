//@prepros-prepend fullpage.min.js
//@prepros-prepend fullpage.fadingEffect.min.js
//@prepros-prepend scrolloverflow.min.js

jQuery(document).ready(function( $ ) {

    new fullpage('#fullpage', {
    	licenseKey: '16F37769-414746C6-910FC81C-EA289CE3',
    	//fadingEffectKey: '33F499EA-4AAC4488-AA15BEAD-F13978F8',
    	//fadingEffect: 'section',
    	responsiveWidth: 1200,
        scrollOverflow: true,
        verticalCentered:true,
    	anchors:['top', 'awareness', 'challengeOne', 'challengeTwo', 'challengeThree', 'core', 'newsInfo', 'partners', 'testimony', 'whoWe', 'contactUs'],
    	afterLoad: function (origin, anchorLink, index){
    		var currentId = $(anchorLink.item).attr('id');
    		var currentItem = $('#' + currentId + ' .slide-up, #' + currentId + ' .slide-down, #' + currentId + ' .slide-right, #' + currentId + ' .slow-fade')
    		var time = 500
    		$(currentItem).each(function(e, i) {
    			var delay = $(this).attr('data-delay');
    			console.log(delay);
				setTimeout(function(){
					$(i).addClass('active');
				}, time*e)
			});
			var navHeight = $("nav").height();
			var footerHeight = $("footer").height();
			console.log(navHeight);
			  $(".section > div").css({
			    "padding-top": navHeight + "px",
			    "padding-bottom": footerHeight + "px"
			  });
    	},
    });

    $('#mouse-scroll-anchor').on('click', function(){
      fullpage_api.moveSectionDown();
    });

    //var position = $(window).scrollTop(); 

	// should start at 0

	/*$(window).scroll(function() {
	    var scroll = $(window).scrollTop();
	    if(scroll > position) {
	        console.log('scrollDown');
	    } else {
	         console.log('scrollUp');
	    }
	    position = scroll;
	});*/


/* ADD CLASS ON LOAD*/

    /*$("html").delay(1500).queue(function(next) {
        $(this).addClass("loaded");

        next();
    });*/

//Smooth Scroll

    /*$('nav a, a.button, a.next-section').click(function(){
	    if($(this).attr('href') != "#") {
	        $('html, body').animate({
	            scrollTop: $( $(this).attr('href') ).offset().top -100
	        }, 500);
	        return false;
	    }
    });*/

/* LOAD MAP */

/* CLASS AND FOCUS ON CLICK */

    $(".menu-trigger").click(function(e) {
    	e.preventDefault();
	    $(this).toggleClass("clicked");
	    $(".offscreen-nav").toggleClass("show");
    });
    $(".offscreen-nav a").click(function() {
    	setTimeout(function() {
		    $(".offscreen-nav").removeClass("show");
		}, 100);
    });

    $(".read-more").click(function() {
	    $(this).prev().slideToggle();
	    $(this).text($(this).text() == "Read more" ? "Read less" : "Read more");
    });

// ========== Add class if in viewport on page load

	$.fn.isOnScreen = function(){

	    var win = $(window);

	    var viewport = {
	        top : win.scrollTop(),
	        left : win.scrollLeft()
	    };
	    viewport.right = viewport.left + win.width();
	    viewport.bottom = viewport.top + win.height();

	    var bounds = this.offset();
	    bounds.right = bounds.left + this.outerWidth();
	    bounds.bottom = bounds.top + this.outerHeight();

	    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

	};

	/*$('.slide-up, .slide-down, .slide-right, .slow-fade').each(function() {
		if ($(this).isOnScreen()) {
			$(this).addClass('active');
		}
	});*/

// ========== Add class on entering viewport

	$.fn.isInViewport = function() {
	var elementTop = $(this).offset().top;
	var elementBottom = elementTop + $(this).outerHeight();
	var viewportTop = $(window).scrollTop();
	var viewportBottom = viewportTop + $(window).height();
	return elementBottom > viewportTop && elementTop < viewportBottom;
	};

	$(window).on('resize scroll', function() {
		
		/*$('.slide-up, .slide-down, .slide-right, .slow-fade').each(function() {
			if ($(this).isInViewport()) {
				$(this).addClass('active');
			}
		});*/

	});


// CAROUSELS

$("#news-carousel").owlCarousel({
    margin:20,
    nav:true,
    slideBy: 4,
    responsive:{
    	0:{
            items:1
        },
        767:{
            items:2
        },
        1023:{
            items:3
        },
        1200:{
            items:4
        }
    }
})

$("#dataCarousel").owlCarousel({
	items: 1,
    nav:false,
    loop:true,
    margin:20,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout:7000,
    autoplaySpeed: 2000,
    dotsEach:true,
})

$("#testimonialCarousel").owlCarousel({
	items: 1,
    nav:true,
    loop:true,
    autoplay: false,
    autoHeight: true,
})

$('#dataCarousel .owl-dot').each(function(){
$(this).children('span').text($(this).index()+1);
});

// Who we are section

$('.person').on('click', function(){
	elementOffset = $(this).offset().top;
	var personId = $(this).attr('data-individual');
	$('#' + personId).css('top', elementOffset).fadeIn();
});
$('.individual .close').on('click', function(e){
	e.preventDefault();
	$('.individual').fadeOut();
});

// Text Animation

$('.animText').each(function(){
	var animText = $(this);
	//var spanInserted = $(animText).html().split(" ").join(" </span><span class='line'>");
	var spanInserted = $(animText).text().split(" ");
	//var wrapped = ("<span class='line'>").concat(spanInserted, "</span>");
	/*var wrapped = $.each(spanInserted, function(i, v) {
	    $(animText).append($("<span>").text(v));
		console.log(refPos);
	});*/
	/*$(animText).html(wrapped);

	var refPos = $('.animText span.line:first-child').position().top;
	var newPos;
	$(animText).find('span.line').each(function(index) {
	    newPos = $(this).position().top   
	    if (index == 0){
	       return;
	    }
	    if (newPos == refPos){
	        $(this).prepend($(this).prev().text() + " ");
	        $(this).prev().remove();
	    } 
	    refPos = newPos;
	});*/
});



$('.legalInfo').hide();
// Legal Information
$('#privacy').on('click', function(e){
	e.preventDefault();
	$('.legalInfo').fadeIn();
})

$('.legalOverlay, .legalInfo .close').on('click', function(e){
	e.preventDefault();
	$('.legalInfo').fadeOut();
});

});//Don't remove ---- end of jQuery wrapper
