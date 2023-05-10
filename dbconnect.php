<?php
	// Connect to MySQL server
	$servername = "4307014_aromatherapybyvee";
	$username = "4307014_aromatherapybyvee";
	$password = "veronica4321";
	$databasename="4307014_aromatherapybyvee"
	


	$conn = mysqli_connect($servername, $username, $password,$databasename);

	
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	