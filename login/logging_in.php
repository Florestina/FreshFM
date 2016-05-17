<?php
session_start();

	$return_url = base64_decode($_POST["return_url"]);

		$error = array(); //Create an array for errors
		
		//Include the connection files for SQL
		include '../config/con1.php';
		include '../config/con2.php';
		
		//Check to see if the Email field is empty
		if (empty($_POST['Email']))
		{
			$error[] = 'Please enter your username';
		}
		else
		{
		$user = $_POST['Email'];
		}
		
		//Check to see if the Password field is empty
		if (empty($_POST['Password']))
		{
			$error[] = 'Please enter your password';
		}
		else
		{
		$pass = md5($_POST['Password']);
		}
		
		//Run the loop if there are no empty fields
		if (empty($error))
		{
			//SQL to select the email used from the database
			$sql = "SELECT Email FROM users WHERE Email='$user'";
			$rs = mysqli_query($conn, $sql);
			if ($rs && mysqli_num_rows($rs) > 0)
			{
				//SQL to select the password used from the database
				$sql = "SELECT Password FROM users WHERE Password='$pass'";
				$rs = mysqli_query($conn, $sql);
				if ($rs && mysqli_num_rows($rs) > 0)
				{
					//SQL to select the power from the database alongside the email
					$sql = "SELECT Power FROM users WHERE Power < 4 AND Email='$user'";
					$rs = mysqli_query($conn, $sql);
					if ($rs && mysqli_num_rows($rs) > 0)
					{
						$row_rs = mysqli_fetch_assoc($rs);
						$res = $row_rs['Power'];
						
						//Create a session with some variables
						$_SESSION['user'] = $user;
						$_SESSION['Power'] = $res;
						
						//Include the disconnect files for SQL
						include '../config/discon.php';
						sleep(1);
						echo "You have logged in!";
						header('Location:'.$return_url);
					}
					/*else
					{
						//Redirect('ban.php', false);
					}*/
				}
				else
				{
					echo "Username or Password is incorrect!"; //Simple echo to tell the user if the username or password is incorrect from the inputs
				}
			}
			else
			{
				echo "Username or Password is incorrect!"; //Simple echo to tell the user if the username or password is incorrect from the inputs
			}
		}
		else
		{
			//This is where the array appears on the page as a list showing the user what error they have made
			foreach ($error as $key => $values) 
			{

				echo '<li>' . $values . '</li>';

			}
		}

?>
