$(document).ready(function () {
    $('.tab').on('click', function () {
        var city = $(this).attr('data-city');
        $('.content').hide();
        $('.tab').removeClass('active');
        $(this).addClass('active');
        $('#'+city).show();
    });



});