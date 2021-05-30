<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        blog news
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login and registeration.css">
    <link rel="stylesheet" href="../../css/responsive quires.css">
</head>    
<body>
<?php
    if (isset($_SESSION["username"])) {
        ?>
<?php
    include_once('header-for-main-page.php')
    ?>

    <section class="main-page-blog">
        <span><h1>Blog News</h1></span>
        <?php $results = $conn->query("SELECT * FROM blogs"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>

        <div class="header-message-blog">   
            <div class="header-blog-image">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']); ?>"/>
            </div>
            <div class="text-box-blog">
                <div class="blog-box-header">
                    <div class="date"><small><?php echo $row["date_posted"]; ?></small></div>
                    <h3 class="blog-header-text"><?php echo $row["topic"]; ?></h3>
                </div>
                <p><?php echo $row["paragraph"]; ?>
                    <br>
                    <a href="<?php echo $row['link']; ?>">Click Here For More Info.</a></p>
            </div>
        </div>
        <?php 
                }?>
        
        

    </section>
    <?php
    }
    else{
        header("Location: ../register.php?message=validate_first");
        exit();
    }
    ?>
    <!-- FOOTER -->
    <footer class="main-footer"><small><p>This website was made and maintained by BIT student
        <br>Contacts +27 654 005556 or email Skillshare@skills.com
    </p></small></footer>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>  
    <script src="../js/main.js"></script>
    <script src="../js/modal.js"></script>
</body>