<html>
<head>
<title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/login and registeration1.css">
    <link rel="stylesheet" href="../../../css/responsive quires.css">
    <link rel="stylesheet" href="../../../css/admin.css">
</head>
<body>
<div class="container">
    <h3>Add Blogs</h3>
    <form action="blogs.php" method="post" enctype="multipart/form-data">
        <div class="register-input">
            <input id="username" type="file" name="image" class="input-text js-input" placeholder="image">
        </div>
        <div class="register-input">
            <input id="username" type="text" name="topic" class="input-text js-input" placeholder="topic">
        </div>
        <div class="register-input">
            <input id="username" type="date" name="date" class="input-text js-input" placeholder="date">
        </div
        ><div class="register-input">
            <input id="username" type="text" name="paragraph" class="input-text js-input" placeholder="paragraph">
        </div>
        <div class="register-input">
            <input id="username" type="text" name="link" class="input-text js-input" placeholder="link">
        </div>
        <div class="register-input">
            <input type="submit" name="submit" value="Upload">
        </div>
        
    </form>
</div>
<?php 
// Include the database configuration file  
require_once("../../../includes/dbh.php");

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $date = $_POST["date"];
            $topic = $_POST["topic"];
            $paragraph = $_POST["paragraph"];
            $link = $_POST["link"];
            

            // Insert image content into database 
            $insert = $conn->query("INSERT INTO blogs (picture, date_posted, topic, paragraph, link) VALUES ('$imgContent', '$date', '$topic', '$paragraph', '$link')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try againJNYN."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
</body>    
<html>

