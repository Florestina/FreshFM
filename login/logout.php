<?php
	session_start();

	$return_url = $_POST['return_url'];
	session_destroy();

	header('Location: '.$return_url);
?>