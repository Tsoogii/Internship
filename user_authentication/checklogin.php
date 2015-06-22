<?php

ob_start();
$host="localhost"; // Host name 
$username="tsoogii"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$mypassword=$_POST[];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con,$mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;
header("location:login_success.php");

}
else {
    

ob_end_flush();
?>
<html lang="en">
  <head>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>

  <body>
<h3 align="center">Wrong username or password</h4>
<h4 align="center">  Go back <a href="index.php">Login again!</a> </h4>
  </body>
</html>
<?php
}
$year = time() + 31536000;
setcookie('remember_me', $_POST['username'], $year);
setcookie('remember_me', $_POST['password'], $year);
?>