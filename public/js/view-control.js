$(document).ready(function() {
    $(".view-link").click(function(event) {
        $('#work-experience-link, #resume-link, #projects-link').removeClass('active');
        $('#'+event.target.id).addClass('active');
    });
});

function animateLeft() {
    // animate offscreen
    $("#work-experience").animate({
        left:'-50%'
    }, 800, function() {
        $("#work-experience").css('left','-50%');
    });
    // animate onscreen
        $("#resume").animate({
            left: '50%'
        }, 800);
};

function animateRight() {
    // animate offscreen
    $("#resume").animate({
        left:'150%'
    }, 800, function() {
        $("#resume").css('left','150%');
    });
    // animate onscreen
    $("#work-experience").animate({
        left: '50%'
    }, 800);
};

function animateView(onscreen,offscreen,direction) {

};

