<?php 
$con = mysqli_connect("localhost", "tsoogii", "", "test");

//Holbogdson esehiig shalgah
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>