<?php 
 include 'db.php';

$sql = 'SELECT * FROM pickup ORDER BY created';

$result = mysqli_query($conn , $sql);

$request = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>
<!DOCTYPE html> 
<html>
    <!--fix the fonts-->
    
    <head>
        <link rel = "stylesheet" type = "text/css" href = "table.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "common.css">
        <title>Welcome to TrashEx</title>
        <style>
   
    html, body {
      
      margin: 0;
      padding: 0;
    }	
    .everything{
       text-align : center;
       
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
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Requested</th>
        <th>Details</th>
      </tr>
      <?php foreach($request as $r) {?>
        <tr>
          <td><?php echo $r['name'] ?></td>
          <td><?php echo $r['email'] ?></td>
          <td><?php echo $r['contact'] ?></td>
          <td><?php echo $r['created'] ?></td>
          <td><a href="details2.php?id=<?php echo $r['id'] ?>">See</a></td>
        </tr>
      <?php } ?>
    </table>

</div>
</body>
</html>