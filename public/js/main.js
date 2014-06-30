$(document).ready(function() {
    var speed = 400;
    $("#arl-project").mouseenter(function() {
        $("#arl-thumb").stop().hide();
        $("#arl-thumb").fadeIn(speed);
    }).mouseleave(function() {
        $("#arl-thumb").stop().show();
        $("#arl-thumb").fadeOut(speed);
    });

    $("#tartantickets-project").mouseenter(function() {
        $("#tartantickets-thumb").stop().hide();
        $("#tartantickets-thumb").fadeIn(speed);
    }).mouseleave(function() {
        $("#tartantickets-thumb").stop().show();
        $("#tartantickets-thumb").fadeOut(speed);
    });

    $("#dinewithdinex-project").mouseenter(function() {
        $("#dinewithdinex-thumb").stop().show();
        $("#dinewithdinex-thumb").fadeOut(speed);
    }).mouseleave(function() {
        $("#dinewithdinex-thumb").stop().hide();
        $("#dinewithdinex-thumb").fadeIn(speed);
    });

    $("#amks-project").mouseenter(function() {
        $("#amks-thumb").stop().hide();
        $("#amks-thumb").fadeIn(speed);
    }).mouseleave(function() {
        $("#amks-thumb").stop().show();
        $("#amks-thumb").fadeOut(speed);
    });

    $("#relationpic-project").mouseenter(function() {
        $("#relationpic-thumb").stop().show();
        $("#relationpic-thumb").fadeOut(speed);
    }).mouseleave(function() {
        $("#relationpic-thumb").stop().hide();
        $("#relationpic-thumb").fadeIn(speed);
    });

    $("#wim-project").mouseenter(function() {
        $("#wim-thumb").stop().hide();
        $("#wim-thumb").fadeIn(speed);
    }).mouseleave(function() {
        $("#wim-thumb").stop().show();
        $("#wim-thumb").fadeOut(speed);
    });

    $("#fanapp-project").mouseenter(function() {
        $("#fanapp-thumb").stop().show();
        $("#fanapp-thumb").fadeOut(speed);
    }).mouseleave(function() {
        $("#fanapp-thumb").stop().hide();
        $("#fanapp-thumb").fadeIn(speed);
    });

    $("#ajmark-project").mouseenter(function() {
        $("#ajmark-thumb").stop().hide();
        $("#ajmark-thumb").fadeIn(speed);
    }).mouseleave(function() {
        $("#ajmark-thumb").stop().show();
        $("#ajmark-thumb").fadeOut(speed);
    });

    $("#visual-concepts").mouseenter(function() {
        $("#visual-concepts-thumb").stop().hide();
        $("#visual-concepts-thumb").fadeIn(speed);
    }).mouseleave(function() {
        $("#visual-concepts-thumb").stop().show();
        $("#visual-concepts-thumb").fadeOut(speed);
    });

});