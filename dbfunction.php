<?php
include 'dbConnection.php';
class dbfunction
{
	public function reg_cam($name,$email,$contact,$college,$year,$position_in_college,$work_experience,$Why,$gender,$fb)
	{
		include 'dbConnection.php';
		$res=mysqli_query($con,"INSERT INTO camp_reg (name,email,contact,college,year,position_in_college,work_experience,Why,gender,fb_id) VALUES ('$name','$email','$contact','$college','$year','$position_in_college','$work_experience','$Why','$gender','$fb')") or die(mysqli_error($con));
		return $res;
	}
	public function anbti_reg($name,$gender,$college,$contact,$email,$year,$fb)
	{	
		include 'dbConnection.php';
		$result= mysqli_query($con,"SELECT * FROM reg WHERE fb_id = '$fb'") or die('Error in chking'.mysqli_error($con));
		$count=mysqli_num_rows($result);
		if($count==0)
			$res=mysqli_query($con,"INSERT INTO reg (name,gender,college,contact,email,year,fb_id) VALUES ('$name','$gender','$college','$contact','$email','$year','$fb')") or die(mysqli_error($con));
		return $res;
	}
	public function eve_reg($fb,$cat,$eve)
	{	
		include 'dbConnection.php';
		$res=mysqli_query($con,"INSERT INTO event_reg (user_id,category,event_name) VALUES ('$fb','$cat','$eve')") or die(mysqli_error($con));
		return $res;
	}
	public function check_reg($fb,$cat,$eve)
	{	
		include 'dbConnection.php';
		$result= mysqli_query($con,"SELECT * FROM event_reg WHERE user_id = '$fb' AND category='$cat' AND event_name='$eve'") or die('Error in chking'.mysqli_error($con));
		$count=mysqli_num_rows($result);
		if($count==0)
			return false;
		else
			return true;
	}
	public function mail($email)
	{
		include 'dbConnection.php';
		$to=$email;
		$sub="Anubhuti Campus Ambassador Program";
		$msg="Thanks for your Interest , we'll contact you as soon as possible.";
		$headers="From: Anubhuti Team.\n";
		echo $msg;
		mail($to,$sub,$msg,$headers);
	}
}
?>