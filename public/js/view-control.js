$(document).ready(function() {
    $(".view-link").click(function(event) {
        $('#work-experience-link, #resume-link, #projects-link').removeClass('active');
        $('#'+event.target.id).addClass('active');
        animateView(event.target.attributes.value.value);
    });

    $('.view-link-small').click(function(event) {
        changeView(event.target.attributes.value.value)
    });
});

function animateLeft(onscreen, offscreen) {
    // animate offscreen
    $('#'+onscreen).animate({
        left:'-50%'
    }, 1000, function() {
        $('#'+onscreen).css('left','-50%');
    });
    // animate onscreen
    $('#'+offscreen).animate({
        left: '50%'
    }, 1000);
    // set new visible
    $("#"+onscreen).removeClass("visible");
    $("#"+offscreen).addClass("visible");
};

function animateRight(onscreen, offscreen) {
    // animate offscreen
    $('#'+onscreen).animate({
        left:'150%'
    }, 1000, function() {
        $('#'+onscreen).css('left','150%');
    });
    // animate onscreen
    $('#'+offscreen).animate({
        left: '50%'
    }, 1000);
    // set new visible
    $("#"+onscreen).removeClass("visible");
    $("#"+offscreen).addClass("visible");
};

function animateView(target_id) {
    var visible = document.getElementsByClassName('visible');

    if (target_id != visible[0].id) {    
        if (target_id === "projects") {
            animateRight(visible[0].id,"projects");
            return
        }
    
        if (target_id === "resume") {
            animateLeft(visible[0].id,"resume");
            return
        }

        if (target_id === "work-experience" && visible[0].id === "resume"){
            $('#work-experience').css('left','-50%');
            animateRight(visible[0].id,"work-experience");
            return
        }

        if (target_id === "work-experience" && visible[0].id === "projects"){
            $('#work-experience').css('left','150%');
            animateLeft(visible[0].id,"work-experience");
            return
        }

    } else {
        return
    }
};

function changeView(target_id) {
    var visible = document.getElementsByClassName('visible');

    if (target_id != visible[0].id) {    
        if (target_id === "projects") {
            placeRight(visible[0].id,"projects");
            return
        }
    
        if (target_id === "resume") {
            placeLeft(visible[0].id,"resume");
            return
        }

        if (target_id === "work-experience" && visible[0].id === "resume"){
            $('#work-experience').css('left','-50%');
            placeRight(visible[0].id,"work-experience");
            return
        }

        if (target_id === "work-experience" && visible[0].id === "projects"){
            $('#work-experience').css('left','150%');
            placeLeft(visible[0].id,"work-experience");
            return
        }

    } else {
        return
    }
};

function placeLeft(onscreen, offscreen) {
    // place offscreen
    $('#'+onscreen).css('left','-50%');

    // place onscreen
    $('#'+offscreen).css('left','50%');
    // set new visible
    $("#"+onscreen).removeClass("visible");
    $("#"+offscreen).addClass("visible");
};

function placeRight(onscreen, offscreen) {
    // place offscreen
    $('#'+onscreen).css('left','150%');

    // animate onscreen
    $('#'+offscreen).css('left','50%');
    // set new visible
    $("#"+onscreen).removeClass("visible");
    $("#"+offscreen).addClass("visible");
};

