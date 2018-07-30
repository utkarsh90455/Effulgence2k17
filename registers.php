<?php
session_start();
if(isset($_SESSION['u_id'])){
header("Location: user_profile.php"); /* Redirect browser */
exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Effulgence</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
                <meta property="og:title" content="Effulgence 2k17 || Sign Up" />
    <meta property="og:url" content="https://www.effgknit.com/registers.php" />
   
 
       <meta property="og:image"              content="http://effgknit.com/img/fav.jpg" />
    <meta property="fb:app_id"              content="969125333230306" />
    <meta property="og:description" content="We invite you to participate in Effulgence - 2017, A National Level Technical Fest of KNIT Sultanpur." />
    <meta property="og:site_name" content="Effulgence || Sign Up" />
		<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">

    <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="css/stylec.css">
     <script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>
<script>
function validateForm() {var y = document.forms["form"]["full_name"].value; var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("College name must be filled out.");return false;}var phoneno = /^\d{10}$/;var c = document.forms["form"]["mobile"].value;if(!c.match(phoneno)){alert("Enter valid mobile number.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<6 || a.length>15){alert("Passwords must be 6 to 15 characters long.");return false;}
var b = document.forms["form"]["confirm_password"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

    <!--===============================scrolling-->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/component.css" />
   

   
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>
		 <div id="spinner">
    <center>
    <img class="load" src="img/loading.gif"/>
    
    </center>
    </div>

<div  id="particles-js"></div>
    
		
	<!--===================================================================================================-->	

	

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
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="pronites.php">Pronites</a></li>
        
    
       
        <li><a href="workshop.php">Workshops</a></li>
       <li><a href="sponsor.php">Sponsors</a></li> 
        <li><a href="contact.php">Contact</a></li>
        
      
      <li><a href="registers.php">SignUp</a></li>
       <li>  <?php

  if(!(isset($_SESSION['u_id']))){

echo '<a href="log.php">Login</a><a href="registers.php">';
}
else
{
$u_id = $_SESSION['u_id'];
include_once 'dbConnection.php';
$query=mysqli_query($con,"SELECT name FROM users WHERE u_id='$u_id'");
  while($row = mysqli_fetch_array($query)) {
  $name = $row['0'];
  }
echo '<a href="logout.php">logout</a><span class="pull-right sny" >Hello,  <a href="user_profile.php">'.$name.'</a></span>';
}?>
  </li>
        </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>








 <div class="row" id="s1">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bich1" style="margin-top:40px;">
<center><a href="index.php" id="h1">

   <h1 class="" style="margin-top:px;">EFFULGENCE'17</h1>
   </a></center>

  </div>
 
</div>







<!--==============================================================================-->
<div class="row">

<div class="col-md-2 col-lg-2 "></div>
<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 " style="margin-top:px;">
   
   <div class="area1">



<center> <h3>Register</h3> </center> 
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
<div class="col-md-2"></div>
<div class="col-md-8">
<center><font color="red"><?php echo @$_GET['q'];?> </font></center>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red">'.@$_GET['q7'];}?>
<form id="regform" name="form" action="signup.php?q=success.php" onSubmit="return validateForm()" method="POST"><br>
  <label for="full_name"><span class="log1">Full Name:</span><br /><br /></label><input class="ip log2" id="full_name" name="full_name" placeholder="Enter full Name" type="text"/><br><br>
  <label for="email"><span class="log1">Email-Id:</span><br><br></label><input class="ip log2" id="email" name="email" placeholder="Enter email-id" type="text/"><br><br>
  <label for="college"><span class="log1">College Name:</span><br><br></label><input class="ip log2" id="collgename" name="college" placeholder="Enter college name" type="text"/><br><br>
  <label for="gender"><span class="log1">Gender:&nbsp;</span></label><select class="ip log2" id="gender" name="gender" style="width: 200px">
  <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
  </select><br><br>
  <label for="mobile"><span class="log1">Mobile Number:</span><br><br></label><input class="ip log2" id="mobile" name="mobile" placeholder="Enter mobile number" type="text" maxlength="10"/><br><br>
  <label for="password"><span class="log1">Password:</span><strong><strong></strong></strong></label><input class="ip log2" id="password" name="password" placeholder="Enter password" type="password"/><br><br>
  <label for="confirm_password"><span class="log1">Confirm Password:</span><br><br></label><input class="ip log2" id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password"/><br><br>

  <center><font color="red"><?php echo @$_GET['q'];?> </font></center><br>
  <input class="log2 submit" name="Submit" value="SignUp" type="Submit"/>
    </form>

</div>

    </div><hr>
    <!--scroll area end-->
    </div>
    
</div>
<!--===============================================================================-->




	


<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<!--<script type="text/javascript" src="js/time.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</body>
</html>
