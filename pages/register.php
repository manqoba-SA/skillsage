<!DOCTYPE html>
<html>
<head>
    <title>
        Register
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login and registeration1.css"> -->
  <link rel="stylesheet" href="../css/responsive quires.css">
</head>    
<body>
<?php
    include_once('header-for-login-reg.php')
?>
    <!-- =================Register Box =================== -->  
    <div class="register-box">
        <div class="left-box">
            <h1>Register</h1>
            <?php
                if(isset($_GET['error'])){
                    if($_GET["error"] == "pws-do-not-match"){
                        echo "<h3>Password don't match😕. Please try again</h3>";
                    }
                    else if($_GET["error"] == "username_taken"){
                        echo "<h3>Username Already taken</h3>";
                    }
                }
            ?> 

            <?php
                if(isset($_GET['error1'])){
                    if ($_GET["error1"] == "empty") {
                        echo "<h3>Please fill in all the forms😕</h3>";
                    }
                }
            ?> 

            <?php
                if(isset($_GET['message'])){
                    if ($_GET["message"] == "validate_first") {
                        echo "<h3>Please Register if you already have an account please log in🤘</h3>";
                    }
                }
            ?>
            
            <form action="../includes/register.inc.php" method="POST">
                <div class="register-input"> 
                    <input id="username" name="username"
                    <?php if(isset($_GET['error'])){
                    $username = $_GET['username']; 
                    echo "value='$username'";}?> class="input-text js-input" type="text"  placeholder="Username">
                    <small id="message">Your username should start with @ and followed by any character or number</small>
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET["error"] == "invalidusername"){
                                echo "<small class='error-message'>Invalid Username ☹☹. Please enter valid username</small>";
                            }
                        }
                    ?> 
                </div>
                <div class="register-input">
                    <input name="email" id="email" class="input-text js-input" type="text" placeholder="Email Address"
                    <?php if(isset($_GET['error'])){
                    $email = $_GET['email']; 
                    echo "value='$email'";}?>>
                    <small id="message-email">Should be a valid email eg. name@gami.com</small>
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET["error"] == "invalidemail"){
                                echo "<small class='error-message'>Invalid Email ☹☹. Please enter valid email</small>";
                            }
                        }
                    ?>
                </div>
                <div  class="register-input">
                    <input id="pws" name="password" class="input-text js-input" type="password" placeholder="Password"
                    <?php if(isset($_GET['error'])){
                    $password = $_GET['password']; 
                    echo "value='$password'";}?>>
                    <small id="message-pws">
                        <h4>Password should contain:</h4>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="names" class="invalid">Minimum <b>10 characters</b></p>
                    </small>
                </div>
                <div  class="register-input">
                    <input id="name" name="rpassword" class="input-text js-input" type="password" placeholder="Repeat Password"
                    <?php if(isset($_GET['error'])){
                    $rpassword = $_GET['rpassword']; 
                    echo "value='$rpassword'";}?>>
                </div>
                <div class="register-input">
                    <input type="submit" name="submit" value="Sign Up">
                    <small class="question"><a href="login.php">have an account?</a></small>
                </div>   
            </form>     
        </div>
        <div class="right-box">
        </div>
    </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/form-validation.js"></script>
</body>   
</html>