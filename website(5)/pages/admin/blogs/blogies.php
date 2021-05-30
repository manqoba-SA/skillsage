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
    <div class="right-navbar">
        <h3>Administration</h3>
        <ul class="links">
        <h4>Manage Users</h4>
            <li>
            <a href="admin-page.php">Users</a>
            </li>
            <h4>Manage Updates</h4>
            <li>
                <a href="blogies.php">Blogs</a>
            </li>
            <li>
                <a href="notification.php">Notifications</a>
            </li>
            <h4>Manage Schools</h4>
            <li>
                <a href="Universities.php">Universities</a>
            </li>
            <li>
                <a href="users.html">Collegies</a>
            </li>

        </ul>
    </div>
    <div class="navbar">
    <ul class="links-for-navbar">
            <li>
                <a href="admin-page.php">Home</a>
            </li>
            <li>
                <a href="blogies.php">Blogs</a>
            </li>
            <li>
                <a href="notifications/notification.php">Notifications</a>
            </li>
            <li>
                <a href="users.html">Available Jobs</a>
            </li>
            <li>
                <a href="users.html">other databases</a>
            </li>
    </div>
    <div class="left">
    <h3>Table for Blogs</h3>
    <?php require_once("../../../includes/dbh.php");
    $results = $conn->query("SELECT * FROM blogs"); ?>
    <table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>date posted</th>
            <th>Topic</th>
            <th>Paragraph</th>
            <th>link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php while($row = $results->fetch_assoc()): ?>
        <tr>     
            <td><?php echo $row["blog_ID"]; ?></td>
            <td><?php echo $row["date_posted"]; ?></td>
            <td><?php echo $row["topic"]; ?></td>
            <td><?php echo $row["paragraph"]; ?></td>
            <td><?php echo $row["link"]; ?></td>
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
<div class="add-button"><a href="blogs.php">Add Blog</a></div>

    </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/form-validation.js"></script>
</body>   
</html>