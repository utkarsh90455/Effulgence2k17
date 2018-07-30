<?php
include_once 'dbConnection.php';

$email = $_POST['email'];
$password = $_POST['pass'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password); 
$result = mysqli_query($con,"SELECT u_id FROM users WHERE (email = '$email' and akey='active') and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$uid = $row['u_id'];
}
if(isset($_POST['mobile'])&&$_POST['mobile']=="android"){
echo $uid;
}
else{
session_start();
$_SESSION["u_id"] = $uid;
header("location:user_profile.php");
}
}
else
header("location:log.php?q=Wrong Username or Password");
//echo "Wrong Username or Password";	
?>