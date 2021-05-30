<?php
session_start();
?>

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
    <link rel="stylesheet" href="../css/responsive quires.css">
</head>    
<body>
<div class="created-header">
    <div class="welcome-text">
        <?php
        $name = $_GET['name']; 
        if (isset($_SESSION["userID"])) {
            echo " <h1>Awez you have created an account💥🤘 <b>" .  $name . "</b></h1>";
        }
        ?>
       
        <p>
            Click explore to see the services.
        </p>
        <div class="header-button">
        <a href="mainpages/mainpage.php"><button class="register-button">Explore</button></a>
        <a href="pages/logout.php"><button class="login-button">Logout</button></a>
    </div>
    </div>   
</div>
<script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>  
    <script src="../js/main.js"></script>
    <script src="../js/modal.js"></script>
</body>
    
</html>