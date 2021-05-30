<html>
<head>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/login and registeration1.css"> 
    <link rel="stylesheet" href="../../../css/responsive quires.css">
    <link rel="stylesheet" href="../../../css/admin.css">
</head>
<body>
    <div class="container">
    <h3>Add Notification</h3>
        <form action="notifications.php" method="post">
        <div class="register-input">
            <label for="date">Date</label><input type="date" name="date"/> <br/>
        </div>
        <div class="register-input">
            <label>topic</label><input type="text" name="topic" />
        </div>
        <div class="register-input">
            <label>paragraph</label><input type="text" name="paragraph" />  <br/> 
        </div>
        <div class="register-input">
            <label>footer</label><input type="text" name="link" />  <br/> 
        </div>
        <div class="register-input">
            <input type="submit" value="Add" name="submit"/>
            <small class="question"><a href="notification.php">Go BAck</a></small>
        </div>
        </form>
    </div>
    <?php 
    require_once("../../../includes/dbh.php");

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
            $date = $_POST["date"];
            $name = $_POST["topic"];
            $paragraph = $_POST["paragraph"];
            $link = $_POST["link"];
            

            // Insert image content into database 
            $insert = $conn->query("INSERT 
            INTO notifications (date_posted, topic, paragraph, link) VALUES 
            ('$date','$name', '$paragraph', '$link')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try againJNYN."; 
            }  
}
echo $statusMsg; 
?>
        
        
</body>



</html>