    <!-- ==================================================NAVBAR====================================================== -->
    
        <nav>
        <div class="main-header-nav">
            <div class=logo>
                <img src="../../images/logo.png" width="200" height="50px"> 
            </div>
            <div class="nav-lists">
                <ul class="list-nav left-nav">
                    <li><a href="mainpage.php">Home</a></li>
                    <li><a href="blog.php">Our Blog</a></li>
                    <li><a href="blog.html">Join TelegramGroup</a></li>
                    <li><a href="#"><?php echo $_SESSION["username"]?>
                    </a></li>
                    <li><a href="../../includes/logout.inc.php">Logout</a></li>
                </ul>
            </div>
            <button class="show-modal">Notifications</button>
            <div class="burger-menu">
                <div class="manu-line1"></div>
                <div class="manu-line2"></div>
                <div class="manu-line3"></div>
            </div>
            
        </div>      
    </nav>
    <!-- ==================================================NAVBAR====================================================== -->

    <!-- ====================NOTIFICATION MODAL============================ -->
    <?php
    require_once("../../includes/dbh.php");
?>
    <div id="notification-modal" class="modal hidden">
        <div class="modal-content">
            <span class="exit">&times;</span>
            <h2>Notifications</h2>
            <?php $results = $conn->query("SELECT * FROM notifications"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>
            <div class="single-notification">
                <h3><?php echo $row["topic"]; ?></h3>
                <small><?php echo $row["date_posted"]; ?></small>
                <p><?php echo $row["paragraph"]; ?></p>
                <a href="<?php echo $row["link"]; ?>">Click for more</a>
            </div>
            <?php 
                }?>
        </div>
    </div>
    <!-- ====================NOTIFICATION MODAL============================ -->