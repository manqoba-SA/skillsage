<html>
<head>
<title>Add University</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!--Css styleshirt-->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login and registeration1.css"> 
    <link rel="stylesheet" href="../../css/responsive quires.css">
    <link rel="stylesheet" href="../../css/admin.css">
</head>
<body>
<div class="container">
    <h3>Add University</h3>
    <form action="university.php" method="post" enctype="multipart/form-data">

    <div class="register-input">
        <input id="username" type="file" name="image" class="input-text js-input" placeholder="image">
    </div>
    <div class="register-input">
        <input id="username" type="text" name="name" class="input-text js-input" placeholder="name">
    </div>
    <div class="register-input">
        <input id="username" type="text" name="contact" class="input-text js-input" placeholder="contact">
    </div
    ><div class="register-input">
        <input id="username" type="text" name="email" class="input-text js-input" placeholder="email">
    </div>
    <div class="register-input">
        <input id="username" type="text" name="application" class="input-text js-input" placeholder="application">
    </div>
    <div class="register-input">
        <input id="username" type="text" name="intro" class="input-text js-input" placeholder="intro">
    </div>
    <div class="register-input">
        <input id="username" type="text" name="signature" class="input-text js-input" placeholder="signature">
    </div>
    <div class="register-input">
        <input id="username"  type="text" name="long-intro" class="input-text js-input" placeholder="longintro">
    </div>
    <div class="register-input">
        <input id="username"  type="text" name="website" class="input-text js-input" placeholder="Website">
    </div>
    <div class="register-input">
        <input type="submit" name="submit" value="Add">
        <small class="question"><a href="login.php">Go BAck</a></small>
    </div>  
    </form>
</div>
<?php 
require_once("../../includes/dbh.php");
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $name = $_POST["name"];
            $contact = $_POST["contact"];
            $email = $_POST["email"];
            $application = $_POST["application"];
            $intro = $_POST["intro"];
            $signature = $_POST["signature"];
            $longintro = $_POST["long-intro"];
            $website = $_POST["website"];
            $insert = $conn->query("INSERT 
            INTO universities (name, picture_logo, contact_no, application, email, intro, signature, long_intro, website) VALUES 
            ('$name','$imgContent', '$contact', '$application', '$email', '$intro', '$signature', '$longintro', '$website')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "University and file uploaded successfully."; 
            }else{ 
                $statusMsg = "University  upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
echo $statusMsg; 
?>
</body>    
<html>

