$(document).ready(function () {

    getLocation();

    window.ondevicemotion = function (event) {
        var xVal = event.accelerationIncludingGravity.x;
        var yVal = event.accelerationIncludingGravity.y;
        var zVal = event.accelerationIncludingGravity.z;
        $('#xVal').find('span').html(parseInt(xVal));
        $('#yVal').find('span').html(parseInt(yVal));
        $('#zVal').find('span').html(parseInt(zVal));
    };

    video();

});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        $('#error').html('"Geolocation is not supported by this browser.');
    }
}

function showPosition(position) {
    $('#latVal').find('span').html(position.coords.latitude);
    $('#longVal').find('span').html(position.coords.longitude);
}


function video() {
// Grab elements, create settings, etc.
    var video = $('#video')[0];

// Get access to the camera!
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({video: true}).then(function (stream) {
            video.src = window.URL.createObjectURL(stream);
            video.play();
        });
    }
}