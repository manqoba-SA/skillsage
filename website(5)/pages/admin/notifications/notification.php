<!DOCTYPE html>
<html>
<head>
    <title>
        Welcome!
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/login and registeration1.css">
  <link rel="stylesheet" href="../../../css/responsive quires.css">
  <link rel="stylesheet" href="../../../css/admin.css">
</head>    
<body>
<?php 
require_once("../side.nav.php");
?>
    <div class="left">
    <h3>Table for Notifications</h3>
    <?php require_once("../../../includes/dbh.php");
    $results = $conn->query("SELECT * FROM notifications"); ?>
        <table class="styled-table">   
    <thead>
        <tr>
            <th>Date</th>
            <th>Link</th>
            <th>Paragraph</th>
            <th>Topic</th>
        </tr>
    </thead>
    <tbody>
    <?php while($row = $results->fetch_assoc()): ?>
        <tr>     
            <td><?php echo $row["date_posted"]; ?></td>
            <td><?php echo $row["link"]; ?></td>
            <td><?php echo $row["paragraph"]; ?></td>
            <td><?php echo $row["topic"]; ?></td>
            <td>
                <div class="button-flex">
                    <div class="buttons"><a>Edit</a></div>
                    <div class="buttons"><a>Delete</a></div>
                </div>
            </td>
        </tr>
        <?php 
           endwhile;
        ?> 
    </tbody>
</table>
<div class="add-button"><a href="notifications.php">Add Notification</a></div>
    </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/form-validation.js"></script>
</body>   
</html>