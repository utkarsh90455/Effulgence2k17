<?php
//session_start();
if (isset($_SESSION['u_id'])) {
include_once 'dbConnection.php';
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM reg WHERE u_id='$uid' AND e_id='$eid'") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo "<input class='sunny sny4' type='button' value='Registered' disabled/>";
}
else{
echo "<form action='registration.php' method='post'>
<input type='hidden' name='eid' value='".$eid."'/>
<input class='sunny' type='submit'  value='Register' /></form>";
}
}
else{
  echo '<a href="log.php?temp=res"><button class="sunny">Register</button></a></br>';
}
?>