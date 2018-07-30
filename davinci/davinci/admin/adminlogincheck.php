<?php
    $uid = $_POST["u_id"];
    $passwd = $_POST["pswd"];
    if($uid == 'davinci2k17' && $passwd == 'utkarsh@davinci2k17') {
        session_start();
        $_SESSION["admin"] = 1;
        header("Location: answerupload.php");
        
} else {
    header("Location: adminlogin.php");
}
?>