<?php
include_once 'dbConnection.php';
$uid=$_POST['u_id'];
//echo "$uid";
$result = mysqli_query($con,"SELECT u_id,name,email,mobile FROM users WHERE u_id='$uid'");
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {

 $myobj->uid = $row['u_id'];
        $myobj->name = $row['name'];
        $myobj->email = $row['email'];
        $myobj->mobile = $row['mobile'];
} 
echo json_encode($myobj);
} 

?>
