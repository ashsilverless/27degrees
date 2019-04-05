//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.js
//@prepros-prepend mixitup-pagination.js
//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend owl.carousel.min.js

jQuery(document).ready(function( $ ) {

/* ADD CLASS ON LOAD*/

    $("html").delay(100).queue(function(next) {
        $(this).addClass("loaded");

        next();
    });

    $(document).ready(function( $ ) {
      $( ".toggle" ).first().addClass( "active" );
    });

/* GET HEIGHT OF NAV*/
    
    $(document).ready(function() {
        var element = document.getElementById('nav');
        var navHeight = element.offsetHeight;
        //Use height var to set padding of page content
        $(".content.no-hero").css("padding-top", navHeight);   
    });
    
/* ADD CLASS ON SCROLL*/

	$(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    }); 
 
//Smooth Scroll

    $('nav a, a.button, a.next-section').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 1500, 'easeInOutCirc');
        return false;
    });

/* TRANSITION ON SCROLL HERO */

	$(document).ready(function(){
		
		var tStart = 0,
		    tEnd   = $(window).height(),
		    cStart = 0,
		    cEnd   = 65,
		    cDiff  = cEnd - cStart;
		    
		window.scrollTo(window.scrollX, window.scrollY + 1);
		
	    $(document).scroll(function() {
		    $(".logo-hero").css("transition", "opacity 0.25s ease");
		    
		    // ========= Change background opacity within scroll
		    var scroll = $(window).scrollTop();
	        var percentage = (scroll - tStart) / (tEnd - tStart);
	        var background;
	        
	        percentage = Math.min(1, Math.max(0, percentage));
	        background = Math.round(cStart + cDiff * percentage) / 100;
	        
	        $(".wrapper-hero-home").css('background-color', 'rgba(0, 0, 0, ' + background + ')');
	        
	        // ========= Fix scroll button
	        var heightHero = $(".hero__home__content.description").height();
	        
	        if(scroll < heightHero) {
		        $(".scroll-section").addClass("fixed");
		        $(".scroll-shadow").addClass("fixed");
	        } else {
		        $(".scroll-section").removeClass("fixed");
		        $(".scroll-shadow").removeClass("fixed");
	        }
	        
	        // ========= Change anchor within scroll
	        if(scroll + 100 < heightHero) {
		        $(".scroll-section a").eq(0).removeClass("hidden");
		        $(".scroll-section a").eq(1).addClass("hidden");
	        } else {
		        $(".scroll-section a").eq(0).addClass("hidden");
		        $(".scroll-section a").eq(1).removeClass("hidden");
	        }
	        
	        // ========= Change circle scroll
	        var distance = heightHero - scroll;
	        $(".circle-background").css({
	            transform: "translate(0px, " + (-1) * distance / 20 + "%)"
	        });

	        $(".text-block__accent").css({
	            transform: "translate(0px, " + (1) * distance / 5 + "%)"
	        });
	        
	        // ========= Hide scroll button
	        var opacityScroll = scroll < 150 ? scroll : 150;
	        opacityScroll = 1 - (opacityScroll / 150);
	        
	        $(".scroll-home div").css({
	        	opacity: opacityScroll,
	        	transform: "translate(0px, " + (-1) * scroll / 2 + "%)"
	        });
	        
	        if(opacityScroll == 0) {
		        $(".scroll-home div").hide();
	        } else {
		        $(".scroll-home div").show();
	        }
	         
	    });
	});

/* LOAD GRAPHS */
    
    $(document).ready(function() {
	    
	    $(".month-slider input").trigger("input");
	    
        $(document).scroll(function() {
	        
	        $(".climate-graph").each(function() {
		        var graph = $(this);
		        
		        var objectBot = $(graph).offset().top + $(graph).outerHeight();
				var windowBot = $(window).scrollTop() + $(window).height();
				
				if(windowBot > objectBot){
		            var maxHeight = parseFloat($(graph).find(".y-values").height()) - parseFloat($(graph).find(".y-values div").eq(0).height());
		            var minValue  = parseFloat($(graph).find(".y-values").attr("min-value"));
		            var maxValue  = parseFloat($(graph).find(".y-values").attr("max-value"));
		            
		            $(graph).find(".wrapper-bars").each(function() {
			            var resultLow, resultHigh;
			            var lowTemp  = parseFloat($(this).children().eq(0).attr("data-value"));
			            var highTemp = parseFloat($(this).children().eq(1).attr("data-value"));
			            
			            lowTemp  = lowTemp  > maxValue ? maxValue : lowTemp;
			            lowTemp  = lowTemp  < minValue ? minValue : lowTemp;
			            highTemp = highTemp > maxValue ? maxValue : highTemp;
			            highTemp = highTemp < minValue ? minValue : highTemp;
			            
			            resultLow  = lowTemp  * maxHeight / (maxValue - minValue);
			            resultHigh = highTemp * maxHeight / (maxValue - minValue);
			            
			            $(this).children().eq(0).css("height", (resultLow + "px"));
			            $(this).children().eq(1).css("height", (resultHigh + "px"));
		            });
		        }
		    });

	    });
    });

