<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../img/neon1.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="description" content="Campus Ambassador Program" />
    <title>Effulgence 2k17 || Campus Ambassador</title>
    <!-- Favicons-->
       <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />
    <meta property="og:title" content="Effulgence - 2017." />
    <meta property="og:url" content="https://www.effgknit.com/cap" />
    <meta property="fb:app_id" content="" />
    <meta property="og:description" content="We invite you to join Campus Ambassador Programme of Effulgence - 2017." />
    <meta property="og:site_name" content="Effulgence || Campus Ambassador" />


    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73" />
    <!-- CSS-->
    <link rel="stylesheet" href="css/materialize.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<style type="text/css">
		ul {
		display: block;
		list-style-type: disc;
		margin-top: 1em;
		margin-bottom: 1 em;
		margin-left: 0;
		margin-right: 0;
		padding-left: 40px;
	}
	</style> 
  </head>
  <body>
<?php include_once("../analyticstracking.php") ?>
  <?php
  if(isset($_GET['q1'])) {
	  $chk=$_GET['q1'];
	  if ($chk!=null) {
		echo "<script type='text/javascript'>alert('Thanks for Your Interest.Please check your email for further details.');</script>";
	  }
	}
	if(isset($_GET['cberror'])) {
	  $chk=$_GET['cberror'];
	  if ($chk==1 || $chk=='1' || $chk!=null) {
		echo "<script type='text/javascript'>alert('Page Refreshed, Please login again');</script>";
	  }
	}
  ?>
<header>

  <nav>
    <div class="nav-wrapper blue">
      <a href="#!" class="brand-logo">Effulgence'17</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        <li><a href="../">Home</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../event.php">Events</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="../about.php">About Us</a></li>
        <li><a href="../event.php">Events</a></li>
      </ul>
    </div>
  </nav>
</header>
<div class="container-fluid" style="margin-top:45px;">

</div>
<div class="container">
  <h4>Campus Ambassadors role.</h4>
  <p> The Campus Ambassador programme undertaken by <strong>Effulgence</strong>, KNIT Sultanpur primarily aims to incorporate participation from students spread across the nation in various colleges.

A Campus Ambassador is an official representative of <strong>Effulgence</strong> in his/her college and is the essential link between the two. As a Campus Ambassador you shall be coordinating with us  to ensure maximum participation at festival from your college. This can be achieved through: </p>
	<ul type="disc">
		<li>Word of Mouth</li>
		<li>Posters</li>
		<li>Online publicity of Effulgence through social media in your city and especially in your college</li>
		<li>Encouraging and facilitating participation from your college.</li>
		<li>Helping out Effulgence to reach out to your college in any manner you deem fit.</li>

	</ul>
<p><b>Task 1:</b></br>Do any of the three given below....</br>
* atleast 10 members participation from your college.</br>
* atleast 6 members and 2 more campus ambassadors from any other college.</br>
* find contacts of sponsors and help in providing sponsorship of min 20k</br>

<b>Task 2:</b></br> 
* Social media marketing and publicity of all the live and upcoming events.</br></br>

<b>Special Rewards (For innovative ideas of events and greater number of participation than given in tasks):</b></br>
* Goodies </br>
* More Coupons of Technical courses</br>



</p>




</div>
<div class="container">
  <h4>What you get?</h4>
  <ul>
     <li>Certificate of Appreciation</li>
<li>Registration fee 100% refundable</li>
    <li>Cash Prizes.</li>
    <li>Coupons of Technical courses</li>
  </ul>
</div>
<div class="container">
  <h4 style="background-color: ">How To Apply?</h4>
  <ul>
	  <li>Login to <a>www.effgknit.com</a> </li>
	  <li>Enter in Campus Ambassador Tab</li>
	  <li>Click on Apply for Campus Ambassador.</li>
	  <li>Submit the completed form.</li>
           <li>Click on Apply Now button.</li>
  </ul>
</div>
<div class="container">
<?php
session_start();
include '../dbConnection.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
	$id=$_SESSION['id'];
	//$result= mysqli_query($con,"SELECT * FROM user WHERE id = '$id'");
	$result= mysqli_query($con,"SELECT * FROM camp_reg WHERE fb_id = '$id'");
	$count=mysqli_num_rows($result);
	if($count!=0){
	//$data=mysqli_fetch_array($result);
	//var_dump($data);
	//if($data['role']==1 || $data['role']=='1') {
		$rol=$data['role'];
		
	echo '<p><a class="waves-effect waves-light btn" href="user.php" yellow>Thanks For Applying, Click Here To Proceed...</a></p>';
	}
	else {
	echo '<p><a class="waves-effect waves-light btn" href="http://effgknit.com/cap/form.php">Apply For Campus Ambassador</a></p>';
	}
}
else {
// FB login url starts
require_once 'facebook-sdk-v5/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '969125333230306', // Replace {app-id} with your app id
  'app_secret' => '1d275f75d4ad2955d195ce9035d0ce1f',
  
//'app_id' => '236379846773248', // Replace {app-id} with your app id
//'app_secret' => '3ac374d455827e56c475f24943875f94',

  'default_graph_version' => 'v2.9',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','user_posts', 'publish_actions']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://effgknit.com/cap/fb-callback.php', $permissions);

//FB login url Ends

echo '<p><a class="waves-effect waves-light btn modal-trigger" href="'.$loginUrl.'"> Apply with Facebook </a></p>';
}

?>
</div>
           
<?php include_once 'footer.php'; ?>
  <!--  Scripts-->
    <script src="../code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="../js/jquery.timeago.min.js" type="text/javascript"></script>
    <script src="../js/jquery-1.12.2.js" type="text/javascript" ></script>
    <script src="../js/materialize.js" type="text/javascript"></script>
    <script src="../js/init.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- script for modal -->
  <script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
    $(".button-collapse").sideNav();
  </script> 
  <!-- script for modal closed -->
</body>
</html>