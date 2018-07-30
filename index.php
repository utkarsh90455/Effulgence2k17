<!DOCTYPE html>
<html>
  <head>
     <title>Effulgence 2k17 || KNIT Sultanpur</title>
    <meta charset="utf-8">
     <meta name="google-site-verification" content="Oxo9ZK-ZFSL35GrWH0c4ys5TbTmUb7pIVX3W42w41V4" />
     
     <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta property="og:title" content="Effulgence 2017, KNIT Sultanpur || Effulgence 2k17" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.effgknit.com/" />
    <meta property="og:site_name" content="Effulgence  2k17 || KNIT Sultanpur || Home || Effulgence 2k17 || A National Level Technical Fest" />
        <meta property="og:image"              content="http://effgknit.com/img/fav.jpg" />
    <meta property="fb:app_id"              content="969125333230306" />
    <meta property="og:description" content="We invite you in Effulgence 2k17 A National Level Technical Festival of KNIT Sultanpur"/>
    <meta name="keywords" content="effulgence,effulgence knit sultanpur,Effulgence,EFFUlGENCE,effulgence 2k17 ,Effulgence 2k17,effulgence knit, Effulgence,Effulgence 17,KNIT,Technical Fest,techfest,Kamla Nehru Institute of Technology,Sultanpur, Technical Extravaganza,Divyank Gupta,divyank9012,Utkarsh verma,utkarsh90455, India,exhibitions, fest, techfest, workshops" >
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">

    <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="css/styleu.css">
    <script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>
    
   
  </head>
  <body id="body">
<?php include_once("analyticstracking.php") ?>
    <script src="build/three.js"></script>
    <script src="js/libs/tween.min.js"></script>
    <script src="js/controls/TrackballControls.js"></script>
    <script src="js/renderers/CSS3DRenderer.js"></script>
    <div id="spinner">
    <center>
    <img class="load" src="img/loading.gif"/>
    
    </center>
    </div>
    
<!--====================================================================================-->

   <div id="container" class="col-md-12 col-lg-12 col-sm-12 " ></div>
<!--==================================================================================-->
<nav class="navbar navbar-inverse navbar-fixed-top transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav12" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="hide1"href="#"><img src="img/knitlogo.jpg" height="45" width="45" style="margin-right:px; margin-left:px;  margin-top:-8px;"   /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="nav12">
      <ul class="nav navbar-nav abc">
       <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.php">About Us</a></li>

        <li><a href="event.php">Events</a></li>
           
           <li><a href="workshop.php">Workshops</a></li>
         <li><a href="pronites.php">Pronites</a></li> 
        
        <li id="hide2"><img src="img/knitLOGO.png" height="70" width="70" style="margin-right:px; margin-left:px;  margin-top:px;"   /></li>
        
        
        <li><a href="exhibition.php">Exhibition</a></li>
      <li><a href="cap/">Campus Ambassador</a></li>
      
      <li><a href="contact.php">Contact</a></li>
      <li><a href="registers.php">Signup</a></li>
      <li> <?php
      session_start(); 
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
}?>
 </li>
    
  </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- nav ===================================================================== -->

<div class="container">
        <div class="row"> 
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="ltab">
    <center class="knit"><h1 >KNIT Sultanpur</h1><p>Presents</p></center>

</div>

  
<div class="col-md-12 col-sm-12 col-xs-12" id="ltab2">
    <center><img class="img-responsive" src="img/neon1.png" class="logo" height="140" width="140" style="margin-top:20px" class="img-responsive" /></center>
<center><h1 class="logo " style="text-align:center; margin-top:30px;"><b>EFFULGENCE '17</b></h1></center>

 <center> <p class="logo2" style="font-family:digital;">Beating the invincibles</p>
 <center> <p class="logo2" style="font-family:'Play'; font-size:15px;" >10th to 12th Oct</p>
</center>
</div>
 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <center><div class="timerbtn" style="margin-top:80px;"><span id="countdown"></span></div></center>
</div>

</div>
</div>


<!--<script type="text/javascript"  src="js/an.js"></script>-->
<script type="text/javascript"  src="js/j.js"></script>
<script type="text/javascript" src="js/time.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>