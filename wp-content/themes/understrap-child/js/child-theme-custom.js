console.log('dsfds');




jQuery(document).ready(function($) {

  
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("fade").style.display = "block";
    } else {
        document.getElementById("fade").style.display = "none";
    }

     if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("fade2").style.display = "block";
    } else {
        document.getElementById("fade2").style.display = "none";
    }
}


!function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);
 
// Swipe functions for Bootstrap Carousel
$('.carousel').bcSwipe({ threshold: 50 });


/*
if ($(window).width() < 480) { // only for mobile devices
  $('.owl-carousel .item').each(function(index) {
    if (index % 2 == 0) { // wrap by 2 items
      $(this).add($(this).next('.item')).wrapAll('<div class="item__col" />');
    }
  });
}

	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

*/




});



