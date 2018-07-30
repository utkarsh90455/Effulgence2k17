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
            <li id="hide2"><a href="#"> <img  src="img/neon1.png" style="margin-top:-15px;"height="60" width="60" style="margin-right:px; margin-left:px;  margin-top:px;"   /></a></li>
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

if(@$_GET['q1']=='temp')
{
echo "<script type='text/javascript'>alert('Successfully Registered ...! Thanks for Registration,Please Pay Now.');</script>";
    
}

if(@$_GET['q']=='3d'){ 
echo "<center> <h3>3D Printing</h3> </center>"; 
}
else if(@$_GET['q']=='ic'){ 
echo "<center> <h3>Automobile & IC Engine</h3> </center>"; 
}else if(@$_GET['q']=='ges'){ 
echo "<center> <h3>Gesture&nbsp;Based&nbsp;Robotic</h3></center>"; 
}else if(@$_GET['q']=='ani'){ 
echo "<center> <h3>Animatronics</h3> </center>"; 
}
else if(@$_GET['q']=='cld'){ 
echo "<center> <h3>Cloud Computing</h3> </center>"; 
}
else if(@$_GET['q']=='six'){ 
echo "<center> <h3>Sixth sense Robotics using DIP</h3> </center>"; 
}
else if(@$_GET['q']=='cat'){ 
echo "<center> <h3>Catia(AutoCad/Cam)</h3> </center>"; 
}
?>
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">
 <!--=========================================================================================================-->
 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">

<?php 
if(@$_GET['q']=='cld'){ 
  echo"
<p>Cloud Computing Systems, where data is available over the internet rather than local servers and networks are changing the face of on-demand computing. Within the next decade, half of all information technology is estimated to be in the cloud.</p>
";

echo '<center><p>Workshop Fee: &#x20b9;1190</br>Date:10 Oct- 11 Oct</p></center>';



if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop='Cloud Computing' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}











}
else if(@$_GET['q']=='ani'){ 
echo "<p>Animatronics is the illusion of life achieved via electronic devices. Animatronics techniques using robots to imitate human and animal activities are widely practiced in movie making to create imaginary life-like creatures. Animatronics technology makes it possible to replicate a living being's action and facial expressions. In this program, we train the students to design, fabricate and control an Animatronic hand using embedded systems.</p></br>

";
echo '<center><p>Workshop Fee: &#x20b9;1600</br>Date:11 Oct- 12 Oct</p></center>';


if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop='Animatronics' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}





}else if(@$_GET['q']=='ges'){ 

echo"<p>Gesture Based Robotics (also known as Accelerometer Controlled Robotics) deals with robots which involve human-machine interaction - where a robot is controlled through hand movements sensed by an accelerometer.

The workshop helps participants understand the concepts and applications of an accelerometer sensor, microcontrollers and other electronic components used in Robotics. It includes practical training on building robots based on gesture recognition technology, providing students a glimpse into Human Machine Interaction technologies.

</p>";
echo '<center><p>Workshop Fee: &#x20b9;1300</br>Date:8 Oct- 9 Oct</p></center>';

if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop=' Gesture Based Robotics' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}










}else if(@$_GET['q']=='six'){ 
echo "

"; 
echo '<center><p>Workshop Fee: &#x20b9;1300</br>Date:6 Oct- 7 Oct</p></center>';
if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop='Sixth sense Robotics using DIP' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}








}
else if(@$_GET['q']=='cat'){ 
echo "

"; 
echo '<center><p>Workshop Fee: &#x20b9;1290</br>Date:6 Oct- 7 Oct</p></center>';
if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop='Catia(AutoCad/Cam)' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}









}
else if(@$_GET['q']=='3d'){ 
echo "
<p>3D Printing is an Additive Manufacturing technique that creates a physical object from a virtual 3D CAD model by depositing successive layers of material. They work like the traditional inkjet printers, but instead of ink, a 3D printer deposits desired material to manufacture an object from its digital format. 3D printing and rapid prototyping, in general, are widely claimed to have revolutionized not only the manufacturing industry but also many other walks of life like medicine, aerospace and automotive industry. This program on 3D Printing helps the participants understand the design, functioning and operation of a basic 3D Printer.

</p>
"; 
echo '<center><p>Workshop Fee: &#x20b9;1290</br>Date:10 Oct- 11 Oct</p></center>';
if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop='3D Printing' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}






}
else if(@$_GET['q']=='ic'){ 
echo "<p>Internal Combustion or IC Engines have had a great impact on human life. These engines produce immense power in contrast to their size and weight. Today, these engines power almost all air and land vehicles.

In this workshop students get firsthand experience of the working principles for IC Engine Design. By dismantling a real IC Engine into components, participants can explore the engineering involved in an automotive engine system.</p>

"; 
echo '<center><p>Workshop Fee: &#x20b9;1090</br>Date:8 Oct- 9 Oct</p></center>';
if(isset($_SESSION['u_id'])){
$uid=$_SESSION['u_id'];
$query = mysqli_query($con,"SELECT * FROM work_reg WHERE u_id='$uid' AND workshop='Automobile & IC Engine' ") or die ('Error');
$count=mysqli_num_rows($query);
if($count==1){

echo '<center><a href="fee.php"><button class="sunny">Pay</button></a></center>';
}
else{
echo '<center><a href="cap/work_reg.php"><button class="sunny">Register</button></a></center>';
}

}
else{
  echo '<center><p>*For Register Please Login...</p></center>';
}




}


        
  ?>
        

 </div>

<center >
  </br></br><img src="img/skyfi.jpg" height="100px" width="150px" ></br>
  <?php



?>
</center>


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
