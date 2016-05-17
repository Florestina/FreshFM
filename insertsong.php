<?php

	if(isset($_POST['submit']))
	{
		$artist = $_POST['artist'];
		$song = $_POST['song'];
		$genre = $_POST['genre'];
		
		include '/config/con1.php';
		include '/config/con2.php';
		
		$sql = "INSERT INTO songs (`Artist`, `Name`, `Genre`) VALUES ('".$artist."', '".$song."', '".$genre."')";
		$rs = mysqli_query($conn, $sql);
		
		include '/config/discon.php';
	}

?>

<form method="post" action="">
	<input type="text" name="artist" placeholder="Artist">
	<input type="text" name="song" placeholder="Song Name">
	<input type="text" name="genre" placeholder="Genre">
	<input type="submit" name="submit" value="Add Song">
</form>