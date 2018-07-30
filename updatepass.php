<?php
ob_start();
include_once 'dbConnection.php';
session_start();
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT password FROM users WHERE u_id='$uid'") or die ('DB Error');
	while($row = mysqli_fetch_array($query)) {
	$pass = $row['password'];
}
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$confirmpass = $_POST['confirmpass']; 

if($pass == $oldpass && $newpass == $confirmpass){
mysqli_query($con,"UPDATE users SET password='$newpass' WHERE u_id='$uid'")  or die ('DB Error');
header("location:user_profile.php?updatemessage=Password Updated");
}
else
{
echo "Passwords don't match!";
}
ob_end_flush();
?>
