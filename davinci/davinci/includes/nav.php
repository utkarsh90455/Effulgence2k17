<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="question.php">
	  DaVinci 2k17
	  <!-- <img alt="Da Vinci 2k17" src="../img/neon1.png"> -->
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-left">
	<img class="img-circle" src="https://graph.facebook.com/<?php echo $_SESSION['id']; ?>/picture" width=50px height=50px />
	<li><a href="view.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
	</ul>
      <ul class="nav navbar-nav navbar-right">
	    
        <li><a href="question.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
		<li><a href="rules.php"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Rules</a></li>
		<li><a href="leaderboard.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Leaderboard</a></li>
		<!--<li><a href="hints.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Hints</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="view.php"><span class="glyphicon glyphicon-search" aria-hidden="true"> View</a></li>
			<li><a href="logout.php"><span class=" glyphicon glyphicon-off" aria-hidden="true"> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
