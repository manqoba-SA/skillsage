<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    require_once("dbh.php");
    require_once("processes.php");

    if(emptyInputSignUp($username,$email,$password,$rpassword) !== false){
        header("Location: ../pages/register.php?error1=empty");
        exit();
    }
    if(InvalidUsername($username) !== false){
        header("Location: ../pages/register.php?error=invalidusername&username=$username&email=$email&password=$password&rpassword=$rpassword");
        exit();
    }
    if(InvalidEmail($email) !== false){
        header("Location: ../pages/register.php?error=invalidemail&username=$username&email=$email&password=$password&rpassword=$rpassword");
        exit();
    }
    if(pwsMatch($password, $rpassword) !== false){
        header("Location: ../pages/register.php?error=pws-do-not-match&username=$username&email=$email&password=$password&rpassword=$rpassword");
        exit();
    }
    if(UsernameExist($conn, $username) !== false){
        header("Location: ../pages/register.php?error=username_taken&username=$username&email=$email&password=$password&rpassword=$rpassword");
        exit();
    }

    createUser($conn, $username, $email, $password);
}
else{
    header("Location: ../pages/register.php");
}