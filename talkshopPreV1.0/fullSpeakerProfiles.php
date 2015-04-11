<!--
TALK SHOP! Full Speaker Profiles
-->

<?php
	// Post Variables
	$id = $_GET["id"];

	// MySQL Info
$servername = 'localhost';
$username = 'talkshopconnect';
$password = 'Asu275833';
$db = 'talkshop';

	
	// Connection
	$connection = mysqli_connect($servername, $username, $password, $db);
	
	if (!$connection)
	{
		die("Database Connection Error!");
	}
	
	$sql = "SELECT * FROM speakers WHERE speakers.id = '" . $id . "'";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc())
		{
			$profilePic = $row["profilePic"];
			$fullName = $row["fname"] . " " . $row["lname"];
			$fNameCaps = strtoupper($row["fname"]);
			$profession = $row["profession"];
			$ageGroup = $row["ageGroup"];
			$location = $row["city"] . ", " . $row["state"];
			$bio = $row["bio"];
			
				$fbURL = $row["fbURL"];
				$tURL = $row["tURL"];
				$gpURL = $row["gpURL"];
				$liURL = $row["liURL"];
					
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
	
		<img src="<?php echo "speakerUploads/" . $profilePic; ?>" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">
			<span style="color: white;">
				<?php
					echo $fullName;
				?>
			</span>
		</p>
		
		<p id="profession">PROFESSION:
			<span style="color: white;">
				<?php
					echo $profession;
				?>
			</span>
		</p>
		
		<p id="topicAreas">TOPIC AREAS:
			<span style="color: white;">
				<?php
					echo $topics;
				?>		
			</span>
		</p>
		
		<p id="ageGroup">TARGET AUDIENCE:
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
		
		<p id="aboutSpeaker">ABOUT <?php echo $fNameCaps; ?>:</p>
		
		<p id="socialMediaLinks">
			
			<?php 
			if ($fbURL != null || $fbURL != "")
			{
				?><a href="<?php echo $fbURL; ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-facebook-square fa-2x"></i></a><?php
			}
			
			if ($tURL != null || $tURL != "")
			{
				?><a href="<?php echo $tURL; ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-twitter-square fa-2x"></i></a><?php
			}
			
			if ($gpURL != null || $gpURL != "")
			{
				?><a href="<?php echo $gpURL; ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-google-plus-square fa-2x"></i></a><?php
			}
			
			if ($liURL != null || $liURL != "")
			{
				?><a href="<?php echo $liURL; ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-linkedin-square fa-2x"></i></a><?php
			}
			?>
			
		</p>
		
		<p id="aboutParagraph">
			<?php
				echo $bio;
			?>
		</p>
		
		<div id="contactButton" onclick="javascript:location.href='<?php echo 'speakerEmailForm.php?id=' . $id ?>'">
			<div id="contactSpeaker">CONTACT THIS SPEAKER</div>
		</div>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBarFixed.php' ?>
	
  </body>
 
 