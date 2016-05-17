<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Fresh FM</title>
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Scripts -->
  <script language="javascript" type="text/javascript" src="http://shoutcast.eu1.dribb.com:2199/system/player.js"></script>
  <script language="javascript" type="text/javascript" src="script/stickynav.js"></script>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Header
  ------------------------------------------------- -->
  <div class="container">
    <div class="section header" style="margin-top: 1%">
	  <div class="row">
        <div class="six columns">
          <a href="index.php"><img src="../logos/freshfm-logo.png" class="u-max-full-width"/></a><br />
		  <a href="http://www.petroc.ac.uk"><img src="../logos/petroc-logo.png" class="u-max-full-width"/></a><br />
		  <a href="https://www.facebook.com/pages/FreshFM/177483293397" target="_blank"><img src="../logos/facebook.png" class="fb"/></a>
   	    </div>
		<div class="four columns">
		  <div class="cc_player" data-username="kyates">Loading Webplayer ...</div>
		</div>
	    <div class="two columns">
          <img src="../logos/johnlemon-small.png" class="u-max-full-width"/>
        </div>
      </div>
	</div>
  </div>
  
  <!-- Navigation
  -------------------------------------------------- -->
  <nav class="navbar">
  <div class="container">
    <?php
            if(!isset($_SESSION['user']))
            {
          ?>
            <ul class="navbar-list">
              <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
              <li class="navbar-item"><a class="navbar-link" href="../presenters.php">Presenters</a></li>
              <li class="navbar-item"><a class="navbar-link" href="../songs.php">Songs</a></li>
              <li class="navbar-item"><a class="navbar-link" href="../about.php">About</a></li>
              <li class="navbar-item"><a class="navbar-link" href="login.php">Login</a></li>
            </ul>
          <?php
            }
            else if($_SESSION['Power'] == 0)
            {
          ?>
              <ul class="navbar-list">
                <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../presenters.php">Presenters</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../songs.php">Songs</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../about.php">About</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../admin_page.php">Admin Area</a></li>
                <li class="navbar-item"><a class="navbar-link" href="logging_out.php">Logout</a></li>
              </ul>
          <?php
            }
            else
            {
          ?>
              <ul class="navbar-list">
                <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../presenters.php">Presenters</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../songs.php">Songs</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../about.php">About</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../staff_page.php">Staff Area</a></li>
                <li class="navbar-item"><a class="navbar-link" href="../logging_out.php">Logout</a></li>
              </ul>
          <?php
            }
          ?>
  </div>
  </nav>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <p> Are you sure you want to log out? </p>
          <form method="post" action="logout.php">
            <input type="submit" name="logout" value="Logout">
            <input type="hidden" name="return_url" value="../index.php">
          </form>
    </div>
  </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
