function initialize() {
  
  var center = new google.maps.LatLng(20.593684,78.962880);
  var mapProp = {
    center: center,
    zoom:5,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var geocoder = new google.maps.Geocoder;
  states = [[11.00,78.00]];
  cities = [[13.0827,80.2707]];
  i=0;
  while(states[i])
  {
    var pos = new google.maps.LatLng(states[i][0],states[i][1]);
    var marker=new google.maps.Marker({
     position:pos,
     });
  marker.setMap(map);
  google.maps.event.addListener(marker,'click',function() {
  map.setZoom(7);
  map.setCenter(marker.getPosition());
  var citypos = new google.maps.LatLng(cities[0][0],cities[0][1]);
  marker.setPosition(citypos);
  document.getElementById("he").innerHTML="Click on the CITY which you would like to view relief information about.";
  google.maps.event.addListener(marker,'click',function() {
  map.setZoom(12);
  getpos = marker.getPosition();
  map.setCenter(getpos);
  marker.setMap(null);
 
  geocoder.geocode({'location': getpos}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        console.log(results[1]);
        var city = results[1].address_components[6]['long_name'];
        

        // var xhttp = new XMLHttpRequest();
        // xhttp.onreadystatechange = function() {
        //   if (xhttp.readyState == 4 && xhttp.status == 200) {
        //     window.location = "what.php";

        //   }
        // };
        // xhttp.open("GET", "user_city.php?cityname="+city, true);
        // xhttp.send();
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  });

  });
  });
  i++;
  }
}
google.maps.event.addDomListener(window, 'load', initialize);
