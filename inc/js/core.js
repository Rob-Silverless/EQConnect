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
        fixedElements: '#nav, .footer',
		verticalCentered: true,
    	anchors:['top', 'awareness', 'challengeOne', 'challengeTwo', 'challengeThree', 'core', 'newsInfo', 'partners', 'testimony', 'whoWe', 'contactUs'],
    	afterLoad: function (origin, anchorLink, index){
    		var currentId = $(anchorLink.item).attr('id');
    		var currentItem = $('#' + currentId + ' .slide-up, #' + currentId + ' .slide-down, #' + currentId + ' .slide-right, #' + currentId + ' .slow-fade')
    		$(currentItem).each(function(e, i) {
    			var delay = $(this).attr('data-delay');
    			if($(this).hasClass('heading__animate')){
    				var animationDelay = delay/1000
    				$(this).find('text').css('animation', 'draw 5s ' + animationDelay + 's 1 forwards ease-in-out');
    			} else {
    				delay
    			}
				setTimeout(function(){
					$(i).addClass('active');
				}, delay)
			});
    	},
    	afterResize: function(width, height){
			var threePointsTop = $("#challenge1").offset().top;
			$("#challenge2, #challenge3").css('top', threePointsTop);
		}
    });

    $('#mouse-scroll-anchor').on('click', function(){
      fullpage_api.moveSectionDown();
    });

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

//Three Points Sections
var threePointsTop = $("#challenge1").offset().top;
$("#challenge2, #challenge3").css('top', threePointsTop);


$('.legalInfo').hide();
// Legal Information
$('.mandatory a').on('click', function(e){
	e.preventDefault();
	var modalId = $(this).attr('data-modal');
	$('#' + modalId).fadeIn();
	$('body').addClass('no-scroll');
	fullpage_api.setAllowScrolling(false);
})

$('.legalOverlay, .legalInfo .close').on('click', function(e){
	e.preventDefault();
	$('.legalInfo').fadeOut();
	$('body').removeClass('no-scroll');
	fullpage_api.setAllowScrolling(true);
});

});//Don't remove ---- end of jQuery wrapper
