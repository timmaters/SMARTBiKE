$(document).ready(function()
{
  $('#hamburger-menu').hide();

  $('.hamburger-icon').click(function(e)
	{
    $('#hamburger-menu').fadeIn( "slow", function() {

    });

    $('.hamburger-icon-return').click(function(e)
  	{
        $('#hamburger-menu').fadeOut( "slow", function() {

        });
    });
	});

});
