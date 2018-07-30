<!DOCTYPE html>
<html>
  <head>
    <title>Effulgence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta property="og:title" content="Effulgence 2k17 || Sponsors" />
    <meta property="og:url" content="https://www.effgknit.com/sponsor.php" />
   
 
       <meta property="og:image"              content="http://effgknit.com/img/fav.jpg" />
    <meta property="fb:app_id"              content="969125333230306" />
    <meta property="og:description" content="We invite you to participate in Effulgence - 2017, A National Level Technical Fest of KNIT Sultanpur." />
    <meta property="og:site_name" content="Effulgence || Sponsors" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">

    <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="css/style.css">
     <script type="text/javascript">// <![CDATA[
$(window).load(function() { $("#spinner").fadeOut("slow"); })
// ]]></script>
    <!--===============================scrolling-->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/component.css" />
    
    <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>

   
  </head>
  <body >
<?php include_once("analyticstracking.php") ?>
     <div id="spinner">
    <center>
    <img class="load" src="img/loading.gif"/>
    
    </center>
    </div>
<div  id="particles-js"></div>
    
  <!--====================================--> 

  







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



 <div class="row top" >
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bich1">
<center><a href="index.php" id="h1">
   <h1 class="" >EFFULGENCE'17</h1>
   </a></center>

  </div>
  
</div>

<!--==============================================================================-->
<div class="row">


<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="">
   
   <div class="area1">



<center> <h3>Our Sponsors</h3> </center> 
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >

    <center>
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/digi.PNG" alt="" width="270px" height="170px"/>
      </div>
     
    </div>
     <div class="box col-lg-4 col-sm-12 col-md-4">
      
      <div class="box-overlay magictime" >
        <img src="img/kdi.PNG" alt="" width="270px" height="170px"/>
      </div>
                 
    </div>
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/es.PNG" alt=""  width="250px" height="170px"/>
      </div>
      
    </div> 
   
    
    
     
     
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/titan.png" alt="" style="margin-top:5px;" width="300px" height="150px"/>
      </div>
         
    </div> 
    </center>
    </div>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >

<center>   


  <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/foodplaza.PNG" alt=""  width="290px" height="170px"/>
      </div>
      
    </div>
<div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/skyfi.jpg" alt="" width="250px" height="170px"/>
      </div>
                 
    </div>
<div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/hawkeyed.jpg" alt="" width="250px" height="170px"/>
      </div>
                 
    </div>
<div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/h.png" alt="" width="250px" height="170px"/>
      </div>
                 
    </div>

  </center>
   
    
    
     
    </div>


<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >

<center>   


  <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/rcpl.PNG" alt=""  width="290px" height="170px"/>
      </div>
      
    </div>
    
 

  </center>
   
    
    
     
    </div>



 <!--============
=============================================================================================-->
<center> <h2 style="font-family:'batman'; font-size:25px;">Previous Sponsors</h2> </center> 
<center><div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >
<div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/hin.jpg" alt="" />
      </div>
                 
    </div>
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/time.jpg" alt="" width="270px" height="170px"/>
      </div>
     
    </div>
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/tech.jpg" alt=""  width="250px" height="170px"/>
      </div>
      
    </div>  
    
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/iste.gif" alt="" width="190px" height="190px"/>
      </div>
         
    </div>  
    </div>
 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >
<div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/skyfi.jpg" alt="" />
      </div>
                 
    </div>
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/tiket.jpg" alt="" width="280px" height="170px"/>
      </div>
     
    </div>
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/code.jpg" alt=""  width="250px" height="170px"/>
      </div>
      
    </div>  
    
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/sky.jpg" alt="" width="190px" height="190px"/>
      </div>
         
    </div>  
    </div>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >
<div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/civi.jpg" alt="" width="270px" height="170px" />
      </div>
                 
    </div>
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/cetpa.png" alt="" width="280px" height="170px"/>
      </div>
     
    </div>
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/asar.png" alt=""  width="250px" height="170px"/>
      </div>
      
    </div>  
    
    
    <div class="box col-lg-3 col-sm-12 col-md-3">
      
      <div class="box-overlay magictime" >
        <img src="img/atom.jpg" alt="" width="190px" height="190px"/>
      </div>
         
    </div>  
    </div></center>



 







  </div><hr>
  <!--scroll area end-->
  


   
    </div>
   
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
<script src="js/jquery.1.10.2.min.js"></script>
<script src="js/main.js"></script>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/magic.min.css" />

  </body>
</html>
