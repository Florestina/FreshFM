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
    <ul class="navbar-list">
	  <li class="navbar-item">
	    <a class="navbar-link">Home</a>
	  </li>
	  <li class="navbar-item">
	    <a class="navbar-link">Presenters</a>
	  </li>
	  <li class="navbar-item">
	    <a class="navbar-link">Songs</a>
	  </li>
	  <li class="navbar-item">
	    <a class="navbar-link" href="#">About</a>
	  </li>
	  <li class="navbar-item">
	    <a class="navbar-link">Login</a>
	  </li>
	</ul>
  </div>
  </nav>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 1%">
        <table class="u-full-width">
		  <thead>
		    <tr>
			  <th>Request</th>
			  <th>Artist</th>
			  <th>Song Name</th>
			  <th>Genre</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php

			$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

			include '/config/con1.php';
			include '/config/con2.php';
	
			$sql = "SELECT * FROM requests ORDER BY `Artist` ASC";
			$rs = mysqli_query($conn, $sql);
			while($row=mysqli_fetch_array($rs))
			{
		  ?>

		  <tr>
			<input type="hidden" name="return_url" value="<?php echo $current_url ?>" />
			<td><input type="radio" name="queue" value="<?php echo $row['ID'] ?>"></td>
			<td><?php echo $row['Artist'] ?></td>
			<td><?php echo $row['Name'] ?></td>
			<td><?php echo $row['Genre'] ?></td>
		</tr>	

		  <?php

			}
	
		  ?>
		  </tbody>
		</table>
	  </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
