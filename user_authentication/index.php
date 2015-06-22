<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        body{
            padding-top: 50px;
        }
        .row{
            margin-top:50px;
        }
    </style>

</head>

<body>

   <!-- Navigation bar 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container"> <!-- margin left/right auto -->
           
           <!-- Home Button 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

           <!-- Page Buttons 
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home">Home</a></li>
                </ul>
            </div>
            
        </div> <!-- End of container 
    </nav> <!-- End of Navigation bar -->

    <!-- Main -->
    <div class="container"> <!-- margin left/right auto -->
       
            <div class="col-md-2">
            <form class="form-signin" action="checklogin.php" method="post">

  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" value="<?php
echo $_COOKIE['remember_me']; ?>">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" value="<?php
echo $_COOKIE['remember_me']; ?>">
  </div>
<div class="checkbox">
          <label>
            <input type="checkbox" id="remember_me"> Remember me
          </label>
        </div>   

<input class="btn btn-default" type="submit" name="submit" value="Login">
                <h4>  Click here to <a href="register.php">SignUp</a> </h4>
</form></div>


</body>
</html>