<?php session_start();
if(!isset($_SESSION['id'])){
	header("location:index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da vinci 2k17</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="includes/custom.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1747479648815361";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include 'includes/nav.php' ?>
<div class="row">
<div class="col-md-6 col-md-offset-3 text-center">
<h1>Hints</h1>
<div class="fb-page" data-href="https://www.facebook.com/davincitvaran" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/davincitvaran"><a href="https://www.facebook.com/davincitvaran">Da- Vinci Code:Tvaran 2k16</a></blockquote></div></div>
</div>
</div>
</body>
</html>