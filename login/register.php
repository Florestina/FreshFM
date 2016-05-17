<?php session_start();
  if(!isset($_SESSION['Power']))
  {
    header('Location: ../index.php');
  }

  if(!$_SESSION['Power'] == 0)
  {
    header('Location: ../index.php');
  }
?>
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
                <li class="navbar-item"><a class="navbar-link" href="logging_out.php">Logout</a></li>
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
        <!-- Form to allow user input for creation of user accounts -->
        <form method="post" action="">
          <input type="text" name="forename" placeholder="Forename"> <br />
          <input type="text" name="surname" placeholder="Surname"> <br />
          <input type="text" name="email" placeholder="E-mail Address"> <br />
          <input type="password" name="password" placeholder="Password"> <br />
          <input type="password" name="password2" placeholder="Re-enter password"> <br />
          <input type="submit" name="register" value="Register">
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
  if(isset($_POST['register']))
  {
    $error = array(); //An array to hold any errors is initiated
    
    if(empty($_POST['forename'])) //Each if(empty) checks to see if it's respective field in the form is empty
    {             //The name of the field in the form is the name inside the $_POST['']
      $error[] = "Forename is empty "; //If they are empty, an error is added to the array
    }
    else
    {
      $fore=$_POST['forename']; //If they are not empty, the user value is assigned to a variable
    } 
      //See comments above for each of the below if(empty)..else statements
    if(empty($_POST['surname']))
    {
      $error[] = "Surname is empty ";
    }
    else
    {
      $sur=$_POST['surname'];
    }
    
    if(empty($_POST['password']))
    {
      $error[] = "Password is empty ";
    }
    else
    {
      $pass=$_POST['password'];
    }
    
    if(empty($_POST['password2']))
    {
      $error[] = "Re-enter Password is empty ";
    }
    else
    {
      $pass2=$_POST['password2'];
    }
    
    if(empty($_POST['email']))
    {
      $error[] = "E-mail is empty ";
    }
    else
    {
      $email=$_POST['email'];
    }
    
    include '../config/con1.php'; //These two files allow database connection
    include '../config/con2.php';
    
    if(empty($error)) //If the error array is empty...
    {
      if($pass === $pass2) //... and the two input passwords match each other...
      {
        
        $sql="SELECT email FROM test WHERE email='$email'"; //This SQL checks to see if the email address is already registered
        $rs = mysqli_query($conn, $sql);
        if($rs && mysqli_num_rows($rs) > 0) //If the SQL query returns a value, it gives an error and stops any further actions happening
        {
          echo "E-mail already registered";
        }
        else
        {
          $passMD = md5($pass); //If the email isn't registered, it encrypts the password with md5()
          $sql="INSERT INTO users (ID, Forename, Surname, Email, Password)
          VALUES (' ', '$fore', '$sur', '$email', '$passMD')"; //This SQl string inserts all relevant data into the table, the ' ' being the ID which auto increments
          mysqli_query($conn, $sql);
          
        ?>
          <script>
            alert("User Registered!");
          </script>
        <?php
        
          include '../config/discon.php'; // Disconnects from the database
          
        }
        
      }
      else
      {
        echo "Passwords do not match"; // If the two entered passwords don't match, it won't register the user
      }
    }
    else //If there were any errors in the error array, it won't allow the registration and will output the errors that were found
    {
      foreach($error as $key => $values)
      {
        echo '<li>' . $values . '</li>';
      }
    }
  }

?>
