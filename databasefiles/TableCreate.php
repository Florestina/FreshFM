<?php

	//Including the Connection files
	include "../config/con1.php";
	include "../config/con2.php";
	
	//SQL to create the users table
	$sql = "CREATE TABLE users (
			ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Forename VARCHAR(64) NOT NULL,
			Surname VARCHAR(64) NOT NULL,
			Email VARCHAR(64) NOT NULL,
			Password VARCHAR(64) NOT NULL,
			Power INT DEFAULT '2' NOT NULL
			)";
			
	//Check to see if it worked
	if (mysqli_query($conn, $sql))
	{
		echo "Table users created successfully";
	}
	else
	{
		echo "Error creating table: " . mysqli_error($conn);
	}
	
	//SQL to create the song table
	$sql = "CREATE TABLE songs (
			ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Artist VARCHAR(64) NOT NULL,
			Name VARCHAR(64) NOT NULL,
			Genre VARCHAR(64) NOT NULL
			)";
			
	//Check to see if it worked
	if (mysqli_query($conn, $sql))
	{
		echo "Table songs created successfully";
	}
	else
	{
		echo "Error creating table: " . mysqli_error($conn);
	}
	
	//SQL to create the requests table
	$sql = "CREATE TABLE requests (
			ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Artist VARCHAR(64) NOT NULL,
			Name VARCHAR(64) NOT NULL,
			Genre VARCHAR(64) NOT NULL
			)";
			
	//Check to see if it worked
	if (mysqli_query($conn, $sql))
	{
		echo "Table requests created successfully";
	}
	else
	{
		echo "Error creating table: " . mysqli_error($conn);
	}
	
	//Include the Disconnect file
	include "../config/discon.php";
	
?>