$( document ).ready(function() {
    
    $('#projects').show();
    
    $('.tab').on('click', function () {
        var tab = '#'+$(this).attr('data-tab');
        console.log(tab);
        $('.content').hide();
        $('.tab').removeClass('active');
        $(this).addClass('active');
        $(tab).show();
    });
    
    



});