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
