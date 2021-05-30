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
  <link rel="stylesheet" href="../../css/admin.css">
</head>    
<body>
<?php 
require_once("side.nav.php");
?>
    <div class="left">
    <h3>Table for Universities</h3>
    <?php require_once("../../includes/dbh.php");
    $results = $conn->query("SELECT * FROM universities"); ?>
        <table class="styled-table">
           
        
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>intro</th>
            <th>link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php while($row = $results->fetch_assoc()): ?>
        <tr>     
            <td><?php echo $row["university_id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["intro"]; ?></td>
            <td><?php echo $row["website"]; ?></td>
            <td>
                <div class="button-flex">
                    <div class="buttons"><a>Edit</a></div>
                    <div class="buttons"><a>Delete</a></div>
                </div>
                <!-- <button type="button" class="btn btn-success edit">Edit</button>
                <button type="button" class="btn btn-success edit">Delete</button> -->
            </td>
        </tr>
        <?php 
           endwhile;
        ?>
        
    </tbody>
    
</table>
<div class="add-button"><a href="university.php">Add University</a></div>

    </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/form-validation.js"></script>
</body>   
</html>