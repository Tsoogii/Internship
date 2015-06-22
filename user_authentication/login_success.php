<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");}

$expireAfter = 2;

//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){
    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
    
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter *10;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
        header("location:index.php");
       
    }
    
}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();


?>
        <html lang="en">
  <head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>

  <body>
      <h3 align="center">Login Successful!</h4>

<h4 align="center">  Click here to <a href="logout.php">LogOut</a> </h4>
      
  </body>
</html>





