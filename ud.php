<!DOCTYPE html>
<html>
  <head>
    <title>Effulgence</title>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
     <meta property="og:title" content="Effulgence 2k17" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.effgknit.com/ud.php" />
    <meta property="og:image"              content="http://effgknit.com/img/fav.jpg" />
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
  <body>
     <div id="spinner">
    <center>
    <img class="load" src="img/loading.gif"/>
    
    </center>
    </div>
<div  id="particles-js"></div>
    
  <!----------------------------------------------------------------------------------------> 

  







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
          <li id="hide2"><a href="#"> <img  src="img/neon1.png" style="margin-top:-15px;" height="60" width="60"  /></a></li>
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

<!--=============CIRCUITUS
WIRING WEB: An exciting event to test your knowledge about electrical and electronics circuits.
MATPUZZ: An event of most advanced computing language MATLAB.
JUNKYARD: Solve a real world problem and implement it in breadboard.=================================================================-->
<div class="row">

<div class="col-md-2 col-lg-2 "></div>
<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 " style="">
   
   <div class="area1">



<center> <h3>UDYAM</h3> </center> 
    </div>
   <!--scoll area start-->
<div class="area mCustomScrollbar" data-mcs-theme="light" data-mcs-axis="y">

<!--=======================================================================================================-->

<h2>INTRODUCTION :</h2>
<p>Udyam is an event in which budding entrepreneurs and visionaries can use their ingenuity
and creativity to envision an idea of a product or a service that will be successful in the given
situation; and formulate a business strategy for the same.
</p></br>
<h1>SCENARIO :</h1>
<p>Following are the main scenarios for the Udyam event. Participants are to come up with innovative ideas for Start-up product or services that will be successful in their chosen scenario. Participants can choose any one scenario to base their start-up in. 
Note: The scenarios are general guidelines. Participants are encouraged to think of further opportunities/problems that may exist in their chosen Scenario, and develop their idea accordingly. </p>
<br>
<h1>Scenario 1: Dense and Sprawling Urban City</h1>
<p>The city of New Orbis is a sprawling city with a life of its own, especially after the dark. The numerous inhabitants of the city like to forget the problems that plague them- like the growing prices of residential spaces, high crime rate, and water and power scarcity due to mismanagement of resources, by spending their time at the various entertainment centres that have bubbled up in the city in the recent past. However, they are not the only ones to have recognized the opportunity. </br>
Several fast food restaurants, tech start-ups, coaching centres, food related start-ups, health centres and their suppliers have sprung up in response to the increase in demand due to the rapidly growing population in the well-connected but increasingly traffic congested city. This has also created a demand for innovative goods that can be used by these services and make them more effective. 
Alas, not all’s well in the city. The citizens are worried about the quality of education for their children, growing diseases and lack of access to good doctors to the cityfolk. In these times, the citizens think that Social Entrepreneurs will be a boon to the city, and help alleviate several issues plaguing the city.</p>
<br>
<h1>Scenario 2: College town</h1>
<p>The town of Udyam nagar might just be more popular among the students of the country than the general population. This is due to the renowned Universities it is host to. The bustling economy of Udyam nagar thrives on the business the students of these Universities and the relatively small local population bring them, and several industries like that of educational supplies, clothing, education, health, fooding and entertainment.
The town is also famous for its small industries, though they have lately been struggling due to frequent power outages and scarcity of resources, partly due to the lack of efficient connectivity to the surrounding areas. Tourists flock to the city in winter for the spectacular waterfalls and natural sanctuary situated near the town. This has led to a growth in the tourism industry, though many have confessed to not failing safe due to the lack of reliable transport facilities in the town. </br>
Things are looking good for the Udyam nagar, however, with numerous construction firms setting up shop in the outskirts of the city, where the government and developers are proposing several large development projects. Residents of the town have expressed hope that this will bring more employment and prosperity to the town. </p>
<br>
<h1>Scenario 3: Rural region</h1>
<p>For most, the village of Udyampur doesn’t exist. Agriculture is the primary source of employment for the villagers, though many are increasingly shifting to other sectors such as cottage industries due to erratic earnings caused by unpredictable weather, lack of warehouses for the produce, lack of efficient connectivity and other logistical problems. There is great potential for production of innovative agricultural based equipment and services, but the locals lack the technical expertise to take advantage of the situation. </br>
Large tracts of land remain unused in in the village due to the last draught, and with the high unemployment rate, low skilled manpower is in ample supply. The villagers lack knowledge of health and hygiene, and with the nearest hospital more than 10 kms away and are mostly dependent on age old remedies to cure their medical conditions, leading to a high mortality rate. Many have speculated that an awareness drive will help solve this and related problems.</p>
<br>






                                                                                                                                                                                                                                                                                                            


  <center><p>For more Information: </p><a href="work/UDYAM.pdf"><button class="sunny">Download</button></a></center>


 <!--=========================================================================================================-->
 <center><?php $eid='udy';include_once "reg_inc.php";?>
<a href="presentio.php"><button class="sunny">Back</button></a>

  </center>




    </div><hr>
    <!--scroll area end-->
    </div>
    </div>
   <!-- ===============================================================================-->


<script>
 $(".button-fill").hover(function () {
    $(this).children(".button-inside").addClass('full');
}, function() {
  $(this).children(".button-inside").removeClass('full');
});
</script>

  
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<script type="text/javascript" src="js/time.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </body>
</html>
