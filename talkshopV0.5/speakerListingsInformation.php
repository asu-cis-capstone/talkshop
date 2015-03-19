<?php
	session_name();
	session_start();

	$command = $_GET["command"];

	// MySQL Info
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'talkshop';
	
	// Connection
	$connection = mysqli_connect($servername, $username, $password, $db);
	
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
					echo '<div class="profileBox">';
						echo '<a href="speakerProfiles.php">';
							echo '<img src="' . file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?selection=profilePic") . '" alt="Profile Image" height="200" width="200">';
						echo '</a>';	
						echo '<p id="speakerName">';
							echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?selection=fullName");
						echo '</p>';		
						echo '<p id="profession">';
							echo '<span class="boldText">PROFESSION: </span>' . file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?selection=profession");
						echo '</p>	';		
						echo '<p id="topicAreas">';
							echo '<span class="boldText">TOPIC AREAS: </span>' . file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?selection=topics");
						echo '</p>';		
						echo '<p id="ageGroup">';
							echo '<span class="boldText">TARGET AUDIENCE: </span>' . file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?selection=ageGroup");
						echo '</p>';
						echo '<p id="geographicLocation">';
							echo '<span class="boldText">LOCATION: </span>' . file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?selection=location");
						echo '</p>';
					echo '</div>';
				}
				
				echo '</div>';
			} 
	}
	
?>