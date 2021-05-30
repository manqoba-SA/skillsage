<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    require_once("dbh.php");
    require_once("processes.php");

    if(emptyAdminInputLogin($username,$password) !== false){
        header("Location: ../pages/admin/admin-login.php?error=empty");
        exit();
    }

    loginAdminUser($conn, $username, $password);

}
else{
    header("Location: ../pages/login.php");
}