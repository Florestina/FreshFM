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
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

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
          <a href="index.php"><img src="logos/freshfm-logo.png" class="u-max-full-width"/></a><br />
		  <a href="http://www.petroc.ac.uk"><img src="logos/petroc-logo.png" class="u-max-full-width"/></a><br />
		  <a href="https://www.facebook.com/pages/FreshFM/177483293397" target="_blank"><img src="logos/facebook.png" class="fb"/></a>
   	    </div>
		<div class="four columns">
		  <div class="cc_player" data-username="kyates">Loading Webplayer ...</div>
		</div>
	    <div class="two columns">
          <img src="logos/johnlemon-small.png" class="u-max-full-width"/>
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
              <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
              <li class="navbar-item"><a class="navbar-link" href="presenters.php">Presenters</a></li>
              <li class="navbar-item"><a class="navbar-link" href="songs.php">Songs</a></li>
              <li class="navbar-item"><a class="navbar-link" href="about.php">About</a></li>
              <li class="navbar-item"><a class="navbar-link" href="login/login.php">Login</a></li>
            </ul>
          <?php
            }
            else if($_SESSION['Power'] == 0)
            {
          ?>
              <ul class="navbar-list">
                <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
                <li class="navbar-item"><a class="navbar-link" href="presenters.php">Presenters</a></li>
                <li class="navbar-item"><a class="navbar-link" href="songs.php">Songs</a></li>
                <li class="navbar-item"><a class="navbar-link" href="about.php">About</a></li>
                <li class="navbar-item"><a class="navbar-link" href="admin_page.php">Admin Area</a></li>
                <li class="navbar-item"><a class="navbar-link" href="login/logging_out.php">Logout</a></li>
              </ul>
          <?php
            }
            else
            {
          ?>
              <ul class="navbar-list">
                <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
                <li class="navbar-item"><a class="navbar-link" href="presenters.php">Presenters</a></li>
                <li class="navbar-item"><a class="navbar-link" href="songs.php">Songs</a></li>
                <li class="navbar-item"><a class="navbar-link" href="about.php">About</a></li>
                <li class="navbar-item"><a class="navbar-link" href="staff_page.php">Staff Area</a></li>
                <li class="navbar-item"><a class="navbar-link" href="login/logging_out.php">Logout</a></li>
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
      <div class="two-thirds column" style="margin-top: 1%">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac pharetra ipsum. Curabitur efficitur imperdiet neque, et porta risus mollis id. Pellentesque dignissim nisi non quam ultricies, laoreet hendrerit quam viverra. Duis sed laoreet purus, eget hendrerit lacus. Aliquam suscipit tincidunt ipsum, sed cursus quam venenatis eu. Mauris gravida nulla et ornare malesuada. Mauris ligula felis, iaculis vel finibus vel, pulvinar sit amet enim. Fusce non feugiat est. Cras quis ipsum ut lectus placerat ullamcorper. Vivamus viverra gravida augue, et tincidunt leo auctor sit amet. Mauris ac mauris risus. Sed dignissim lectus ut feugiat blandit. Curabitur viverra, neque at semper efficitur, diam orci molestie ipsum, a lobortis metus augue vel eros. Quisque sit amet quam sit amet neque mollis elementum.</p>

		<p>Duis ultrices lorem quis volutpat iaculis. Ut nibh justo, dignissim pellentesque risus et, condimentum venenatis est. Cras ullamcorper tincidunt est, elementum ornare magna luctus sit amet. Nam nec cursus arcu. Pellentesque eu sagittis orci. Aliquam fermentum urna quis risus euismod, gravida semper enim pretium. Sed sed tortor dolor. Praesent volutpat sodales quam quis suscipit. Etiam ac nulla orci. Nulla vel euismod turpis. Curabitur lacinia sem vitae egestas lacinia. Vestibulum dictum tortor non est tempus posuere. Quisque et feugiat nunc, nec scelerisque lectus. Quisque posuere placerat tempor. Phasellus faucibus, nunc vitae ullamcorper luctus, sem erat vulputate quam, a ultricies ex ipsum sed magna. Nam vitae orci laoreet, tristique ligula vel, imperdiet elit.</p>

		<img src="https://baconmockup.com/800/200/" class="u-max-full-width"/>

		<p>Sed rutrum felis eget maximus consequat. Curabitur interdum massa in est tristique, sed sollicitudin nulla interdum. Duis nulla lectus, aliquet vel lectus ac, consectetur ultricies neque. Praesent metus nunc, fringilla quis ante eget, tincidunt egestas leo. Praesent semper est tortor, quis rhoncus risus tempor eu. Etiam nec nibh sodales, tristique lectus vel, bibendum libero. In gravida nulla vitae metus hendrerit, ut tristique diam efficitur. Nulla facilisi. Cras dolor lorem, pharetra a accumsan sed, tincidunt ut orci. Quisque pharetra justo vitae ex convallis ullamcorper. Quisque ante tortor, efficitur eget dictum non, porta eget est. Aenean aliquet velit ac maximus elementum.</p>
      </div>	
	  <div class="one-third column" style="margin-top: 1%">
      <a class="twitter-timeline"  href="https://twitter.com/freshpetroc" data-widget-id="729994221600509952">Tweets by @freshpetroc</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
          
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
