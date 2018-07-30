<?php
include_once 'session_inc.php';
include_once 'dbConnection.php';
$uid=$_SESSION['u_id'];
$tmembers=$_POST['tmem'];
$tid=$_POST['tid'];
$query5 = mysqli_query($con,"SELECT * FROM reg WHERE t_id='$tid'") or die ('Error');
	$count=mysqli_num_rows($query5);
	if($count!=0){
		header("location:error.php?e='Team Name already used, Try another name'");
		exit();
	}
$mem[0]=$uid;
for($i=1;$i<$tmembers;$i++){
	$mem[$i]=$_POST['mem'.$i];
	for($j=$i-1;$j>=0;$j--){
		if($mem[$i]){
		if($mem[$j]==$mem[$i]){
			header("location:error.php?e='One or more team members are same!!!'");
			exit();
		}
		}
	}
}
for($i=1;$i<$tmembers;$i++){
	if($mem[$i]) {
	$query = mysqli_query($con,"SELECT * FROM users WHERE u_id='$mem[$i]'") or die ('Error');
	$count=mysqli_num_rows($query);
	if($count!=1){
		header("location:error.php?e='One or more team members are not already registered'");
		exit();
	}
	}
}
//$f=fgets(fopen("t_gen.txt", "r"));
//$count=(int)$f;
//$count++;
$eid=$_POST['eid'];
//$tid=$eid.$count;
//fputs(fopen("t_gen.txt", "w"),$count);
mysqli_query($con,"INSERT INTO reg VALUES('$uid', '$tid', '1', '$eid')") or die ('Error');
for($i=1;$i<$tmembers;$i++){
	$mem=$_POST['mem'.$i];
	mysqli_query($con,"INSERT INTO reg VALUES('$mem', '$tid', '0', '$eid')") or die ('Error');
}
mysqli_query($con,"DELETE from reg WHERE u_id=''") or die('Error');
header("location:user_profile.php?q1=Registration Successful !!!");
//echo "BADHAIYAAAN";
?>
