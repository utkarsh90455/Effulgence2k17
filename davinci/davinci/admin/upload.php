<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("location:adminlogin.php");
}
    $ans_no = $_POST["level"];
    $ans = md5($_POST["answer"]);
	$name=$_POST["name"];
include 'includes/connect.php';
    $result = mysqli_query($conn ,"SELECT * FROM answers WHERE level = '$ans_no'")or die('error5');
    if(mysqli_affected_rows($conn)>0) {
        mysqli_query($conn ,"UPDATE answers SET answer = '$ans',imgsrc='$name' WHERE level = '$ans_no'")or die('error12');
    } else {
        mysqli_query($conn ,"INSERT INTO `effg17`.`answers` (`level`, `answer`, `imgsrc`) VALUES ('$ans_no', '$ans', '$name')")or die('error14');
    }
//img upload
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}	
	

?>
