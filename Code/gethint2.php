<?php

include 'db.php';
// get the q parameter from URL
$q = $_REQUEST["q"];
$u = $_REQUEST["u"];

$sql = "UPDATE pickup SET lat = $q,lng = $u WHERE lat IS NULL";

mysqli_query($conn, $sql);

echo $q." ".$u;
?>