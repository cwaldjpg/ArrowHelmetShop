$(document).ready(function() {
	$('.cta').click(function(){
  $(this).children('i').toggleClass('fa-pencil');   
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});

    $('a.login-window').click(function() {
        var loginBox = $(this).attr('href');
        $(loginBox).fadeIn("slow");
        $('body').append('<div id="over"></div>');
        $('#over').fadeIn(300);
        return false;
    });
    $(document).on('click', "a.close, #over", function() { 
        $('#over, .form-module').fadeOut(300 , function() {
            $('#over').remove();  
        }); 
        return false;
    });
});
