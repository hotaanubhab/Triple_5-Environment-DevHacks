<!DOCTYPE html> 
<html>
    <!--fix the fonts-->
    
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "common.css">
        <title>Welcome to Kabaadi</title>
        <style>
   #map{
    margin-Top : 100px;
    margin-Left : 50px;
    float : left;
    height: 430px;
    width : 580px;
   }
   .button{
     float: right;
     margin-top: 275px;
     margin-right: 275px;
   }
    html, body {
      height: 100%;
      width : 100%;
      margin: 0;
      padding: 0;
    }	
    .everything{
       text-align : center;
       font-size : larger;
    }
  </style>
    </head>
    
    <body>
    <div class="everything">
    
   <!-- navbar -->
      <ul>
        <li><a href="request.php">Contact</a></li>
        <li><a href="request.php">Requests</a></li>
        
        <li><a href="index.php">Home</a></li>
        </ul>
    
    <div class="logo">TrashEx</div>
<div id="map"></div>

<button type="button" class="button" onclick="teledata()"><h2>Confirm</h2></button>
  </div>
  <script>
    let map;
    var markers = [];
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 20.3548, lng:85.8153},
        zoom: 15
      });
      // map onclick listener 
      map.addListener('click', function(e) {
        
        addMarker(e.latLng);
      
      });
      
    }
    var lat;
    var lng;
    function teledata(){
      showHint(lat,lng);
    }


    function gonow(){
      window.location.href = "index.php";
    }
    
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }
    // define function to add marker at given lat & lng
    function addMarker(latLng) {
        setMapOnAll(null);
      let marker = new google.maps.Marker({
          map: map,
          position: latLng,
          draggable: true
      });

      marker.addListener('position_changed', function() {
         lat = (marker.getPosition().lat());
         lng = (marker.getPosition().lng());
      });

      markers.push(marker);
       lat = (marker.getPosition().lat());
       lng = (marker.getPosition().lng());

      //store the marker object drawn in global array
      
    }
    function showHint(str,str2) {
  var xhttp;
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      gonow();
    }
  };
  xhttp.open("GET", "gethint.php?q="+str+"&u="+str2, true);
  xhttp.send();   
}   
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWQ1Hb_-b1DCWpAW0RuuJ-acjIhVwm-fU&callback=initMap">
  </script>


    </body>
</html>