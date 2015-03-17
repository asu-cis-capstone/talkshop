<?php
	// Post Variables
	$selection = $_GET["selection"];

	// MySQL Info
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'talkshop';
	
	// Connection
	$connection = mysqli_connect($servername, $username, $password, $db);
	
	if (!$connection)
	{
		die("Database Connection Error!");
	}
	
	$sql = "SELECT * FROM speakers";
	$result = $connection->query($sql);
	
	
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc())
		{
			$profilePic = $row["profilePic"];
			$fullName = $row["fname"] . " " . $row["lname"];
			$profession = $row["profession"];
			$topics = $row["topic1"] . ", " . $row["topic2"] . ", " . $row["topic3"];
			$ageGroup = $row["ageGroup"];
			$location = $row["city"] . ", " . $row["state"];
	
		}
		if ($selection == "profilePic")
		{
			echo "http://" . $_SERVER["SERVER_NAME"] . "/talkshop/images/" . $profilePic;
		}
		else if ($selection == "fullName")
		{
			echo $fullName;
		}
		else if ($selection == "profession")
		{
			echo $profession;
		}
		else if ($selection == "topics")
		{
			echo $topics;
		}
		else if ($selection == "ageGroup")
		{			
			echo $ageGroup;				
		}
		else if ($selection == "location")
		{
			echo $location;
		}
	}
	else
	{
		echo "Error";
	}
	
?>