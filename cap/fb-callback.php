<?php
// CAP FB CALLBACK
session_start();
ob_start();
include '../dbConnection.php';
require_once 'facebook-sdk-v5/autoload.php';
echo "Here-1<br>";
$fb = new Facebook\Facebook([
  'app_id' => '969125333230306', // Replace {app-id} with your app id
  'app_secret' => '1d275f75d4ad2955d195ce9035d0ce1f',

//'app_id' => '236379846773248', // Replace {app-id} with your app id
//'app_secret' => '3ac374d455827e56c475f24943875f94',

  'default_graph_version' => 'v2.9',
  ]);

$helper = $fb->getRedirectLoginHelper();
$_SESSION['FBRLH_state']=$_GET['state'];

try {
  $accessToken = $helper->getAccessToken('http://effgknit.com/cap/fb-callback.php');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  header("http://effgknit.com/cap/index.php?cberror=1");
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  header("Location:http://effgknit.com/cap/index.php?cberror=2");
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
//$tokenMetadata->validateAppId('1805599833020979'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
//$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
	header("Location:http://effgknit.com/cap/index.php?cberror=3");
    exit;
  }

  echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());
}

echo $_SESSION['fb_access_token'] = (string) $accessToken;
echo '<br>';
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email', $accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  header("http://effgknit.com/cap/index.php?cberror=4");
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  header("Location:http://effgknit.com/cap/index.php?cberror=5");
  exit;
}

$user = $response->getGraphUser();


//echo 'Name: ' . $user['name'];
// OR
$id=$user->getId();
$name=$user->getName();
$email=$user['email'];
 echo 'Name: ' .$name.'<br>';
 echo 'Id: ' . $id.'<br>';
 echo 'Email: '.$email.'<br>';
 echo $_SESSION['loggedin']=true;
 echo $_SESSION['name']=$name;
 echo $_SESSION['id']=$id;
 echo $_SESSION['email']=$email;

$result= mysqli_query($con,"SELECT * FROM usercamp WHERE id = '$id'");
if(mysqli_affected_rows($con) == 0) {
	$q=mysqli_query($con,"INSERT INTO usercamp (id,name,email) VALUES ('$id','$name','$email')") or die('Error in FB user reg'.mysqli_error($con));
	echo 'done';
	header("Location:http://effgknit.com/cap/index.php");
}
else {
	header("Location:http://effgknit.com/cap/index.php");
}

//header('Location: http://www.effgknit.com/cap/index.php');

// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: http://example.com/members.php');

?>