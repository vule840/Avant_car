console.log('dsfds');




jQuery(document).ready(function($) {


/*jQuery('#pum-88').popmake('open', callback);


var settings = jQuery('#popmake-88').data('popmake');
console.log(settings);*/

//*https://stackoverflow.com/questions/21349984/how-to-make-bootstrap-carousel-slider-use-mobile-left-right-swipe/30551685#30551685*/

$(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});



        /** za auto koji izabaers https://stackoverflow.com/questions/9232810/change-placeholder-text-using-jquery  ***/

$('.popmake-kratkorocni-najam').click(function() {
     var test =  $(this).text();
     //alert( test );
     $('#input_3_17').val(test);
    $('#input_3_17').attr("placeholder", test);
});
  
$('.popmake-dugorocni-najam').click(function() {
     var test2 =  $(this).text();
     //alert( test2 );
     $('#input_4_19').val(test2);
    $('#input_4_19').attr("placeholder", test2);
});


            /**  GUMBI I SCROLL **/
        window.onscroll = function() {scrollFunction()};
          window.onscroll = function() {scrollFunction2()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("fade").style.display = "block";
            } else {
                document.getElementById("fade").style.display = "none";
            }

            
        }
         function scrollFunction2() {
             if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
                document.getElementById("fade2").style.display = "block";
            } else {
                document.getElementById("fade2").style.display = "none";
            }
        }


           /**  DATEPICKER FIX DA IZLETAVA SAMO DATUM 
           https://docs.gravityforms.com/disable-keyboard-input-datepicker-fields/
           **/ 
        // $( ".datepicker" ).datepicker({ }).attr('readonly','readonly');


         /**  DATEPICKER DA TI HILITA TAJ DATUM KOJI PIKAS
           https://docs.gravityforms.com/highlighting-current-future-date-datepicker/
           **/ 
         /*   $( "#input_1_20" ).datepicker({ 
                defaultDate: '+7d',
                minDate: '+7d',
                gotoCurrent: true,
                prevText: '',
                showOn: 'both',
                buttonImage: '/wp-content/plugins/gravityforms/images/calendar.png',
                buttonImageOnly: true
            }); */



         /**  OVO JE ZA CARUSEL DA MOŽE SWIPE ALI NE RADI **/    
        //!function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);
         
        // Swipe functions for Bootstrap Carousel
        //$('.carousel').bcSwipe({ threshold: 50 });


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



$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 50
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });




});

