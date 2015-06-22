<html>

<title>Registration Page</title>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
    </head>
<body>
    <div class="container"> <!-- margin left/right auto -->
       
            <div class="col-md-2">
                <h2>Register</h2>
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" id="username">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" id="password">
  </div>

<input class="btn btn-default" type="submit" name="signup" id="sign_up" value="Join">
</form></div>
    </div>
</body>
    <script type="text/javascript">
            $("#sign_up").click(function () {
            $.post("user_create.php", {
                username: $('#username').val(),
                password: $('#password').val()
            }, 
            function (result){
                console.log(result);
                close(eval(result));
                window.location.href="index.php";
            });
                    return false;
                
            });
        
    </script>
</html>
