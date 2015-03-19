<?php
	// Post Variables
	$selection = $_GET["selection"];
	$id = $_GET["id"];

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
	
	$sql = "SELECT * FROM teachers WHERE teachers.id = '" . $id . "'";
	$result = $connection->query($sql);
	
	
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc())
		{
			$profilePic = $row["profilePic"];
			$fullName = $row["fname"] . " " . $row["lname"];
			$fNameCaps = strtoupper($row["fname"]);

			$ageGroup = $row["ageGroup"];
			$location = $row["city"] . ", " . $row["state"];
			$bio = $row["bio"];
					
			$topic1 = $row["topic1"];
			$topic2 = $row["topic2"];
			$topic3 = $row["topic3"];
						
				// Place the correct commas and ampersands depending on the number of listed topics.
				if ($topic3 == NULL && $topic2 == NULL)
				{
					$topics = $topic1;
				}
				else if ($topic3 == NULL)
				{
					$topics = $topic1 . " & " . $topic2;
				}
				else
				{
					$topics = $topic1 . ", " . $topic2 . ", & " . $topic3;
				}
	
		}
		if ($selection == "profilePic")
		{
			echo "http://" . $_SERVER["SERVER_NAME"] . "/talkshop/images/" . $profilePic;
		}
		else if ($selection == "fullName")
		{
			echo $fullName;
		}
		else if ($selection == "fNameCaps")
		{
			echo $fNameCaps;
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
		else if ($selection == "bio")
		{
			echo $bio;
		}
	}
	else
	{
		echo "Error";
	}
	
?>