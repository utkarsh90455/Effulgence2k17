<?php
$id=$_GET["kick"];
    session_start();
    if(!isset($_SESSION["admin"])) {
        header("Location: adminlogin.php");
    }
include 'includes/connect.php';
    $conn->query("UPDATE usersda SET status = '0' WHERE fbid= '$id'")or die("error8");
    header("Location: kleaderboard.php");
?>
