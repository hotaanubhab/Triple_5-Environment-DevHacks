<?php 
 include 'db.php';
$id= $_GET['id'];

$sql = "SELECT * FROM request WHERE id = $id";

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
        <title>Welcome to Kabaadi</title>
        <style>
          #map{
    
    margin : auto;
    height: 420px;
    width : 570px;
   }
    html, body {
      height: 100%;
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
      <!-- <ul>
        <li><a href="request.php">Contact</a></li>
        <li><a href="request.php">Requests</a></li>
        
        <li><a href="index.php">Home</a></li>
        </ul>
    
    <div class="logo">TrashEx</div> -->
    
 <div>
   <div class="name">Name : <?php echo $r['name']; ?></div>
   <div class="email">Email : <?php echo $r['email']; ?></div>
   <div class="contact">Contact : <?php echo $r['contact']; ?></div>
   <div class="material">Material : <?php echo $r['material']; ?></div>
   <div class="price">Price : <?php echo $r['price']; ?></div>
   <div class="weight">Weight : <?php echo $r['weight']; ?></div>
   <div class="created">Requested : <?php echo $r['created']; ?></div>
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWQ1Hb_-b1DCWpAW0RuuJ-acjIhVwm-fU&callback=initMap">
    </script>
</div>
</body>
</html>