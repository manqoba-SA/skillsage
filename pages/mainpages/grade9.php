<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Grade 9?
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login and registeration1.css">
    <link rel="stylesheet" href="../../css/ncs.css">
    <link rel="stylesheet" href="../../css/responsive quires.css">
    <!-- JQuery Light Slider -->
    <link type="text/css" rel="stylesheet" href="../../css/lightslider.css" />
</head>    
<body>
<?php
    if (isset($_SESSION["username"])) {
        ?>
<?php
    include_once('header-for-main-page.php')
    ?>
    <div class="header-message-ncs grade9">
        <div class="text-box">
            <h2>We believe the say that education is not for everyone and here we have all the opportunities
                for your to reach your dream✊.
            </h2>
        </div>
    </div>
<?php
    require_once("../../includes/dbh.php");
?>
    <!-- Content -->
    <div class="category">
        <h2>Best suitable opportunities for your level</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider responsive">
            <?php $results = $conn->query("SELECT * FROM suitableopportunities"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>
                <li>
                    <div class="card-carousel">
                    <button class="showgrade" value="<?php echo $row['id']; ?>">
                        <div class="card-image-nsc">
                             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture_logo']); ?>" /> 
                        </div>
                        <h3 id="name<?php echo $row['id']; ?>"> <?php echo $row["name"]; ?> </h3>
                        
                        <p><?php echo $row["intro"]; ?>
                        </p>
                        <small class="hidden" id="long-intro<?php echo $row['id']; ?>"><?php echo $row["long_intro"]; ?></small>
                        <small class="hidden" id="signature<?php echo $row['id']; ?>"><?php echo $row["heading"]; ?></small>
                        <small class="hidden" id="website<?php echo $row['id']; ?>"><?php echo $row["website"]; ?></small>     
                </button>
                </div>
                </li>
                <?php 
                }?>
            </ul>      
        </div>
    </div>

    <div class="header-message-ncs grade9-2">
        <div class="text-box">
            <h2>“It doesn’t matter how slow you go as long as you don’t stop.” –Confucius
            </h2>
        </div>
    </div>

    <!-- Second Category button -->
    <div class="category">
        <h2>Best suitable opportunities for your level in terms of your strength skills</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider responsive">
            <?php $results = $conn->query("SELECT * FROM grade_9_opportunities_strength"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>
                <li>
                    <div class="card-carousel">
                    <button class="showgrade" value="<?php echo $row['id']; ?>">
                        <div class="card-image-nsc">
                             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture_logo']); ?>" /> 
                        </div>
                        <h3 id="name<?php echo $row['id']; ?>"> <?php echo $row["name"]; ?> </h3>
                        
                        <p><?php echo $row["intro"]; ?>
                        </p>
                        <small class="hidden" id="long-intro<?php echo $row['id']; ?>"><?php echo $row["long_intro"]; ?></small>
                        <small class="hidden" id="signature<?php echo $row['id']; ?>"><?php echo $row["heading"]; ?></small>
                        <small class="hidden" id="website<?php echo $row['id']; ?>"><?php echo $row["website"]; ?></small>     
                </button>
                </div>
                </li>
                <?php 
                }?>
            </ul>      
        </div>
    </div>

                
        <!-- single item Modal -->
        <div id="notification-modal" class="grademodal myhiddenG">
        <div class="modal-content">
            <span class="gradeexit">&times;</span>
            <div class="single-item">
                <div class="right-side">
                    <h1 id="vname"></h1>
                    <h3 id="validate-signature"></h3>
                    <p id="long-introv"> </p>       
                </div>
                <div id="link" class="website-link"></div>
            </div>
        </div>
    </div>


    
    <?php
    }
    else{
        header("Location: register.php?message=validate_first");
        exit();
    }
    ?>
    
    <script src="../../js/jquery-2.1.4.min.js"></script>
    <script src="../../js/jquery.waypoints.min.js"></script>
    <script src="../../js/modal.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/lightslider.js"></script>
    <script src="../../js/lightslide.settings.js">   
   </script>
</body>
    
</html>

