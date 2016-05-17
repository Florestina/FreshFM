<?php

	//Create Connection
	$conn = new mysqli($servername, $username, $password);
	
	//Check Connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
?>