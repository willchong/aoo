$(function() {

	console.log("hello from aoo");
    $('.logo').on('click', function(event) {
        $(this).removeClass('active');
        $('.links').addClass('active');
    });
    $('.js-link-our-world').on('click', function(event) {
        event.preventDefault();
        $('.social').addClass('active');
    });

});
