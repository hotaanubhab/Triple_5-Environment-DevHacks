<!--<?php 

include 'db.php';
$error  = array('price'=>'','weight'=>'','collection'=>'','material' => '','name'=>'','email'=>'','contact'=>'');
$material = "";
$price ="";
$weight = "";
$collection = "";
$name = "";
$email = "";
$contact = "";
$lat = "";
$lng = "";
if(isset($_POST['submit'])){
  $material = ($_POST['material']);
  $price =  htmlspecialchars($_POST['price']);
  $name =  htmlspecialchars($_POST['name']);
  $email =  htmlspecialchars($_POST['email']);
  $contact =  htmlspecialchars($_POST['contact']);
  $weight =  htmlspecialchars($_POST['weight']);
  $collection = 'pick';
  if(empty($_POST['material'])){
    $error['material']='A material is required';
  }
  if(empty($_POST['name'])){
    $error['name']='A name is required';
  }
  if(empty($_POST['email'])){
    $error['email']='A email is required';
  }
  if(empty($_POST['contact'])){
    $error['contact']='A contact is required';
  }
  if(empty($_POST['price'])){
    $error['price']='A price is required';
  }
  if(empty($_POST['weight'])){
    $error['weight']='Approximate weight is required';
  }
  if(empty($_POST['collection'])){
    $error['collection']='A procedure is required';
  }
  if(array_filter($error)){

  } else{
  $name = mysqli_real_escape_string($conn,$name);
  $sql = "INSERT INTO request(name,email,contact,material,price,weight,collection) VALUES('$name','$email',$contact,'$material',$price,$weight,'$collection')";
  mysqli_query($conn, $sql);
  header('Location: map1.php');
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
        <title>Welcome to Kabaadi</title>
      
    </head>
    
    <body>
    <div class="everything andyou">
    
   <!-- navbar -->
      <ul>
        <li><a href="request.php">Contact</a></li>
        <li><a href="request.php">Requests</a></li>
        
        <li><a href="index.php">Home</a></li>
        </ul>
    
    <div class="logo">TrashEx</div>

<form action="form1.php" method  = "POST">

   <label>Name : </label><input type="text" name="name" id="Name" class="why" placeholder = "" value = "<?php echo $name ?>">
   <div class="error"><?php echo $error['name'];?></div>
   <label>Email : </label><input type="text" name="email" id="Price" class="are" placeholder = "" value = "<?php echo $email ?>">
   <div class="error"><?php echo $error['email'];?></div>
   <label>Contact : </label><input type="text" name="contact" id="Price" class="you" placeholder = "" value = "<?php echo $contact ?>">
   <div class="error"><?php echo $error['contact'];?></div>
   <label>Material : </label><select class="biggey" name="material">
   <option value="" <?php if($material == '')echo "selected"; ?>></option>
    <option value="paper" <?php if($material == 'paper')echo "selected"; ?>>Papers</option>
    <option value="plastic" <?php if($material == 'plastic')echo "selected"; ?>>Plastic</option>
    <option value="metal" <?php if($material == 'metal')echo "selected"; ?>>Metals</option>
    <option value="e" <?php if($material == 'e')echo "selected"; ?>>E-Waste</option>
  </select>
  <div class="error"><?php echo $error['material'];?></div>

  <label>Approximate Price per. Kg : </label>
  <input type="text" name="price" id="Price" class="gay" placeholder = "" value = "<?php echo $price ?>">
  <div class="error"><?php echo $error['price'];?></div>
  <label>Approximate Weight in Kg :</label>
  <input type="text" name="weight" id="Weight" class="im" placeholder = "" value = "<?php echo $weight ?>">
  <div class="error"><?php echo $error['weight'];?></div>
  <div class="vanish">Pickup<input type="radio" name="collection" value="pick" <?php echo "checked"; ?>></div>
  <br>
  <div class="error"><?php echo $error['collection'];?></div>
  <input type="submit"  class="not" name="submit" value="Choose Pick-Up Location">
</form>
    <img class="spoodermon" src="images/recycle1.jpg" alt="">
    </div>
    

    </body>
</html>