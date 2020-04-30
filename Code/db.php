<?php 
	$conn = mysqli_connect('localhost','root','','kabaadi');

	if(!$conn){
		echo 'Connection error with Database' . mysqli_connect_error();
	}
 ?>