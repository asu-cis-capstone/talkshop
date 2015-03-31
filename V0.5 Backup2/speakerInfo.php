<?php

	session_name();
	session_start();
	
	// Post Variables
	$command = $_GET["command"];

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
	
	if ($command == "Retrieve")
	{
			if (!$connection)
			{
				die("Error");
			}

			$sql = "SELECT * FROM speakers";
			$result = $connection->query($sql);

			if ($result->num_rows > 0) 
			{	
				echo '<div id="profileSpacer">';
				
				while($row = $result->fetch_assoc())
				{
					$id = $row["id"];
					
					$profilePic = $row["profilePic"];
					$fullName = $row["fname"] . " " . $row["lname"];
					$profession = $row["profession"];
					$ageGroup = $row["ageGroup"];
					$location = $row["city"] . ", " . $row["state"];
					
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
	
					
					// HTML for profiles.
					echo '<a href="speakerProfiles.php?id=' . $id . '">';
						echo '<div class="profileBox">';
							echo '<img src="speakerUploads/' . $profilePic . '" alt="Profile Image" height="200" width="200">';	
							echo '<p id="speakerName">';
								echo $fullName;
							echo '</p>';		
							echo '<p id="profession">';
								echo '<span class="boldText">PROFESSION: </span>' . $profession;
							echo '</p>	';		
							echo '<p id="topicAreas">';
								echo '<span class="boldText">TOPIC AREAS: </span>' . $topics;
							echo '</p>';		
							echo '<p id="ageGroup">';
								echo '<span class="boldText">TARGET AUDIENCE: </span>' . $ageGroup;
							echo '</p>';
							echo '<p id="geographicLocation">';
								echo '<span class="boldText">LOCATION: </span>' . $location;
							echo '</p>';
						echo '</div>';
					echo '</a>';
				}
				
				echo '</div>';
			} 
	}
	
?>