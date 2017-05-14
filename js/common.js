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

function servClick(i = 1) {
    
    for (var j = 1; j <= $(".serv-description").children().length; j++) {        
        $("#des"+j).addClass("serv-description-hide");
    }
            
    switch (i) {
        case "1":
            $("#des1").removeClass("serv-description-hide");
            break;
        case "2":
            $("#des2").removeClass("serv-description-hide");
            break;
        case "3":
            $("#des3").removeClass("serv-description-hide");
            break;
        case "4":
            $("#des4").removeClass("serv-description-hide");
            break; 
        case "5":
            $("#des5").removeClass("serv-description-hide");
            break; 
        case "6":
            $("#des6").removeClass("serv-description-hide");
            break; 
        case "7":
            $("#des7").removeClass("serv-description-hide");
            break; 
        case "8":
            $("#des8").removeClass("serv-description-hide");
            break;         
    }
}

var slideNow = 1;
var slideCount = $("#slidewrapper").children().length;
var slideInterval = 2500;

$(document).ready( function (){
    setInterval(nextSlide, slideInterval);
    } ,function() {
        switchInterval = setInterval(nextSlide, slideInterval);
    });

function nextSlide() {    
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $("#slidewrapper").css("transform", "translate(0, 0)");
        slideNow = 1;
    } else {
        translateWidth = -$(".viewport").width() * (slideNow);
        $("#slidewrapper").css({
            "transform": "translate(" + translateWidth + "px, 0)",
            "-webkit-transform": "translate(" + translateWidth + "px, 0)",
            "-ms-transform": "translate(" + translateWidth + "px, 0)",
        });
        slideNow++;
    }
}
