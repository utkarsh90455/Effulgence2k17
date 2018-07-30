<?php

if (isset($_POST['Submit'])) {
ob_start();

include_once 'dbConnection.php';
$name = $_POST['full_name'];
$name= ucwords(strtolower($name));
$email = $_POST['email']; 
$college = $_POST['college'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile']; 
$password = $_POST['password'];
$full_name = mysqli_real_escape_string($con,$name);
//$full_name = addslashes($full_name);
$name = ucwords(strtolower($full_name));
$email = mysqli_real_escape_string($con,$email);
//$email = addslashes($email);
$college = mysqli_real_escape_string($con,$college);
//$college = addslashes($college);
$mobile = mysqli_real_escape_string($con,$mobile);
//$mobile = addslashes($mobile);
$password = mysqli_real_escape_string($con,$password); 
//$password = addslashes($password); 


//$f=fgets(fopen("u_gen.txt", "r"));
//$count=(int)$f;
//$count++;
$d=date("d");
$h=date("h");
$i=date("i");
$s=date("s");
$count=uniqid();
$uid="EFF".$d.$h.$i.$s;
//fputs(fopen("u_gen.txt", "w"),$count);

$q3=mysqli_query($con," INSERT INTO users (u_id,name,email,college,gender,mobile,password,akey)
VALUES  ('$uid', '$name' , '$email' , '$college' , '$gender', '$mobile', '$password','$count')" );
if($q3)
{
session_start();
$_SESSION["u_id"] = $uid;
$ref = $_GET['q'];

if(isset($_POST['mobile'])&&$_POST['mobile']=="android"){
echo "success";
exit;
}
else{header("location:$ref");
};
$to=$email;

// Your subject
$subject="Activation Link For Effulgence 2k17";

// From
$header="from:effulgence2k17@effgknit.com";

// Your message
$message="Your Activation link \r\n";
$message.="Click on this link to activate your account \r\n\n";
$message.="http://effgknit.com/confirmation.php?euid=$uid&&passkey=$count \r\n\n\n";
$message.="**Note: If link was not active then copy and paste the url in your Browser.";

// send email
mail($to,$subject,$message,$header);



}
else
{
header("location:registers.php?q7=Email Already Registered!!!");
}
ob_end_flush();


}


?>
