//if("geolocation" in navigator){
//    navigator.geolocation.getCurrentPosition(function(position){
//        loadWeather(position.coords.latitude + ',' + position.coords.longitude);
//    })
//}else{
//    loadWeather("Dhaka, BD","");
//}
//setInterval(getWeather, 10000);
//function loadWeather(location,woeid){
//    $.simpleWeather({
//        location:location,
//        woeid:woeid,
//        unit:'c',
//        success:function(weather){
//            city=weather.city;
//            temp=weather.temp+'&deg';
//        }
//    })
//}
var weather =new XMLHttpRequest();
weather.open("GET","http://api.wunderground.com/api/Your_Key/conditions/q/CA/San_Francisco.json",false);
weather.send(null);
var r =JSOP.parse(weather.response);
var dis="Current Location: "+ r.current_observation.display_location.full +"<p>";
dis +="current temp:"+r.current_observation.temperature_string+"</p>";
dis +="current wind speed: "+r.current_observation.wind_string;
document.getElementById("weather").innerHTML=dis;
