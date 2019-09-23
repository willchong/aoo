$(function() {

	console.log("hello from aoo");
    $('.logo').on('click', function(event) {
        $(this).removeClass('active');
        $('.links').addClass('active');
    });
    $('.js-link-our-world').on('click', function(event) {
        event.preventDefault();
        $('.social').addClass('active');
        $('.catalogue').removeClass('active');
        $('.js-info').removeClass('active');
    });

    $('.js-link-catalogue').on('click', function(event) {
        event.preventDefault();
        $('.catalogue').addClass('active');
        $('.social').removeClass('active');
    });

    $('.js-card').on('click', function(event) {
        event.preventDefault();
        if (event.target !== this) {
            return;
        }
        if ($(this).find('.js-info').hasClass('active')) {
            $(this).find('.js-info').removeClass('active');
        } else {
            $('.js-info').removeClass('active');
            $(this).find('.js-info').addClass('active');
        }
    });

});
