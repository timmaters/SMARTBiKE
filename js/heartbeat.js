$(document).ready(function()
{
  $('#beat2').hide();
  $('#beat3').hide();
  setInterval(function(){loop()}, 8000);

  function loop(){
    setTimeout(function()
    {
        $('#beat2').show();
        $('#beat').hide();

        setTimeout(function()
        {
          $('#beat3').show();
          $('#beat2').hide();

          setTimeout(function()
          {
            $('#beat').show();
            $('#beat3').hide();
          }, 2000);
        }, 2000);
    }, 2000);
  }


});