/* MONTH PICKER */

	$(".month-slider input").on("input", function() {
		var month = $(this).val();
		$(".month-value.low-temp  span").text($(".graph-temp .month-item .first-bar.bar ").eq(month).attr("data-value"));
		$(".month-value.high-temp span").text($(".graph-temp .month-item .second-bar.bar").eq(month).attr("data-value"));
		$(".month-value.avg-rain  span").text($(".graph-rain .month-item .first-bar.bar ").eq(month).attr("data-value"));
		
		$(".ticks span").removeClass("active");
		$(".ticks span").eq(month).addClass("active");
		
		$(".graph-temp .bar").removeClass("current");
		$(".graph-rain .bar").removeClass("current");
		
		$(".graph-temp .wrapper-bars").eq(month).find(".bar").addClass("current");
		$(".graph-rain .wrapper-bars").eq(month).find(".bar").addClass("current");
		
	});
	
	$(".ticks div").on("click", function() {
		var month = parseInt($(this).attr("data-value"));
		$(".month-slider input").val(month);
		$(".month-slider input").trigger("input");
	});

/* LOAD PATH */
    
    $(document).ready(function() {
	    
	    $(".path-wrapper svg path").each(function() {
		    var path   = $(this);
		    var length = path.get(0).getTotalLength();
		    path.css({
			    "stroke-dasharray": length,
				"stroke-dashoffset": length
			});
			path.attr("path-length", length);
	    });
	    
	    $(".path-wrapper svg:first").addClass("first");
	    
	    $(document).scroll(function() {
			$(".path-wrapper svg").each(function() {
				var svgImage   = $(this);
			    var path       = svgImage.find("path");
			    var pathLength = path.attr("path-length");
			    var circle     = svgImage.find("circle#mark");
				var circleAux  = svgImage.find("circle#aux");
			    
			    var windowScroll = $(window).scrollTop() + $(window).height();
			    var imageScroll  = svgImage.offset().top + $(window).height() / 2;
	
				// Path drawing
				var imgScroll = windowScroll - imageScroll; // Total scroll of the div
				var imgHeight = svgImage.height();
				
				var pathDrawing = (imgScroll * pathLength) / imgHeight; // Equivalent path drawing to the scroll
				
				if(svgImage.hasClass("first")) {
					pathDrawing = ((imgScroll - 400) * 2 * pathLength) / imgHeight;
				}
				
				pathDrawing = pathDrawing > pathLength ? pathLength : pathDrawing;
				pathDrawing = pathDrawing < 0 ? 0 : pathDrawing;
				pathDrawing = pathLength - pathDrawing;
				
				path.css("stroke-dashoffset", pathDrawing);
				
				// Circle drawing
				var point = path.get(0).getPointAtLength(pathLength - pathDrawing);
				var intersection = checkIntersection(point, circleAux);
				
				var animationGrow   = svgImage.find("animate#grow");
				var animationReduce = svgImage.find("animate#reduce");
				
				var oldScroll = circle.attr("scroll");
				var newScroll = $(window).scrollTop();
				
				if(intersection && oldScroll) {
					if(newScroll < oldScroll && animationReduce.attr("triggered") == 0) {
						animationReduce.get(0).beginElement();
						animationReduce.attr("triggered", 1);
						animationGrow.attr("triggered", 0);
					} else if(newScroll > oldScroll && animationGrow.attr("triggered") == 0) {
						animationGrow.get(0).beginElement();
						animationGrow.attr("triggered", 1);
						animationReduce.attr("triggered", 0);
					}
				}
				
				if(!intersection) {
					if(point.y < circle.attr("cy")) {
						circle.attr("r", 20);
						animationReduce.attr("triggered", 0);
						animationGrow.attr("triggered", 1);
					} else if(point.y > circle.attr("cy")) {
						circle.attr("r", 0);
						animationReduce.attr("triggered", 1);
						animationGrow.attr("triggered", 0);
					}
				}
				circle.attr("scroll", newScroll);

			});
		});
	});
	
	function checkIntersection(point, circle) {
		var center_x = circle.attr("cx");
		var center_y = circle.attr("cy");
		var radius   = circle.get(0).getBoundingClientRect().width / 2;
		return Math.pow((point.x - center_x), 2) + Math.pow((point.y - center_y), 2) < Math.pow(radius,2);
	}


