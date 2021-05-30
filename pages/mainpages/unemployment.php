<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Unemployment
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
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->  
</head>    
<body>
<?php
    if (isset($_SESSION["username"])) {
        ?>
<?php
    include_once('header-for-main-page.php')
    ?>
    <div class="header-message-ncs unemployment">
        <div class="text-box">
            <h2>Unemployment can be caused by lack of skills, poor job hunting, and one type of job demanded by number of people,
                We are here to guide you based on your position and to give you best opportunities in terms of job.
            </h2>
        </div>
    </div>
<?php
    require_once("../../includes/dbh.php");
?>
    
   <!-- First Category Slidings -->
   <div class="category">
        <h2>Services and opportunities for job hunting</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider responsive">
            <?php $results = $conn->query("SELECT * FROM opportunities_for_job_hunting"); ?>
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

    
    <div class="header-message-ncs unemployment2">
        <div class="text-box">
            <h2>"We need to give importance to skill development because this way we can end unemployment." - Narendza</h2>
        </div>
    </div>
    
    
    <!-- Content -->
    <!-- First Category Slidings -->
    <div class="category">
        <h2>Platforms and Courses to make you stand out in the job market</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider responsive">
            <?php $results = $conn->query("SELECT * FROM platforms_courses_for_job_hunting"); ?>
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

