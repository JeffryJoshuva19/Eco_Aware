$(document).ready(function() {
    $("#nav-list").on("click", ".nav-link", function(event) {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});