// ========== Controller for lightbox elements

    $(document).ready(function() {

        $('.lightbox-gallery').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    });
 
// GLOBAL OWL CAROUSEL SETTINGS

    $('.carousel').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:10,
        nav:true,
    	navClass: ['owl-prev', 'owl-next'],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.testimonial-slider').owlCarousel({
        autoplay:true,
        autoplayTimeout:10000,
        loop:true,
        margin:10,
        nav: false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            2000:{
                items:1
            }
        }
    })

/* CLASS AND FOCUS ON CLICK */

    $('.menu-trigger').click(function() {
        $('.hamburger').toggleClass('is-active');
        $(".nav-menu").toggleClass("menu-open");
        $("html").toggleClass("prevent-scroll");
        $(".menu-text").toggleClass("menu-open"); 
        $(".close-text").toggleClass("menu-open");
        
    });

    /*$('.multi-panel__trigger').click(function() {
        $(".multi-panel__trigger.active").removeClass("active");
        $(this).addClass('active');
    });

    $('.menu-item a').click(function() {
        $(".nav-wrapper").removeClass("menu-open");
        $(".nav-wrapper__trigger.is-active").removeClass("is-active");
    });

    $(".openTrigger").click(function(event) {
      $('.content__hidden').addClass("show");
      $(this).addClass("hide");
    });

    $(".closeTrigger").click(function(event) {
      $('.content__hidden').removeClass("show");
      $('.openTrigger').removeClass("hide");
    });

    $(".trigger-copy-expand").click(function(event) {
      $('.collapsed-content').addClass("expand");
      $(this).hide();
       $('.trigger-copy-collapse').show();     
    });

    $(".trigger-copy-collapse").click(function(event) {
        $('.collapsed-content').removeClass("expand");
        $(this).hide();
        $('.trigger-copy-expand').show();     
    });*/


    $(".trigger-expand").click(function(event) {
        $(this).closest('.expanding-copy').addClass("expand");
    });

    $(".trigger-collapse").click(function(event) {
        $(this).closest('.expanding-copy').removeClass("expand");
    });

    $(".toggle").click(function() {   
      	$('.toggle.active').removeClass("active"); 
        $(this).addClass("active");   
    });

    $(".tablink").click(function() {   
      	$('.tablink.active').removeClass("active"); 
        $(this).addClass("active");   
    });

// ========== Filtering controller (mixitup)

if($('#mixitup-camps').length) {

var campsMixer = mixitup('#mixitup-camps', {
    load: {
        filter: 'all'
    },
    selectors: {
        control: '.mixitup-control'
    },
    pagination: {
        limit: 6,
        maintainActivePage: false,
        loop: true,
        hidePageListIfSinglePage: true
    },
    callbacks: {
        onMixEnd: function() {
            jQuery(window).trigger('resize').trigger('scroll');
        }
    }
});
}

if($('#mixitup-camps-villas').length) {

    var campsVillasMixer = mixitup('#mixitup-camps-villas', {
        load: {
            filter: 'all'
        },
        selectors: {
            control: '.mixitup-control'
        },
        pagination: {
            limit: 18,
            maintainActivePage: false,
            loop: true,
            hidePageListIfSinglePage: true
        },
        callbacks: {
            onMixEnd: function() {
                jQuery(window).trigger('resize').trigger('scroll');
            }
        }
    });
}

if($('#mixitup-posts-from-past').length) {

    var postMixer = mixitup('#mixitup-posts-from-past', {
        load: {
            filter: 'all'
        },
        selectors: {
            control: '.mixitup-control'
        },
        pagination: {
            limit: 6,
            maintainActivePage: false,
            loop: true,
            hidePageListIfSinglePage: true
        },
        callbacks: {
            onMixEnd: function() {
                jQuery(window).trigger('resize').trigger('scroll');
            }
        }
    });
}

// ========== Add class on entering viewport

$.fn.isInViewport = function() {
var elementTop = $(this).offset().top;
var elementBottom = elementTop + $(this).outerHeight();
var viewportTop = $(window).scrollTop();
var viewportBottom = viewportTop + $(window).height();
return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
  $('.experience-level').each(function() {
    if ($(this).isInViewport()) {
      $(this).addClass('active');
    } 
  });
  $('.slide-up').each(function() {
    if ($(this).isInViewport()) {
      $(this).addClass('active');    
    } 
  });   
    $('.slide-right').each(function() {
    if ($(this).isInViewport()) {
      $(this).addClass('active');    
    } 
  });  
    $('.slow-fade').each(function() {
    if ($(this).isInViewport()) {
      $(this).addClass('active');    
    } 
  });    
    
});

});//Don't remove ---- end of jQuery wrapper
