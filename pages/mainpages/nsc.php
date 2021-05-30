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
    <div class="header-message-ncs">
        <div class="text-box">
            <h2>Have You Passed Matric?👌 Here Are Options Available for You to succed your dream</h2>
        </div>
    </div>
<?php
    require_once("../../includes/dbh.php");
?>
    <!-- Content -->
    <div class="category">
        <h2>Universities you might qualify for</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider responsive">
            <?php $results = $conn->query("SELECT * FROM universities"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>
                <li>
                    <div class="card-carousel">
                    <button class="show" value="<?php echo $row['university_id']; ?>">
                        <!-- <a href="https://www.uj.ac.za/"> -->
                        <div class="card-image-nsc">
                             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture_logo']); ?>" /> 
                        </div>
                        <h3 id="name<?php echo $row['university_id']; ?>"> <?php echo $row["name"]; ?> </h3>
                        
                        <p><?php echo $row["intro"]; ?>
                            <br>
                          Contact:<br>
                          <small>Tel: <?php echo $row["contact_no"]; ?><br> 
                            e-mail: <?php echo $row["email"]; ?>
                            <br>
                            Applications: <span id="applications<?php echo $row['university_id']; ?>"><?php echo $row["application"]; ?></span></small>
                        </p>
                        <small class="hidden" id="long-intro<?php echo $row['university_id']; ?>"><?php echo $row["long_intro"]; ?></small>
                        <small class="hidden" id="signature<?php echo $row['university_id']; ?>"><?php echo $row["signature"]; ?></small>
                        <small class="hidden" id="website<?php echo $row['university_id']; ?>"><?php echo $row["website"]; ?></small>     
                </button>
                </div>
                </li>
                <?php 
                }?>
            </ul>      
        </div>
    </div>

        <!-- Content -->
        <div class="category">
        <h2>Collegies you might qualify for</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider">
            <?php $results = $conn->query("SELECT * FROM colleges"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>
                <li>
                    <div class="card-carousel">
                    <button class="show" value="<?php echo $row['id']; ?>">
                        <!-- <a href="https://www.uj.ac.za/"> -->
                        <div class="card-image-nsc">
                             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']); ?>" /> 
                        </div>
                        <h3 id="name<?php echo $row['id']; ?>"> <?php echo $row["name"]; ?> </h3>
                        
                        <p><?php echo $row["intro"]; ?>
                            <br>
                          Contact:<br>
                          <small>Tel: <?php echo $row["contact_no"]; ?><br> 
                            e-mail: <?php echo $row["email"]; ?>
                            <br>
                            Applications: <span id="applications<?php echo $row['id']; ?>"><?php echo $row["application"]; ?></span></small>
                        </p>
                        <small class="hidden" id="long-intro<?php echo $row['id']; ?>"><?php echo $row["long_intro"]; ?></small>
                        <small class="hidden" id="signature<?php echo $row['id']; ?>"><?php echo $row["signature"]; ?></small>
                        <small class="hidden" id="website<?php echo $row['id']; ?>"><?php echo $row["website"]; ?></small>     
                </button>
                </div>
                </li>
                <?php 
                }?>
            </ul>      
        </div>
    </div>

    <div class="header-message-ncs">
        <div class="text-box">
            <h2>There are other opportunities for matric level other than Tetiary institutions.</h2>
        </div>
    </div>
    <!-- Content -->
    <div class="category">
        <h2>Services that can help you to excel as you have matric</h2>
        <div class="item">
            <ul id="content-slider" class="light-slider">
            <?php $results = $conn->query("SELECT * FROM colleges"); ?>
                <?php while($row = $results->fetch_assoc()){ ?>
                <li>
                    <div class="card-carousel">
                    <button class="show" value="<?php echo $row['id']; ?>">
                        <!-- <a href="https://www.uj.ac.za/"> -->
                        <div class="card-image-nsc">
                             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']); ?>" /> 
                        </div>
                        <h3 id="name<?php echo $row['id']; ?>"> <?php echo $row["name"]; ?> </h3>
                        
                        <p><?php echo $row["intro"]; ?>
                            <br>
                          Contact:<br>
                          <small>Tel: <?php echo $row["contact_no"]; ?><br> 
                            e-mail: <?php echo $row["email"]; ?>
                            <br>
                            Applications: <span id="applications<?php echo $row['id']; ?>"><?php echo $row["application"]; ?></span></small>
                        </p>
                        <small class="hidden" id="long-intro<?php echo $row['id']; ?>"><?php echo $row["long_intro"]; ?></small>
                        <small class="hidden" id="signature<?php echo $row['id']; ?>"><?php echo $row["signature"]; ?></small>
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
        <div id="notification-modal" class="mymodal myhidden">
        <div class="modal-content">
            <span class="cardexit">&times;</span>
            <div class="single-item">
                <div class="right-side">
                    <h1 id="vname"></h1>
                    <h3 id="validate-signature"></h3>
                    <small>Applications: <span id="applications-validate"></span></small>
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

