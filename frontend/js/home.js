$(document).ready(function() {
    const contentElements = $('.content');
    let currentIndex = 0;

    $(window).scroll(function() {
        const scrollTop = $(this).scrollTop();
        const windowHeight = $(this).height();
        const contentOffset = contentElements.eq(currentIndex).offset().top;

        if (contentOffset <= scrollTop + windowHeight) {
            contentElements.eq(currentIndex).addClass('falling');
            currentIndex++;
        }
    });

    $(window).on('wheel', function(event) {
        if (event.originalEvent.deltaY < 0 && currentIndex > 0) {
            currentIndex--;
            contentElements.eq(currentIndex).removeClass('falling');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var video = document.getElementById("autoplayVideo");
    
    // Play the video when the page is loaded
    video.play();
});
function getLocation() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    } else {
        alert("Geolocation is not supported in this browser.");
    }
}

function successCallback(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $("#qlatitude").val(latitude);
    $("#qlongitude").val(longitude);
}

function errorCallback(error) {
    alert("Error getting your location: " + error.message);
}
