<!DOCTYPE html>
<html >
	<head>
		<title>Effulgence</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
                 <meta property="og:title" content="Effulgence 2k17 || Contact." />
    <meta property="og:url" content="https://www.effgknit.com/contact.php" />
   
 
       <meta property="og:image"              content="http://effgknit.com/img/fav.jpg" />
    <meta property="fb:app_id"              content="969125333230306" />
		<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">

    <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="css/stylec.css">
     <script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>
    <!--===============================scrolling-->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/component.css" />


   
	</head>
	<body >
<?php include_once("analyticstracking.php") ?>
		 <div id="spinner">
    <center>
    <img class="load" src="img/loading.gif"/>
    
    </center>
    </div>
<div  id="particles-js"></div>
		
	<!--=======================================================================================-->	

	








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
            <li id="hide2"><a href="#"> <img  src="img/neon1.png" style="margin-top:-15px" height="60" width="60" style="margin-right:px; margin-left:px;  margin-top:px;"   /></a></li>
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



 <div class="row top">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bich1">
<center><a id="h1">
   <h1 class="" >EFFULGENCE'17</h1>
   </a></center>

  </div>
  
</div>

<!--==============================================================================-->
<div class="row">

<div class="col-md-2 col-lg-2 "></div>
<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 " style="">
   
   <div class="area1">



<center> <h3>Team Members</h3> </center> 
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<center>
   <a href="team.php?q=con">
  <div class="button-fill grey">
    <div class="button-text">Patron & Convener</div>
    <div class="button-inside">
      <div class="inside-text">Patron&nbsp;&&nbsp;Convener</div>
    </div>
  </div></a></center>
</div>
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<center><div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
    
    <a href="team.php?q=org">
  <div class="button-fill grey">
    <div class="button-text">Organising secretary</div>
    <div class="button-inside">
      <div class="inside-text">Organising&nbsp;secretary</div>
    </div>
  </div></a>
</div>
<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
<a href="team.php?q=coo">
  <div class="button-fill grey">
    <div class="button-text">Co-ordinator</div>
    <div class="button-inside">
      <div class="inside-text">Co-ordinator</div>
    </div>
  </div></a>
</div></center>
</div>


<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<center><div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
    
    <a href="team.php?q=web">
  <div class="button-fill grey">
    <div class="button-text">Web Developer</div>
    <div class="button-inside">
      <div class="inside-text">Web&nbsp;Developer</div>
    </div>
  </div></a>
</div>
<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
<a href="team.php?q=cre">
  <div class="button-fill grey">
    <div class="button-text">Creative&nbsp;&&nbsp;Designer</div>
    <div class="button-inside">
      <div class="inside-text">Creative&nbsp;&&nbsp;Designer</div>
    </div>
  </div></a>
</div></center>
</div>
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
<center>
   <a href="team.php?q=man">
  <div class="button-fill grey">
    <div class="button-text">Management</div>
    <div class="button-inside">
      <div class="inside-text">Management</div>
    </div>
  </div></a></center>
</div>
</div>





</div><hr/>
    <!--scroll area end-->
    </div>
    <div class="col-md-2"></div>
</div>
<!--===============================================================================-->




	


<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script>
 $(".button-fill").hover(function () {
    $(this).children(".button-inside").addClass('full');
}, function() {
  $(this).children(".button-inside").removeClass('full');
});
</script>
<!--<script type="text/javascript" src="js/time.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</body>
</html>