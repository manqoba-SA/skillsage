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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login and registeration1.css">
    <link rel="stylesheet" href="../../css/responsive quires.css">
</head>    
<body>
<?php
    if (isset($_SESSION["username"])) {
        ?>
<?php
    include_once('header-for-main-page.php')
    ?>
    <!-- ====================MAIN sECTION=================================== -->
    <section class="main-page">
        <div class="header-message">
            <div class="text-box">
                <p>Hello <?php echo $_SESSION["username"]?>🖐 Welcome to Skillshare platform here is your portal
                   where you will get all our services. Our aim is to provide as possible opportunities and information for
                   you here in the you can choose the best possible category you might belong too so you will get 
                   the infomation and opportunities for you as possible, be free and enjoy our platform.
                </p>
            </div>
        </div>
         <!-- ==================================================CARDS FOR OPTIONS====================================================== -->
        <div class="cards">
            <div class="card">
                <a href="#">
                <div class="card-image">
                    <img src="../../images/grade9 V.jpg" alt="grade9">
                </div>
                <h3>Grade 9</h3>
                <p>You who have completed Grade 9 and and has not continued</p>
            </a>
            </div>
            <div class="card">
                <a href="#">
                <div class="card-image">
                    <img src="../../images/grade10.jpg">
                </div>
                <h3>Grade 10-Grade12</h3>
                <p>You who have completed Grade 10 to 12 and but did not pass Grade 12</p>
            </a>
            </div>
            <div class="card">
                <a href="nsc.php">
                <div class="card-image">
                    <img src="../../images/ncs.jpg" alt="grade12">
                </div>
                <h3>Have NSC</h3>
                <p>You Have completed matric and obtained NCS/IEB</p>
            </a>
            </div>
            <div class="card">
                <a href="#">
                <div class="card-image">
                    <img src="../../images/business.JPG">
                </div>
                <h3>For Talent</h3>
                <p>Have nothing but only your gifted Talent? We got you here with more oppotunities🤘</p>
            </a>
            </div>
            <div class="card">
                <a href="#">
                <div class="card-image">
                    <img src="../../images/unemployed.JPG">
                </div>
                <h3>Unemployed</h3>
                <p>Are looking for a job ? 😉Awez we got you here</p>
            </a>
            </div>
            <div class="card">
                <a href="#">
                <div class="card-image">
                    <img src="../../images/business2.JPG">
                </div>
                <h3>Up fo Business</h3>
                <p>Have a dream or you need to start business?🤑 Info and opportunities here will help</p>
            </a>
            </div>
        </div>
        <!-- ==================================================CARDS FOR OPTIONS====================================================== -->
    </section>
    <!-- ====================MAIN sECTION=================================== -->
    <?php
    }
    else{
        header("Location: register.php?message=validate_first");
        exit();
    }
    ?>
   

    <!-- FOOTER -->
    <footer class="main-footer"><small><p>This website was made and maintained by BIT student
        <br>Contacts +27 654 005556 or email Skillshare@skills.com
    </p></small></footer>
    <script src="../../js/jquery-2.1.4.min.js"></script>
    <script src="../../js/jquery.waypoints.min.js"></script>  
    <script src="../../js/main.js"></script>
    <script src="../../js/modal.js"></script>
</body>
    
</html>