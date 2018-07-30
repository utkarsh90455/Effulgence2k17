<?php
session_start();
ob_start();
echo 'CHECK';
include '../dbConnection.php';

//$obj=new dbfunction();
if(isset($_POST['gender']))
{
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$college=mysqli_real_escape_string($con,$_POST['college']);
$year=mysqli_real_escape_string($con,$_POST['year']);
$position_in_college=mysqli_real_escape_string($con,$_POST['position_in_college']);
$work_experience=mysqli_real_escape_string($con,$_POST['work_experience']);
$Why=mysqli_real_escape_string($con,$_POST['Why']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
$fbid=$_SESSION['id'];

$result= mysqli_query($con,"SELECT * FROM usercamp WHERE id = '$fbid' AND role=0") or die('Error in chking'.mysqli_error($con));
$count=mysqli_num_rows($result);
echo "here";
if($count==1)
{	
	//$code=$obj->mail($email);
	//$res_register=$obj->reg_cam($name,$email,$contact,$college,$year,$position_in_college,$work_experience,$Why,$gender,$_SESSION['id']);
$res=mysqli_query($con,"INSERT INTO camp_reg (name,email,contact,college,year,position_in_college,work_experience,Why,gender,fb_id) VALUES ('$name','$email','$contact','$college','$year','$position_in_college','$work_experience','$Why','$gender','$_SESSION['id']')") or die(mysqli_error($con));
		
	//$res_register=$obj->anbti_reg($name,$gender,$college,$contact,$email,$year,$_SESSION['id']);
	echo "done";
	// Updating User role
	$result= mysqli_query($con,"SELECT * FROM usercamp WHERE id = '$fbid'");
	if(mysqli_affected_rows($con) == 1) {
		$q=mysqli_query($con,"UPDATE usercamp SET role=1 WHERE id='$fbid'") or die('Error in cap user role update'.mysqli_error($con));
		$_SESSION['cap']=true;
		echo 'done';
		header('Location:http://www.effgknit.com/cap/index.php?q1=temp');
	}
	//Updated
	//<!-- mail for CAP-->
	
     
	//<!-- mail for CAP end -->
	header('Location:http://www.effgknit.com/cap/index.php?q1=temp');
}
else
{
echo $count."not done";
header('Location:http://www.effgknit.com/cap/index.php?q1=temp');
}
header('Location:http://www.effgknit.com/cap/index.php?q1=temp');
}

header('Location:http://www.effgknit.com/cap/index.php?q1=temp');
mysqli_close($con);
?>