$(document).ready(function() {
    $(".view-link").click(function(event) {
        $('#work-experience-link, #resume-link, #projects-link').removeClass('active');
        $('#'+event.target.id).addClass('active');
        animateView(event.target.id);
    });
});

function animateLeft(onscreen, offscreen) {
    // animate offscreen
    $('#'+onscreen).animate({
        left:'-50%'
    }, 1200, function() {
        $('#'+onscreen).css('left','-50%');
    });
    // animate onscreen
    $('#'+offscreen).animate({
        left: '50%'
    }, 1200);
    // set new visible
    $("#"+onscreen).removeClass("visible");
    $("#"+offscreen).addClass("visible");
};

function animateRight(onscreen, offscreen) {
    // animate offscreen
    $('#'+onscreen).animate({
        left:'150%'
    }, 1200, function() {
        $('#'+onscreen).css('left','150%');
    });
    // animate onscreen
    $('#'+offscreen).animate({
        left: '50%'
    }, 1200);
    // set new visible
    $("#"+onscreen).removeClass("visible");
    $("#"+offscreen).addClass("visible");
};

function animateView(target_id) {
    var visible = document.getElementsByClassName('visible');
    // hacky check
    if (target_id != visible[0].id+"-link") {    
        if (target_id === "projects-link") {
            animateRight(visible[0].id,"projects");
            return
        }
    
        if (target_id === "resume-link") {
            animateLeft(visible[0].id,"resume");
            return
        }

        if (target_id === "work-experience-link" && visible[0].id === "resume"){
            $('#work-experience').css('left','-50%');
            animateRight(visible[0].id,"work-experience");
            return
        }

        if (target_id === "work-experience-link" && visible[0].id === "projects"){
            $('#work-experience').css('left','150%');
            animateLeft(visible[0].id,"work-experience");
            return
        }

    } else {
        return
    }
};

