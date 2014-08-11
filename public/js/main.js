$(document).ready(function() {
    var speed = 400;

    $(".project-box-container").on("mouseenter", function(e){
        var thumbnail = e.currentTarget.getElementsByTagName("IMG")[0].id;
        var className = e.currentTarget.getElementsByTagName("IMG")[0].className;

        if (className === "thumbnail") {
            fadeInThumbnail(thumbnail, speed);
        } else {
            fadeOutThumbnail(thumbnail, speed)
        }
    });

    $(".project-box-container").on("mouseleave", function(e){
        var thumbnail = e.currentTarget.getElementsByTagName("IMG")[0].id;
        var className = e.currentTarget.getElementsByTagName("IMG")[0].className;

        if (className === "thumbnail") {
            fadeOutThumbnail(thumbnail, speed);
        } else {
            fadeInThumbnail(thumbnail, speed)
        }
    });

});

function fadeInThumbnail(thumbId, speed) {
    console.log(thumbId);
    $("#"+thumbId).stop().hide();
    $("#"+thumbId).fadeIn(speed);
}

function fadeOutThumbnail(thumbId, speed) {
    $("#"+thumbId).stop().show();
    $("#"+thumbId).fadeOut(speed);
}

