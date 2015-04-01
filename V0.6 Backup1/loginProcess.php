<?php
	
	//TalkShop!
	//loginProcess.php
	
	// Set up database connection
	include('local-connect.php');
	
	// PHP variables for the HTML elements
	$email = $_POST['email'];
	$pword = $_POST['password'];
	
	
	
	
	// Build the email query FOR SPEAKERS AND TEACHERS TABLE
	$query = "SELECT * FROM speakers WHERE email = '$email'";
	$query2 = "SELECT * FROM teachers WHERE email = '$email'";
	
	// Run the query
	$result = mysqli_query($dbc, $query) or die('Email read error!');
	$result2 = mysqli_query($dbc, $query2) or die ('Email read error!');
	
	// Check to see if we got any rows
	if (mysqli_num_rows($result) == 0 && mysqli_num_rows($result2) == 0)
	{
		header('Location: index.php?rc=1');
		exit;
	}
	
	// Build the password query FOR SPEAKERS AND TEACHERS TABLE
	$query = "SELECT * FROM speakers WHERE email = '$email' AND pword = '$pword'";
	$query2 = "SELECT * FROM teachers WHERE email = '$email' AND pword = '$pword'";
	
	// Run the query
	$result = mysqli_query($dbc, $query) or die('Password read error!');
	$result2 = mysqli_query($dbc, $query2) or die('Password read error!');
	
	// Check to see if we got any rows
	if (mysqli_num_rows($result) == 0 && mysqli_num_rows($result2) == 0)
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
	if (mysqli_num_rows($result2) == 0)
	{
		$row = mysqli_fetch_array($result);
		$_SESSION['user'] = $row['fname'];
		header('Location: index.php');
		exit;
	}
	else
	{
		$row = mysqli_fetch_array($result2);
		$_SESSION['user'] = $row['fname'];
		header('Location: index.php');
		exit;
	}
	
	
	
	// This block of code must be the last block of code in this file.
	// Pass a return code of 3 back to login.php
	header('Location: index.php?rc=3');
	exit;
?>