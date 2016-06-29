$(document).ready(function()
{
  $('#light-off').hide();
  $('#dark').hide();

  $('#light-on').click(function(e)
	{
    $('#light').hide();
    $('#light-on').hide();

    $('#light-off').show();
    $('#dark').show();

    $('#light-off').click(function(e)
  	{
        $('#light-off').hide();
        $('#light-on').show();

        $('#dark').hide();
        $('#light').show();
    });
	});

});
