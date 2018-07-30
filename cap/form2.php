<?php
session_start();
ob_start();
include '../dbConnection.php';
$fbid=$_SESSION['id'];
$result= mysqli_query($con,"SELECT * FROM usercamp WHERE id = '$fbid' AND role=1 ") or die('Error in chking'.mysqli_error($con));
$count=mysqli_num_rows($result);
//var_dump($result);
if(!(isset($_SESSION['loggedin'])) || $count==1) {
	header('location:../cap');
	echo "how";
}
?>
<html lang="en">
<head>
    <link rel="icon" href="../images/logo.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="description" content="Campus Ambassador Program" />
    <title>Effulgence || Campus Ambassador</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />
    <meta property="og:title" content="Anubhuti - 2017." />
    <meta property="og:url" content="https://www.effgknit.com/cap" />
    <meta property="fb:app_id" content="969125333230306" />
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
      <a href="#!" class="brand-logo">Effulgence 2017</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        <li><a href="../">Home</a></li>
        <li><a href="../about.php">About Us</a></li>
        <li><a href="../event.php">Events</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="../about.php">About Us</a></li>
        <li><a href="../event.php">Events</a></li>
      </ul>
    </div>
  </nav>
</header>
<div class="container" style="margin-top:45px;">

   <div class="row">
    <form class="col s12" method="post" action="cam_reg.php" enctype="multipart/form-data">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="name" id="name" class="validate" autofocus required value="<?php echo $_SESSION['name']; ?> " "readonly" />
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
            <select name="gender" id="gender">
              <option value="" disabled selected></option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="transgender">Transgender</option>
            </select>
            <label for="gender">Gender</label>
         </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">account_balance</i>
        <input type="text" name="college" id="college" class="validate" required/>
        <label for="college">College</label>
        </div> 
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input name="contact" id="contact" type="tel" class="validate" maxlength='10' required/>
          <label for="contact">Contact No.</label>
        </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" id="email" class="validate" value="<?php echo $_SESSION['email']; ?>" required/>
        <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
       <!-- <i class="material-icons prefix">date_range</i>-->
            <select name="year" id="year">
              <option value="" disabled selected>Select your year</option>
              <option value="1">1st Year</option>
              <option value="2">2nd Year</option>
              <option value="3">3rd Year</option>
              <option value="4">4th Year</option>
            </select>
            <label for="year">Choose Your Year</label>
         </div>
        <div class="input-field col s12">
       <!-- <i class="material-icons prefix">event_seat</i>-->
        <input type="text" class="validate" name="position_in_college" id="position_in_college"/>
        <label for="position_in_college">Positions In College</label>
        </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">card_travel</i>
        <input type="text" class="validate" name="work_experience" id="work_experience"/>
        <label for="work_experience">Works Experience of any Technical Fest</label>
        </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
<label for="Why">Why you wanna Campus Ambassador???</label>
        <input type="text" class="validate" name="Why" id="Why" required/>
        
        </div>
        <p class="center"><button type="submit" class="waves-effect waves-light btn green" >Submit</button>&nbsp;<a type="button" class="modal-close waves-effect waves-light btn red">Not Now</a><br/><small>After clicking submit button you will accept all the <a href = "../downloads/TC_anubhuti.pdf">Terms & Conditions.</a>.</small></p>
    </form>
    </div>
</div>
</div>
           
<?php include_once 'footer.php'; ?>
  <!--  Scripts-->
    <script src="../code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/jquery.timeago.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.12.2.js" type="text/javascript" ></script>
    <script src="js/materialize.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
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