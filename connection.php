<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hackathon";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Database Connection failed: " . mysqli_connect_error());
	}
	// echo "<div class='bg bg-success'><center>Database Connected successfully</center></div>";
?>