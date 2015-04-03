<?php
	// Post Variables
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
	}
	else
	{
		echo "Error";
	}
	
?>

<?php	

	$id = $_GET["id"];
	
	include 'htmlHeader.php'
	
?>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerProfile.css" />
	<link type="text/css" rel="stylesheet" href="style/searchForm.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | <?php echo $fullName; ?></title>

  </head>
  
  <body>
  
	<?php include 'headerBar.php' ?>

	<div id="profileBox">
	
		<img src="<?php echo "teacherUploads/" . $profilePic;?>" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">
			<span style="color: white;">
				<?php
					echo $fullName;
				?>
			</span>
		</p>
		
		<p id="topicAreas">REQUESTED TOPICS:
			<span style="color: white;">
				<?php
					echo $topics;
				?>		
			</span>
		</p>
		
		<p id="ageGroup">AGE GROUP:
			<span style="color: white;">
				<?php
					echo $ageGroup;
				?>	
			</span>	
		</p>
		
		<p id="geographicLocation">LOCATION:
			<span style="color: white;">
				<?php
					echo $location;
				?>
			</span>
		</p>	
		
		<p id="aboutTeacher">ABOUT <?php echo $fNameCaps?>:</p>
		
		<p id="aboutParagraphTeacher">
			<?php
				echo $bio;
			?>
		</p>
		
		<div id="contactButton" onclick="javascript:location.href='login.php'">
		<div id="contactSpeaker"><a href="login.php">CONTACT THIS TEACHER</a></div>
		</div>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBar.php' ?>
	
  </body>
  
</html>