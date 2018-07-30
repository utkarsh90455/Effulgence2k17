<html>
<head>
<title>Student Registration Detail</title>
<style>
table,th,td{
 border:1px solid green;
}
 </style>
</head>
<body>
<?php
$event=$_POST["eventlist"];
?>
<table align="center" style="border:1px solid green">
<center><h2>Student Registration Detail:<?php echo $event;?></h2><center>
<tr>
<th>S.NO</th>
<th>EFFULGENCE ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>COLLEGE</th>
<th>MOBILE</th>
<th>GENDER</th>
<th>TEAM NAME</th>
</tr>
<?php
include_once 'dbConnection.php';

//$query="SELECT * FROM  `users` WHERE  `u_id` IN (SELECT  `u_id` FROM  `reg` WHERE  `e_id` ='$event')";
//$query="SELECT `users.u_id`, `users.name`, `users.email, users.college, users.gender, users.mobile,reg.t_id
//FROM users

//INNER JOIN reg ON user.u_id = reg.u_id WHERE reg.e_id ='$event' ; ";

$query="SELECT * FROM users INNER JOIN reg ON users.u_id = reg.u_id WHERE reg.e_id ='$event' "; 



$i=1;
if ($result = mysqli_query($con, $query) ){
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$i."</td><td>".$row['u_id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['college']."</td><td>".$row['mobile']."</td><td>".$row['gender']."</td><td>".$row['t_id']."</td></tr>";
	$i=$i+1;
}
}
else {
	echo "sdfghjk";
}
?>
 </table>
</body>
</html>