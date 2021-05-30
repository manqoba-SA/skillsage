<!DOCTYPE html>
<html>
<head>
    <title>
        Welcome!
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login and registeration1.css">
  <link rel="stylesheet" href="../../css/responsive quires.css">
</head>    
<body>
    <!-- =================Register Box =================== -->  
    <div class="register-box">
        <div class="left-box">
            <h1>Login Admin</h1>
            <form action="../../includes/admin.login.inc.php" method="POST">
                <div class="register-input">
                    <input id="username" name="username" class="input-text js-input" type="text" placeholder="Username">
                </div>
                <div class="register-input">
                    <input name="password" id="email" class="input-text js-input" type="password" placeholder="Password">
                </div>
                <div class="register-input">
                    <input type="submit" name="submit" value="Login">
                    <small class="question"><a href="login.php">have Problems? Click to contact IT guy😎</a></small>
                </div>   
            </form>     
        </div>
    </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/form-validation.js"></script>
</body>   
</html>