<!DOCTYPE html>
<html lang="en">
<head>
  <title>Da Vinci Code</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">    
<div class="col-md-8 col-md-offset-2"> 
 <div class="jumbotron" style="margin-top: 100px">
     <h1 class="text-center">Admin Login</h1>
     <form role="form" method="post" action="adminlogincheck.php">
    <div class="form-group">
          <label for="text">User ID:</label>
          <input type="text" class="form-control" placeholder="Enter User ID" name="u_id" required>
		  <br>
          <label for="text">Password:</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="pswd" required>
        </div>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
</div>  
</div>
</div>
</body>
</html>