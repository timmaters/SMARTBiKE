$(document).ready(function()
{
  $('#spd2').hide();
  $('#spd3').hide();
  $('#spd4').hide();
  $('#spd5').hide();
  $('#spd6').hide();

  setInterval(function(){loop()}, 12000);

  function loop(){
    setTimeout(function()
    {
        $('#spd2').show();
        $('#spd1').hide();
        $('#spd6').hide();
        setTimeout(function()
        {
          $('#spd3').show();
          $('#spd2').hide();

          setTimeout(function()
          {
            $('#spd4').show();
            $('#spd3').hide();

            setTimeout(function()
            {
              $('#spd5').show();
              $('#spd4').hide();

              setTimeout(function()
              {
                $('#spd6').show();
                $('#spd5').hide();
              }, 2000);
            }, 2000);
          }, 2000);
        }, 2000);
    }, 2000);
  }


});
