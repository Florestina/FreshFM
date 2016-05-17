<?php

	include "../config/con1.php";
	include "../config/con3.php";

	//SQL to create the database
	$sql = "CREATE DATABASE FreshFM";
	
	//Check to see if it worked
	if (mysqli_query($conn, $sql))
	{
		echo "Database FreshFM created successfully";
	}
	else
	{
		echo "Error creating database: " . mysqli_error($conn);
	}
	
	include "../config/discon.php";
	
?>