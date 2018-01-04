$(document).ready(function() {

    //STARTER SKOLLR
    var s = skrollr.init();


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

    /* Open the sidenav */
    function openNav() {
        document.getElementById("navigation").style.width = "30%";
    }

    /* Close/hide the sidenav */
    function closeNav() {
        document.getElementById("navigation").style.width = "0";
    }