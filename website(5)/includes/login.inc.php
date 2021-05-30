<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    require_once("dbh.php");
    require_once("processes.php");

    if(emptyInputLogin($username,$password) !== false){
        header("Location: ../pages/login.php?error=empty");
        exit();
    }

    loginUser($conn, $username, $password);

}
else{
    header("Location: ../pages/login.php");
}