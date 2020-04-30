<?php 
 include 'db.php';
$id= $_GET['id'];

$sql = "SELECT * FROM pickup WHERE id = $id";

$result = mysqli_query($conn , $sql);

$r = mysqli_fetch_assoc($result);



?>
<!DOCTYPE html> 
<html>
    <!--fix the fonts-->
    
    <head>
        <link rel = "stylesheet" type = "text/css" href = "form.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "common.css">
        <title>Welcome to TrashEx</title>
        <style>
          #map{
              margin-top : 100px;
    float : right;
    height: 420px;
    width : 570px;
    border-radius : 15px;
    overflow :hidden;
   }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }	
    
    .data{
        margin-top : 200px;
        float : left;
        font-size : larger;
    }
  </style>
    </head>
    
    <body>
    <div class="everything">
    
   <!-- navbar -->
      <ul>
        <li><a href="">Contact</a></li>
        <li><a href="request.php">Requests</a></li>
        <li><a href="routes.php">Pickup</a></li>
        <li><a href="index.php">Home</a></li>
        </ul>
    
    <div class="logo">TrashEx</div>
    
 <div class="data">
   <div class="name">Name : <?php echo $r['name']; ?></div>
   <div class="email">Email : <?php echo $r['email']; ?></div>
   <div class="contact">Contact : <?php echo $r['contact']; ?></div>
   <div class="created">Requested : <?php echo $r['created']; ?></div>
   <div>Waste Pickup</div>
 </div>


 <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: <?php echo $r['lat']; ?>, lng: <?php echo $r['lng']; ?>};

        let map;
    var markers = [];
    
      map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 20
      });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFc7RTUJdZnHsB-_v4rz12CPcTe6jU29g&callback=initMap">
    </script>
</div>
</body>
</html>