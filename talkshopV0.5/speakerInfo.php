<?php

	session_name();
	session_start();
	
	// Post Variables
	//$selection = $_GET["selection"];
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
					
					$profilePic = $row["profilePic"];
					$fullName = $row["fname"] . " " . $row["lname"];
					$profession = $row["profession"];
					$topics = $row["topic1"] . ", " . $row["topic2"] . ", " . $row["topic3"];
					$ageGroup = $row["ageGroup"];
					$location = $row["city"] . ", " . $row["state"];
			
			
					echo '<div class="profileBox">';
						echo '<a href="speakerProfiles.php">';
							echo '<img src="images/' . $profilePic . '" alt="Profile Image" height="200" width="200">';
						echo '</a>';	
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
				}
				
				echo '</div>';
			} 
	}
	
?>