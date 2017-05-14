/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).scroll(function(){
    var pos = $(this).scrollTop();
    $(".banner img").css({
        "transform" : "translate(0%, " +pos/20+ "%"
    });
});

var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;
var slideInterval = 2500;

$(document).ready( function (){
    setInterval(nextSlide, slideInterval);
    } ,function() {
        switchInterval = setInterval(nextSlide, slideInterval);
    });

function nextSlide() {    
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('#slidewrapper').css('transform', 'translate(0, 0)');
        slideNow = 1;
    } else {
        translateWidth = -$('.viewport').width() * (slideNow);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow++;
    }
}
