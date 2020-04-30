<?php 
 include 'db.php';

$sql = 'SELECT * FROM request ORDER BY created';

$result = mysqli_query($conn , $sql);

$request = mysqli_fetch_all($result, MYSQLI_ASSOC);



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
          <td><a href="details.php?id=<?php echo $r['id'] ?>">See</a></td>
        </tr>
      <?php } ?>
    </table>

</div>
</body>
</html>