function initialize() {
 var lat = document.getElementById('txt_lat').value;
 var lng = document.getElementById('txt_lng').value; 
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(lat,lng),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
  var img = new google.maps.MarkerImage("../img/scouts.png");

  var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom',
    draggable:true,
    icon:img

  });

  google.maps.event.addListener(marker, 'dragend', function() {

      // Get the Current position, where the pointer was dropped

      var point = marker.getPosition();

      // Center the map at given point

      map.panTo(point);

      // Update the textbox

      document.getElementById('txt_lat').value=point.lat();
      document.getElementById('txt_lng').value=point.lng();
   });

  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
}

google.maps.event.addDomListener(window, 'load', initialize);