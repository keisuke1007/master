jQuery(function ($) {

$("#search_box").append("<div class='close_btn'>×</div>");
$(".search_criteria_btn").click(function() {
    $("#search_box").css({
        "visibility":"visible"
    });
});
$(".close_btn").click(function(){
    $("#search_box").css({
        "visibility":"hidden"
    });
});

});
