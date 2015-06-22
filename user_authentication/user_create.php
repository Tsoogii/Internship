<?php
function json(){
    
$con = mysqli_connect("localhost", "tsoogii", "", "test");

//Holbogdson esehiig shalgah
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted = hash('sha256',$password);


$sql = mysqli_query($con,"INSERT INTO login(username,password) VALUES ('$username','$encrypted')");

    
mysqli_close($con);
}
    
return json();
?>