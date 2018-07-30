<?php 
session_start();
session_destroy();
echo $ref = $_GET['q'];
header("location:http:index.php");
?>