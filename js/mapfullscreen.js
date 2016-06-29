$(document).ready(function()
{
  $('#mapfullscreen').hide();

  $('#overlay').click(function(e)
	{
    $('.apps').hide();

    $('#mapfullscreen').show();

    $('#closefullscreen').click(function(e)
  	{
        $('#mapfullscreen').hide();

        $('.apps').show();
    });
	});

});
