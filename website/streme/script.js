$(document).ready(function() {
    // Get access to the camera and stream it to the video element
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function(stream) {
                var videoElement = document.getElementById('video');
                videoElement.srcObject = stream;
            })
            .catch(function(error) {
                console.error('Error accessing the webcam:', error);
            });
    } else {
        console.error('getUserMedia is not supported');
    }
});
