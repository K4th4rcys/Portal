

$(document).ready(function() {
  var data = $('#logform').serializeArray();
  console.log(data);

  $('#create_account').on('click', function(){
    $('#login_content').fadeOut(150);
    $('#login_content').hide();
    $('#new_user').fadeIn(150);
  });

  $('#log_in').on('click', function(){
    $('#new_user').fadeOut(150);
    $('#new_user').hide();
    $('#login_content').fadeIn(150);
  });

  $('#login').on('click', function(){
    var data = $('#logform').serializeArray();
    console.log(data);

    $.ajax({
  type: 'POST',
  url: '/Resources/php/getuser.php',
  data: data,
  beforeSend:function(){
    // this is where we append a loading image
    $('#ajax_loader').show();
    $('#textbox').html('');
  },
  success:function(data){
    // successful request; do something with the data
    $('#ajax-panel').empty();
    $(data).find('item').each(function(i){
      $('#ajax-panel').append('<h4>' + $(this).find('title').text() + '</h4><p>' + $(this).find('link').text() + '</p>');
    });
  },
  error:function(){
    // failed request; give feedback to user
    $('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
  }
});
  });

  $('#submit').on('click', function(){

  });

});
