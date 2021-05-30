<?php
require_once("../../../includes/dbh.php");
if(isset($_GET["delete"])){
    $theID = $_GET['delete'];
    $conn->query("DELETE FROM blogs WHERE id=$theID");
    
}