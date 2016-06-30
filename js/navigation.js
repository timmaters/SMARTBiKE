$(document).ready(function()
{
  $('#dir2').hide();
  $('#dir3').hide();
  $('#dir4').hide();
  $('#dir5').hide();
  $('#dir6').hide();
  $('#dir7').hide();
  $('#dir8').hide();
  $('#dir9').hide();

  setTimeout(function()
  {
      $('#dir2').show();
      $('#dir1').hide();

      setTimeout(function()
      {
        $('#dir3').show();
        $('#dir2').hide();

        setTimeout(function()
        {
          $('#dir4').show();
          $('#dir3').hide();

          setTimeout(function()
          {
            $('#dir5').show();
            $('#dir4').hide();

            setTimeout(function()
            {
              $('#dir6').show();
              $('#dir5').hide();

              setTimeout(function()
              {
                $('#dir7').show();
                $('#dir6').hide();

                setTimeout(function()
                {
                  $('#dir8').show();
                  $('#dir7').hide();
                  setTimeout(function()
                  {
                    $('#dir9').show();
                    $('#dir8').hide();
                  }, 4000);
                }, 3000);
              }, 5000);
            }, 2000);
          }, 4000);
        }, 2000);
      }, 6000);
  }, 2000);



});
