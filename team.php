<!DOCTYPE html>
<html>
  <head>
    <title>Effulgence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
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
    <link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/magic.min.css" />
<link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>

   
  </head>
  <body>
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


 <div class="row top">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bich1">
<center><a href="index.php" id="h1">
   <h1 class="" >EFFULGENCE'17</h1>
   </a></center>
    </div>
 
</div>
<!--==============================================================================-->
<div class="row container-fluid">

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="">
   
   <div class="area1">


<?php
if(@$_GET['q']=='coo'){ 
echo "<center> <h3>Coordinators</h3> </center>"; 
}
else if(@$_GET['q']=='web'){ 
echo "<center> <h3>Web Developers</h3> </center>"; 
}else if(@$_GET['q']=='cre'){ 
echo "<center> <h3>Designer</h3> </center>"; 
}else if(@$_GET['q']=='man'){ 
echo "<center> <h3>Management</h3> </center>"; 
}
else if(@$_GET['q']=='org'){ 
echo "<center> <h3>Organising secretary</h3> </center>"; 
}
else if(@$_GET['q']=='con'){ 
echo "<center> <h3>Patron&nbsp;&&nbsp;Convener</h3> </center>"; 
}
?>
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
 <!--=========================================================================================================-->
 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">

<?php 
if(@$_GET['q']=='coo'){ 
  echo"
<div class=\"col-md-4  text-center\">
        <img src=\"img/anup.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Anup Tiwari</h4>
          <h2 style=\"font-family: 'Play';\">tiwarianup088@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91-9451585472)</h2>
        </div>
<div class=\"col-md-4 text-center\">
        <img src=\"img/raman.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Raman Shukla</h4>
          <h2 style=\"font-family: 'Play';\">22ramanshukla@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91-8840257072)</h2>
  </div> 
<div class=\"col-md-4 text-center\">
        <img src=\"img/alok.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Alok Pal</h4>
          <h2 style=\"font-family: 'Play';\">alokpal570@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91-7054134148)</h2>
  </div> 




  ";

}
else if(@$_GET['q']=='con'){ 
  echo"
<div class=\"col-md-4  text-center\">
        <img src=\"img/ajay.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Ajay Shekhar Pandey</h4>
          <h2 style=\"font-family: 'Play';\">(Patron)</h2>
          <h2 style=\"font-family: 'Play';\"></h2>
        </div>
<div class=\"col-md-4 text-center\">
        <img src=\"img/harsh.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Harsh Vikram Singh</h4>
          <h2 style=\"font-family: 'Play';\">(Convener)</h2>
          <h2 style=\"font-family: 'Play';\"></h2>
  </div> 
<div class=\"col-md-4 text-center\">
        <img src=\"img/anil.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Anil Kumar</h4>
          <h2 style=\"font-family: 'Play';\">(Co-convener)</h2>
          <h2 style=\"font-family: 'Play';\"></h2>
  </div> 




  ";

}
else if(@$_GET['q']=='web'){ 
echo "
<div class=\"col-md-6 text-center\">
        <img src=\"img/SL.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Divyank Gupta</h4>
          <h2 style=\"font-family: 'Play';\">divyank9012@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91 9012835211)</h2>
  </div> <div class=\"col-md-6 text-center\">
        <img src=\"img/utkarsh.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Utkarsh Verma</h4>
          <h2 style=\"font-family: 'Play';\">utkarsh90455@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91 7599169645)</h2>
  </div>";


}
else if(@$_GET['q']=='cre'){ 

echo"<div class=\"col-md-12 text-center\">
        <img src=\"img/vin.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Vinod Maurya</h4>
          <h2 style=\"font-family: 'Play';\">raj.vinod563sv@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91 8953387012)</h2>
  </div> ";


}
else if(@$_GET['q']=='org'){ 

echo"<div class=\"col-md-12 text-center\">
        <img src=\"img/ravi.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Ravi Narayan Mishra</h4>
          <h2 style=\"font-family: 'Play';\">(Organising Secretary)</h2>
          <h2 style=\"font-family: 'Play';\"></h2>
  </div> ";


}else if(@$_GET['q']=='man'){ 
echo "
<div class=\"col-md-3  text-center\">
        <img src=\"img/a17.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Aayush Varshney</h4>
           <h2 style=\"font-family: 'Play';\">aayushvarshney1998@gmail.com</h2>
          <h2 style=\"font-family: 'Play';\">(+91-9045255627)</h2>
  
          
        </div>
<div class=\"col-md-3  text-center\">
        <img src=\"img/anjali.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Anjali Mishra</h4>
          
          
        </div>
<div class=\"col-md-3 text-center\">
        <img src=\"img/apoorva.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Apoorva Swaroop</h4>
          <h2 style=\"font-family: 'Play';\">swaroop.apoorva14@gmail.com</h2>
          
  </div> 
<div class=\"col-md-3 text-center\">
        <img src=\"img/ayush.jpg\" class=\"img-circle\" height=\"200\" width=\"200\" />
          <h4>Ayush Bajpai</h4>
          <h2 style=\"font-family: 'Play';\"></h2>
          <h2 style=\"font-family: 'Play';\">(+91-8181929405)</h2>
  </div> 

"; 
}

        
  ?>
        

 </div>



 <!--================================================================-->

    
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/jquery.1.10.2.min.js"></script>
<script src="js/main.js"></script>

  </body>
</html>
