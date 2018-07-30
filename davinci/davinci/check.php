<?php
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$ans = md5($_POST["ans"]);
include 'includes/connect.php';
$l=$_SESSION['level'];


$q2=mysqli_query($conn,"SELECT * FROM submissions WHERE fbid=$id AND level='$l'")or die('error10');
$check=mysqli_num_rows($q2);
	if(empty($check)){
		mysqli_query($conn,"INSERT INTO `submissions` (`name`, `fbid`, `level`, `submissions`, `ts`) VALUES ('$name', '$id', '$l', '1', NOW());")or die('error15');
    } else {
	   $row = mysqli_fetch_assoc($q2);
       $submit = $row["submissions"] + 1;
        mysqli_query($conn ,"UPDATE `effg17`.`submissions` SET submissions = '$submit' WHERE fbid = '$id' AND level = '$l'") or die ('Error17');
    }

$q1=mysqli_query($conn,"SELECT answer FROM answers WHERE level=$l")or die('error20');
$arr = mysqli_fetch_assoc($q1);
//echo $arr["answer"];
if($ans==$arr["answer"]){
	//echo ('correct');
	$l=$l+1;
	mysqli_query($conn,"UPDATE usersda SET level='$l',ts=CURRENT_TIMESTAMP where fbid='$id'")or die('error25');
	mysqli_query($conn ,"UPDATE submissions SET ts = CURRENT_TIMESTAMP WHERE fbid = '$id' AND level = '$l'") or die ('Error26');
	header("location:question.php?r");
}
else{
	header("location:question.php?w");
}
?>
