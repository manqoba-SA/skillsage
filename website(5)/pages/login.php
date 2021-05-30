<!DOCTYPE html>
<html>
<head>
    <title>
        Welcome!
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login and registeration1.css">
    <!-- <link rel="stylesheet" href="css/responsive quires.css"> -->
</head>    
<body>
    <?php
    include_once('header-for-login-reg.php')
    ?>
    <!-- =================Login Box =================== -->
    <div class="register-box">
        <div class="left-box">
            <h1>Login</h1>
            <?php
                if(isset($_GET['error'])){
                    if ($_GET["error"] == "empty") {
                        echo "<h3>Please fill in all the forms😕</h3>";
                    }
                    else if($_GET["error"] == "wronglogin"){
                        echo "<h3>❗Wrong username or incorrect password. Please try again</h3>";
                    }
                }
                ?>
            <form action="../includes/login.inc.php" method="POST">
                <div class="register-input">
                    <input id="name" name="username" class="input-text js-input" type="text" placeholder="Username">
                </div>
                <div  class="register-input">
                    <input id="password" name="password" class="input-text js-input" type="password" placeholder="Password">
                </div>
                <div class="register-input">
                    <input type="submit" name="submit" value="Login">
                    <small class="question"><a href="register.php">don't have an account?</a></small>
                </div>      
            </form>
        </div>
        <div class="right-box-login">
            <img src="">
        </div>
    </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/main.js"></script>
</body>   
</html>