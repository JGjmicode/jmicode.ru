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

