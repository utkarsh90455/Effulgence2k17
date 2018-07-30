<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>EFFULGENCE'17 | EVENTS</title> 
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
<!--================================================================================-->






<nav class="navbar navbar-inverse navbar-fixed-top transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" id="hide1"href="#"><img src="img/neon1.png" height="45" width="45" style="margin-right:px; margin-left:px;  margin-top:-8px;"   /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="nav1" >
      <ul class="nav navbar-nav abc">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.php">About us</a></li>
           <li><a href="pronites.php">Pronites</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="registers.php">Signup</a></li>
            <li id="hide2"><a href="#"> <img  src="img/neon1.png" style="margin-top:-15px;" height="60" width="60" style="margin-right:px; margin-left:px;  margin-top:px;"   /></a></li>
            <li><a href="exhibition.php">Exhibition</a></li>
            <li><a href="workshop.php">Workshops</a></li>
            <li><a href="sponsor.php">Sponsors</a></li>
      <li><a href="contact.php">Contact</a></li>
            <li><?php session_start(); 
      if(!(isset($_SESSION['u_id']))){

echo '<a href="log.php">Login</a>';
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
}?></li>

        </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- nav ===================================================================== -->

  <div class="row top top1 " id="s2">
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



<center> <h3>Registration</h3> </center> 
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 col-sm-12 col-xs-12">
<?php
include_once "dbConnection.php";
$eid=$_POST['eid'];
$query = mysqli_query($con,"SELECT * FROM events WHERE e_id='$eid'");
while($row = mysqli_fetch_array($query)) {
  $eid = $row['e_id'];
  $esuper = $row['e_super'];
  $tmembers = $row['t_members'];
  $ename = $row['e_name'];
}
?>
<center><h4 style="font-family:'batman'">Team Leader Panel</h4></center>

<?php if($tmembers!=1)
{
echo '<p style="font-size:13px;  color:#00FFFF"><b>NOTE:</b>Only the team leader is required to register his team and their members for an event.(Every team member must have Effulgence Reg Id),rest of the team members should not register separately.</p>';
}?>
<p>Registration For:<br />
<b>Event : </b><?php echo $ename;?><br />
<b>Category : </b><?php echo $esuper;?><br />
<b>Team-members: </b>1 - <?php echo $tmembers;?><br/>
<b>Team Leader Effulgence Id: </b><?php echo $u_id;?><br>
<b>Team Leader Name: </b><?php echo $name;?><br></p>
<form action=<?php if($tmembers!=1){echo " 'registerdone.php'";}else{
  echo "'one.php'";
}?> method='post'>
<input type='hidden' class="log2" name='tmem' value='<?php echo $tmembers;?>'/>
<input type='hidden'  class="log2" name='eid' value='<?php echo $eid;?>'/>
<br>
<?php 
if($tmembers!=1){

echo "<input type='text' class='log2' name='tid' placeholder='Enter your Team Name'/><br><br>"; 

}
?>
<?php if(@$_GET['t']) {echo'<p style="color:#99bc32">'.@$_GET['t'];} ?>
<?php

for($i=1;$i<$tmembers;$i++){
  echo "<input type='text' class='log2' name='mem$i' placeholder='Enter your TeamMate Effulgence Id'><br><br>";
}
?>

<?php 
if($tmembers!=1){

echo "<p><b>NOTE:</b>All fields are not mandatory except Team Name.</p><br>"; 

}
?>

<input type='submit' class='log2 submit' value='Register'/>

</form><br />

</div></div>
  </div><hr>


    <!--scroll area end-->
    </div>
    </div>
   <!-- ===============================================================================-->

		
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
