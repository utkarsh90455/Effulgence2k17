<?php
session_start();
ob_start();
echo 'CHECK';
include '../dbConnection.php';

//$obj=new dbfunction();
if(isset($_POST['gender']))
{
include_once '../dbConnection.php';
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$email = $_POST['email']; 
$college = $_POST['college'];
$gender = $_POST['gender'];
$mobile = $_POST['contact']; 
$position = $_POST['position_in_college'];
$work_experience=$_POST['work_experience'];
$Why=$_POST['Why'];
$name = mysqli_real_escape_string($con,$name);
//$full_name = addslashes($full_name);
//$full_name = ucwords(strtolower($full_name));
$email = mysqli_real_escape_string($con,$email);
//$email = addslashes($email);
$college = mysqli_real_escape_string($con,$college);
$year=mysqli_real_escape_string($con,$_POST['year']);
//$college = addslashes($college);
$mobile = mysqli_real_escape_string($con,$mobile);
//$mobile = addslashes($mobile);
$position = mysqli_real_escape_string($con,$position); 
$fbid=mysqli_real_escape_string($con,$_SESSION['id']);
//$password = addslashes($password); 
echo $fbid;
echo "p";
$q3=mysqli_query($con," INSERT INTO camp_reg (fb_id,name,email,college,gender,contact,position_in_college,work_experience,Why,year)
VALUES  ('$fbid', '$name' , '$email' , '$college' , '$gender', '$mobile', '$position','$work_experience','$Why','$year')" ) or die('Error'.mysqli_error($con));;
if($q3){

$result= mysqli_query($con,"SELECT * FROM usercamp WHERE id = '$fbid'");
	if(mysqli_affected_rows($con) == 1) {
		$q=mysqli_query($con,"UPDATE usercamp SET role=1 WHERE id='$fbid'") or die('Error in cap user role update'.mysqli_error($con));
		$_SESSION['cap']=true;
		echo 'done';
		header('Location:http://www.effgknit.com/cap/index.php?q1=temp');
	}
}

}