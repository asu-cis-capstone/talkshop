<?php
	
	//TalkShop!
	//loginProcess.php
	
	// Set up database connection
	include('local-connect.php');
	
	// PHP variables for the HTML elements
	$email = $_POST['email'];
	$pword = $_POST['password'];
	
	// Build the email query
	$query = "SELECT * FROM users WHERE Email = '$email'";
	
	// Run the query
	$result = mysqli_query($dbc, $query) or die('Email read error!');
	
	// Check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: index.php?rc=1');
		exit;
	}
	
	// Build the password query
	$query = "SELECT * FROM users WHERE email = '$email' AND pword = '$pword'";
	
	// Run the query
	$result = mysqli_query($dbc, $query) or die('Password read error!');
	
	// Check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: index.php?rc=2');
		exit;
	}
	
	// At this point we can verify a username and password combo
	
	// Close the database connection
	mysqli_close($dbc);
	
	// Start a PHP session
	session_name();
	session_start();
	
	// Get and store our PHP session variables
	$row = mysqli_fetch_array($result);
	$_SESSION['user'] = $row['FName'];
	header('Location: index.php');
	exit;
	
	// This block of code must be the last block of code in this file.
	// Pass a return code of 3 back to login.php
	header('Location: login.php?rc=3');
	exit;
?>