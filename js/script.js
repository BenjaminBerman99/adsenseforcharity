var player,
    time_update_interval = 0;
seconds = 0;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-placeholder', {
        width: 600,
        height: 400,
        videoId: 'i8Rc1BAdKBU',
        playerVars: {
            color: 'white',
            playlist: 'PLwZqHnsmZ2Kd-2HmDL0HU7eQ4hIM8z1J1'
        },
        events: {
            onReady: initialize
        }
    });

}

function initialize(){

    // Update the controls on load
    //updateTimerDisplay();
    //updateProgressBar();

    // Clear any old interval.
    clearInterval(time_update_interval);

    // Start interval to update elapsed time display and
    // the elapsed part of the progress bar every second.
    time_update_interval = setInterval(function () {
        //updateTimerDisplay();
        //updateProgressBar();
        addSecond();
    }, 1000);
    vids = ["i8Rc1BAdKBU", "fwcYbo7pjto", "nroqvlPN9Uo","XniR5aa6uZQ","ccVNi50kS4k","HKJklvhE0Vc","lYtEKOKAgfk","4PPobRKUj9A","CiK76WhVE_c","s3TADPtK_nk","rKAG-vmva28", "pJezeSYP6xc","GZ9ndjQopcs","I5kT9NhroE4","OKQytrOtbqI","NqBjrdXV198"];
    player.loadPlaylist(vids);
    //$('#volume-input').val(Math.round(player.getVolume()));
}

function addSecond(){

    if (player.getPlayerState() === 1){
        seconds++;
        calc = Math.round((seconds * 0.006) * 100) / 100;
        $("#rev").text("$"+calc);
        $("#done").attr("href", "http://adsenseforcharities.com/done.php?save="+calc);
    }

}


// This function is called by initialize()
function updateTimerDisplay(){
    // Update current time text display.
    $('#current-time').text(formatTime( player.getCurrentTime() ));
    $('#duration').text(formatTime( player.getDuration() ));
}


// This function is called by initialize()
function updateProgressBar(){
    // Update the value of our progress bar accordingly.
    $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
}


// Progress bar

$('#progress-bar').on('mouseup touchend', function (e) {

    // Calculate the new time for the video.
    // new time in seconds = total duration in seconds * ( value of range input / 100 )
    var newTime = player.getDuration() * (e.target.value / 100);

    // Skip video to new time.
    player.seekTo(newTime);

});


// Playback

$('#play').on('click', function () {
    player.playVideo();
});


$('#pause').on('click', function () {
    player.pauseVideo();
});


// Sound volume


$('#mute-toggle').on('click', function() {
    var mute_toggle = $(this);

    if(player.isMuted()){
        player.unMute();
        mute_toggle.text('volume_up');
    }
    else{
        player.mute();
        mute_toggle.text('volume_off');
    }
});

$('#volume-input').on('change', function () {
    player.setVolume($(this).val());
});


// Other options


$('#speed').on('change', function () {
    player.setPlaybackRate($(this).val());
});

$('#quality').on('change', function () {
    player.setPlaybackQuality($(this).val());
});


// Playlist

$('#next').on('click', function () {
    player.nextVideo()
});

$('#prev').on('click', function () {
    player.previousVideo()
});


// Load video

$('.thumbnail').on('click', function () {

    var url = $(this).attr('data-video-id');

    player.cueVideoById(url);

});


// Helper Functions

function formatTime(time){
    time = Math.round(time);

    var minutes = Math.floor(time / 60),
        seconds = time - minutes * 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    return minutes + ":" + seconds;
}


$('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
});