$(document).ready(function() {
  if("geolocation" in navigator)
  {
    navigator.geolocation.getCurrentPosition(function(position)
    {
      loadWeather(position.coords.latitude + ',' + position.coords.longitude);
    });
  }
  else
  {
    loadWeather("Steyl, LM", "");
  }
  function loadWeather(location, woeid)
  {
    $.simpleWeather({
      location: location,
      woeid: woeid,
      unit: 'c',
      success: function(weather) {
        html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
        html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
        html += '<li class="currently">'+weather.currently+'</li>';
        html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';

        $("#weather").html(html);
      },
      error: function(error) {
        $("#weather").html('<p>'+error+'</p>');
      }
    });
  }
});
