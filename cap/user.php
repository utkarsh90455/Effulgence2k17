<?php
session_start();
ob_start();
//include '../dbConnection.php';
?>
<html lang="en">
<head>
    <link rel="icon" href="../images/logo.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-tap-highlight" content="no" />
    
    <title>Effulgence || Workshop</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />
    <meta property="og:title" content="Effulgence- 2017." />
    <meta property="og:url" content="https://www.effgknit.com/cap" />
    
    <meta property="fb:app_id" content="969125333230306" />
    
    <meta property="og:site_name" content="Effulgence || Campus " />


    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73" />
    <!-- CSS-->
     <link href="css/bootstrap.min.css" rel="stylesheet">
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
  <?php
  if(isset($_GET['q1'])) {
    $chk=$_GET['q1'];
    if ($chk!=null) {
    echo "<script type='text/javascript'>alert('Successfully Registered ...! Thanks for Registration. ');</script>";
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
      <a href="#!" class="brand-logo">Effulgence 2k17</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        <li><a href="../index.php">Home</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../event.php">Events</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="../about/">About Us</a></li>
        <li><a href="../events/">Events</a></li>
      </ul>
    </div>
  </nav>
</header>
 <div id="fb-root"></div>
<div class="container" style="margin-top:45px;">

   <div class="row">
   <center><h5>Share these Post to Your Timeline</h5></center>

    <div class="col-lg-6">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="../img/ef.jpg" width="300px" height="220px"alt="Card image cap">
  <center><div class="card-body">
    <h4 class="card-title">Effulgence 2k17</h4>
    <p class="card-text">Share our Website..</p>
  <div class="fb-share-button" data-href="http://effgknit.com" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Feffgknit.com%2F&amp;src=sdkpreparse">Share</a></div>
  </div></center>
</div>
</div>
<div class="col-lg-6">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="../img/ef.jpg" width="300px" height="220px"alt="Card image cap">
  <center><div class="card-body">
    <h4 class="card-title">Effulgence 2k17</h4>
    <p class="card-text">Share our Facebook Page...</p>
   <div class="fb-share-button" data-href="https://www.facebook.com/Effulgence2k17/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FEffulgence2k17%2F&amp;src=sdkpreparse">Share</a></div>
  </div></center>
</div>
  </div>
</div>          

</div>

    
<?php include_once 'footer.php'; ?>
  <!--  Scripts-->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=969125333230306";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script src="../code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/jquery.timeago.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.12.2.js" type="text/javascript" ></script>
    <script src="js/materialize.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
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