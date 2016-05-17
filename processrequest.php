<?php

	$return_url = base64_decode($_POST["return_url"]);

	include '/config/con1.php';
	include '/config/con2.php';
	
	$id = $_POST['queue'];
		
	$sql = "DELETE FROM requests WHERE `ID` = '$id'";
	$rs = mysqli_query($conn, $sql);
	
	header('Location: '.$return_url);
	
?>