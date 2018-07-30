<?php
session_start();
ob_start();
echo 'CHECK';
include '../dbConnection.php';
echo 'CHECK2';
//$obj=new dbfunction();dd
if((isset($_POST['submit']))&&(isset($_SESSION['u_id'])))
{
include_once '../dbConnection.php';
$uid=$_SESSION['u_id'];
$name = $_POST['name'];

$name= ucwords(strtolower($name));
$email = $_POST['email']; 
$college = $_POST['college'];
$gender = $_POST['gender'];
$mobile = $_POST['contact']; 
$workshop = $_POST['workshop'];
$name = mysqli_real_escape_string($con,$name);
//$full_name = addslashes($full_name);
//$full_name = ucwords(strtolower($full_name));
$email = mysqli_real_escape_string($con,$email);
//$email = addslashes($email);
$college = mysqli_real_escape_string($con,$college);
$year=mysqli_real_escape_string($con,$_POST['year']);
$roll=mysqli_real_escape_string($con,$_POST['rollno']);
//$college = addslashes($college);
$mobile = mysqli_real_escape_string($con,$mobile);
//$mobile = addslashes($mobile);
$position = mysqli_real_escape_string($con,$workshop); 

//$password = addslashes($password); 

echo "p";
echo "$uid";
$q3=mysqli_query($con," INSERT INTO work_reg (u_id,name,email,college,gender,contact,workshop,year,rollno)
VALUES  ('$uid','$name' , '$email' , '$college' , '$gender', '$mobile', '$position','$year','$roll')" ) or die().mysql_errno() ;
if($q3){

if($workshop=='3D Printing')
{
header("location:http://effgknit.com/shop.php?q=3d&&q1=temp");
}
else if($workshop=='Automobile & IC Engine')
{
header("location:http://effgknit.com/shop.php?q=ic&&q1=temp");
}
else if($workshop==' Gesture Based Robotics')
{
header("location:http://effgknit.com/shop.php?q=ges&&q1=temp");
}
else if($workshop=='Animatronics')
{
header("location:http://effgknit.com/shop.php?q=ani&&q1=temp");
}
else if($workshop=='Cloud Computing')
{
header("location:http://effgknit.com/shop.php?q=cld&&q1=temp");
}
else if($workshop=='Sixth sense Robotics using DIP')
{
header("location:http://effgknit.com/shop.php?q=six&&q1=temp");
}
else if($workshop=='Catia(AutoCad/Cam)')
{
header("location:http://effgknit.com/shop.php?q=cat&&q1=temp");
}




}

}