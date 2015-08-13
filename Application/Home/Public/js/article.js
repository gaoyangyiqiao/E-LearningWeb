/**
 * Created by HCW on 2015/8/13.
 */
$(function(){
    $("#205").click(function(){
        $("#comment-1").toggle();
    });

    $("#cancel").click(function(){
        $("#comment-1").toggle();
    });

    $(".aw-add-comment").click(function(event){
        $("#aw-comment-box-answer-"+event.target.getAttribute("data-id")).toggle();
    });
});

