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
      <div class="twelve columns">
        <form method="post" action="">
          <input type="password" name="oldPass" placeholder="Old Password"> <br />
          <input type="password" name="newPass1" placeholder="New Password"> <br />
          <input type="password" name="newPass2" placeholder="Re-enter New Password"> <br />
          <input type="submit" name="submit" value="Change Password">
        </form>
      </div>  
    </div>
  </div>
  

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<!-- PHP
  -------------------------------------------------- -->
  <?php

  include 'config/con1.php';
  include 'config/con2.php';
  
  $error = array();
  
  if(isset($_POST['submit']))
  {
    if(empty($_POST['oldPass']))
      {
        $error[] = "Please Enter your old Password.";
      }
    else
      {
        $oldPass = $_POST['oldPass'];
      }
  
    if(empty($_POST['newPass1']))
      {
        $error[] = "Please enter a new Password.";
      }
    else
      {
        $newPass1 = $_POST['newPass1'];
      }
  
    if(empty($_POST['newPass2']))
      {
        $error[] = "Please re-enter your new Password.";
      }
    else
      {
        $newPass2 = $_POST['newPass2'];
      }
  
    if(empty($error))
      {
        $md5old = md5($oldPass);
    
        if($newPass1 === $newPass2)
          {
            $email = $_SESSION['user'];
            $sql = "SELECT Email FROM users WHERE Email = '$email' ";
            $res = mysqli_query($conn, $sql);
            if($res && mysqli_num_rows($res) > 0)
              {
                $sql = "SELECT Password FROM users WHERE Password = '$md5old'";
                $res = mysqli_query($conn, $sql);
                if($res && mysqli_num_rows($res) > 0)
                  {
                    $md5new = md5($newPass1);
                    $sql = "UPDATE users SET Password = '$md5new' WHERE Password = '$md5old'";
                    $res = mysqli_query($conn, $sql);
          
                    echo "Password Change Successful.";
                  }
                else
                  {
                    echo "Password is incorrect.";
                  }
              }
            else
              {
                echo "Email doesn't exist.";
              }
    
          }
        else
          {
            echo "New Passwords do not match.";
          }
    
    
      }
    else
      {
        foreach($error as $key => $values)
          {
            echo '<li>' . $values . '</li>';
          }
      }
  
    include 'config/discon.php';
  }
?>