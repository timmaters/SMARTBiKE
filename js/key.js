$(document).ready(function()
{
  $('#Bclose').hide();
  $('#open').hide();

  $('#Bopen').click(function(e)
	{
    $('#Bopen').hide();
    $('#close').hide();

    $('#Bclose').show();
    $('#open').show();

    $('#Bclose').click(function(e)
  	{
        $('#Bclose').hide();
        $('#close').show();

        $('#open').hide();
        $('#Bopen').show();
    });
	});

});
