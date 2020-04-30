<!--<?php 

include 'db.php';
$error  = array('price'=>'','weight'=>'','collection'=>'','material' => '','name'=>'','email'=>'','contact'=>'');
$name = "";
$email = "";
$contact = "";
$lat = "";
$lng = "";
if(isset($_POST['submit'])){
 
  $name =  htmlspecialchars($_POST['name']);
  $email =  htmlspecialchars($_POST['email']);
  $contact =  htmlspecialchars($_POST['contact']);
  
  $collection = 'pick';
  
  if(empty($_POST['name'])){
    $error['name']='A name is required';
  }
  if(empty($_POST['email'])){
    $error['email']='A email is required';
  }
  if(empty($_POST['contact'])){
    $error['contact']='A contact is required';
  }
  
  if(array_filter($error)){

  } else{
  $name = mysqli_real_escape_string($conn,$name);
  $sql = "INSERT INTO pickup(name,email,contact) VALUES('$name','$email',$contact)";
  mysqli_query($conn, $sql);
  header('Location: map2.php');
  }
}

?>

-->
<!DOCTYPE html> 
<html>
    <!--fix the fonts-->
    
    <head>
        <link rel = "stylesheet" type = "text/css" href = "form.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "common.css">
        <title>Welcome to TrashEx</title>
      
    </head>
    
    <body>
    <div class="everything andyou">
    
   <!-- navbar -->
      <ul>
        <li><a href="">Contact</a></li>
        <li><a href="request.php">Requests</a></li>
        <li><a href="routes.php">Pickup</a></li>
        <li><a href="index.php">Home</a></li>
        </ul>
    
    <div class="logo">TrashEx</div>

<form action="form2.php" method  = "POST">

   <label>Name : </label><input type="text" name="name" id="Name" class="why" placeholder = "" value = "<?php echo $name ?>">
   <div class="error"><?php echo $error['name'];?></div>
   <label>Email : </label><input type="text" name="email" id="Price" class="are" placeholder = "" value = "<?php echo $email ?>">
   <div class="error"><?php echo $error['email'];?></div>
   <label>Contact : </label><input type="text" name="contact" id="Price" class="you" placeholder = "" value = "<?php echo $contact ?>">
   <div class="error"><?php echo $error['contact'];?></div>
   <div style="width = 100%;height = 400px"><br><br><br></div>
  <input type="submit"  class="not" name="submit" value="Choose Pick-Up Location">
  <br><br><br><br>

</form>

    <img class="spidermon" src="images/waste.png" alt="">
    </div>
    

    </body>
</html>