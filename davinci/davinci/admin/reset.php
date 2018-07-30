<?php
    session_start();
    if(!isset($_SESSION["admin"])) {
        header("Location: adminlogin.php");
    }
include 'includes/connect.php';
    $conn->query("UPDATE usersda set level=1 where fbid='742333302564740'")or die("error8");
    echo('done');
?>
