jQuery(function ($) {

$("#header .gN_mypage").hover(function() {
    $("#header .gN_mypage ul").show();
    $("#header .gN_mypage").css({"background" : "rgba(255,255,255,0.2)", "border-radius":"4px 4px 0 0"});
    $("#header .gN_mypage .usr_name").css({"background" : "none"});
}, function() {
    $("#header .gN_mypage ul").hide();
    $("#header .gN_mypage").css({"background" : "none"});
    $("#header .gN_mypage .usr_name").css({"background" : "none"});
});

});
