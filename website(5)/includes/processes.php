<?php
function emptyInputSignUp($username,$email,$password,$rpassword){
    $results;
    if(empty($username) || empty($email) || empty($password) || empty($rpassword)){
        $results = true;
    }
    else{
        $results = false;
    }
    return $results;
}

function InvalidUsername($username){
    $results;
    // Checks if the username starts with @ and follows with any char or number
    if(!preg_match("/^@{1}[a-zA-Z0-9]*$/", $username)){
        $results = true;
    }
    else{
        $results = false;
    }
    return $results;
}

function InvalidEmail($email){
    $results;
    // Checks if the emails if is valid
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
        $results = true;
    }
    else{
        $results = false;
    }
    return $results;
}

function pwsMatch($password, $rpassword){
    $results;
    // Checks if the password are marching
    if($password !== $rpassword){
        $results = true;
    }
    else{
        $results = false;
    }
    return $results;
}

function UsernameExist($conn, $username){
    $sqlQuery = "SELECT * FROM users WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sqlQuery)){
        header("Location: ../pages/register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $theresults = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($theresults)){
        return $row;
    }
    else{
        $results =false;
        return $results;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $username, $email, $password){
    $sqlQuery = "INSERT INTO users (userName, userEmail, userPWD) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sqlQuery)){
        header("Location: ../pages/register.php?error=stmtfailed");
        exit();
    }
    $hashedPWS = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPWS);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $userExist =  UsernameExist($conn, $username);
    session_start();
    $_SESSION["userID"] = $userExist["userID"];
    $_SESSION["username"] = $userExist["userName"];
    header("Location: ../pages/account-created.php?signin=sucess&name=$username");
    
}


function emptyInputLogin($username,$password){
    $results;
    if(empty($username) || empty($password)){
        $results = true;
    }
    else{
        $results = false;
    }
    return $results;
}

function loginUser($conn, $username, $password){
    $userExist =  UsernameExist($conn, $username);
    if($userExist === false){
        header("Location: ../pages/login.php?error=wronglogin");
        exit();
    }
    $pwsHashed = $userExist["userPWD"];
    $validate = password_verify($password, $pwsHashed);
    if($validate === false){
        header("Location: ../pages/login.php?error=wronglogin");
        exit();
    }
    else if($validate === true){
        session_start();
        $_SESSION["userID"] = $userExist["userID"];
        $_SESSION["username"] = $userExist["userName"];
        header("Location: ../pages/mainpages/mainpage.php");
    }
}


// Admin Login
function AdminUsernameExist($conn, $username){
    $sqlQuery = "SELECT * FROM users WHERE userName = ? AND admin = 1;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sqlQuery)){
        header("Location: ../pages/register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $theresults = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($theresults)){
        return $row;
    }
    else{
        $results =false;
        return $results;
    }
    mysqli_stmt_close($stmt);
}

function emptyAdminInputLogin($username,$password){
    $results;
    if(empty($username) || empty($password)){
        $results = true;
    }
    else{
        $results = false;
    }
    return $results;
}

function loginAdminUser($conn, $username, $password){
    $userExist =  AdminUsernameExist($conn, $username);
    if($userExist === false){
        header("Location: ../pages/admin/admin-login.php?error=wronglogin");
        exit();
    }
    session_start();
    $_SESSION["userID"] = $userExist["userID"];
    $_SESSION["username"] = $userExist["userName"];
    header("Location: ../pages/admin/admin-page.php");
}

