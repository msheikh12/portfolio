
var locations = [
  ["Peet's Falls Church", 38.904583, -77.203958, 3],
  ["Peet's Vienna 2", 38.916245, -77.226557, 2],
  ["Peet's Vienna 1", 38.906122, -77.260225, 1],
];

function initMap() {
  var myLatLng = {lat: 38.90, lng: -77.22};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: myLatLng
    });

  var count;

  for (count = 0; count < locations.length; count++) {  
    new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
      map: map,
      title: locations[count][0]
      });
   }
}
