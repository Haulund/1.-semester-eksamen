var newWindowWidth = $(window).width();

$(document).ready(function() {

    $(window).on("resize", function (e) {
        var newWindowWidth = $(window).width();
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth >= 769) {
            //STARTER SKOLLR
            var s = skrollr.init();
        } else {

        }
    }

    //VIDEO HEADER
    var video_id = $('#background-video').attr('data-id');

    $('#background-video').YTPlayer({
        fitToBackground: true,
        videoId: video_id,
        mute: true,
        pauseOnScroll: false,
        playerVars: {
            modestbranding: 0,
            autoplay: 1,
            controls: 0,
            showinfo: 0,
            wmode: 'transparent',
            branding: 0,
            rel: 0,
            autohide: 0,
            origin: window.location.origin
        },
        callback: function() {
        var player = $('#background-video').data('ytPlayer').player;
            // console.log("callback", player);
        }
    });

});


if (newWindowWidth >= 769) {
    function openNav() {
        document.getElementById("navigation").style.width = "30%";
    }
    
    function closeNav() {
        document.getElementById("navigation").style.width = "0";
    }
} else {
    function openNav() {
        document.getElementById("navigation").style.width = "100%";
    }
    
    function closeNav() {
        document.getElementById("navigation").style.width = "0";
    }    
}