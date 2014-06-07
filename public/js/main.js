function animateResume() {
    // animate left
    $("#work-experience").animate({
        left:'-50%'
    }, 500, function() {
        $("#resume").css('left','150%');
        $("#resume").appendTo('#content');
    });

    // animate right
    $("#resume").animate({
        left: '50%'
    }, 500);
};

function animateOffScreen(direction,id) {

};