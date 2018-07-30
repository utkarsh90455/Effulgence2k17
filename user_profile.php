<?php
include_once 'session_inc.php';
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'17 | USER PROFILE</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/neon1.png" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">

 <link rel="stylesheet" media="screen" href="css/stylec.css"> 
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>

<link rel="stylesheet" href="css/animate.min.css">  
   <!-- Preloader --><script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/component.css" />

 <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>
 </head>
<body>
<div id="spinner">
	<center>
	<img  src="img/loading.gif"/>
	</div><br>
	</center>
	</div>
 
<div  id="particles-js"></div>

<nav class="navbar navbar-inverse navbar-fixed-top transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
      <a class="navbar-brand" id="hide1"href="#"><img src="img/neon1.png" height="45" width="45" style="margin-right:px; margin-left:px;  margin-top:-8px;"   /></a>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav abc">
        <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li class="active"><a href="event.php">Events</a></li>
        
         <li><a href="workshop.php">Workshops</a></li>
       <li><a href="sponsor.php">Sponsors</a></li>
         
        <li id="hide2"><a href="#"> <img src="img/neon1.png" style="margin-top:-15px;"height="60" width="60" style="margin-right:px; margin-left:px;  margin-top:px;"   /></a></li>
        
        <li><a href="fee.php">Fees Submission</a></li>
    
        <li><a href="changepass.php">Change Password</a></li>
        <li><?php

if(!(isset($_SESSION['u_id']))){

echo '<a href="registers.php">style="float:right"signup</a>';
}
else
{
$u_id = $_SESSION['u_id'];
include_once 'dbConnection.php';
$query=mysqli_query($con,"SELECT name FROM users WHERE u_id='$u_id'");
    $name=""; 
	while($row = mysqli_fetch_array($query)) {
	$name = $row['name'];
	}
echo '<a href="logout.php">Logout</a><span class="pull-right sny" >Hello,  <a href="user_profile.php">'.$name.'</a></span>';
}?>
  </li>
        </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row top top1">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bich1">
<center><a href="index.php" id="h1">
   <h1 class="" >EFFULGENCE'17</h1>
   </a></center>

  </div>
  
</div>

<!--==============================================================================-->
<div class="row">

<div class="col-md-2 col-lg-2 "></div>
<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 " style="">
   
   <div class="area1">



<center> <h3>Profile</h3> </center> 
    </div>


 
	<!--scoll area start-->
	<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8 col-sm-12 col-xs-12">
	
<?php
$uid = $_SESSION['u_id'];
$email = '';
$full_name='';
$college='';
$gender='';
$mobile='';
$password='';
if(!(isset($_SESSION['u_id'])))
header("location:index.html");
else {
$query1 = mysqli_query($con,"SELECT * FROM users WHERE u_id='$uid'") or die ('Error');
	while($row = mysqli_fetch_array($query1)) {
	$full_name = $row['name'];
	$college = $row['college'];
	$gender = $row['gender'];
	$mobile = $row['mobile'];
	$email = $row['email'];
	}
}
?>
<?php if(@$_GET['q1']) {echo'<p style="color:#99bc32"><img src="img/tick.png">'.@$_GET['q1'];} ?>
<div class="col-md-6 col-sm-6 col-xs-6">
<p style="font-family:'batman';">
<b>User ID :</b><br><br />
<b>E-mail address :</b><br><br>
<b>Name :</b><br><br>
<b>Gender :</b><br><br>
<b>College Name:</b><br><br>
<b>Mobile Number:</b><br><br>
</p>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<p style="font-family:'Play'"><span style="color:#FF0000;font-family:'Play';"><b><?php echo $uid; ?></b></span><br /><br />
<?php echo '<span style="">'. $email.'</span>'; ?><br /><br />
<?php echo $full_name; ?><br /><br />
<?php echo $gender; ?><br /><br />
<?php echo $college;?><br /><br />
<?php echo $mobile;?><br /><br /></p>
</div>
<center><h3 class="reg" id="reg">REGISTERED FOR:</h3></center>
<?php
$query2 = mysqli_query($con,"SELECT DISTINCT(e_super) FROM events WHERE e_id IN (SELECT e_id FROM reg WHERE u_id='$uid')") or die ('Error');
	while($row = mysqli_fetch_array($query2)) {
	$esuper=$row['e_super'];
	echo "<h4 class='reg' id='reg2' >".$esuper."</h4>";
	   echo "<pre>";
		$query3 = mysqli_query($con,"SELECT e_name,e_id FROM events WHERE e_id IN (SELECT e_id FROM reg WHERE u_id='$uid') AND e_super='$esuper'") or die ('Error');
		while($row = mysqli_fetch_array($query3)) {
		     $eid=$row['e_id'];
			echo "<center><h5 class='reg reg2' id='reg2'>".$row['e_name']; $query4=mysqli_query($con,"SELECT t_id FROM reg WHERE e_id='$eid' AND u_id='$uid'") or die ('ERROR');while($row1 = mysqli_fetch_array($query4)) { echo " [ Team ID : ".$row1['t_id']." ]<br>";}echo "</h5></center>";
		}
		echo "</pre>";
	}
 ?>



</div></div>
</div><hr>
	<!--scroll area end-->
	</div>
	<div class="col-md-2"></div>	
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script>
 $(".button-fill").hover(function () {
    $(this).children(".button-inside").addClass('full');
}, function() {
  $(this).children(".button-inside").removeClass('full');
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

