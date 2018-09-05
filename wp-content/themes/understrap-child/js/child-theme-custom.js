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


	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:9
        }
    }
})






});



