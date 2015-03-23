<!--
TALK SHOP! Teacher Profiles
-->

<?php	
	$id = $_GET["id"];
?>

<?php include 'htmlHeader.php' ?>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerProfile.css" />
	<link type="text/css" rel="stylesheet" href="style/searchForm.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | <?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=fullName");?></title>

  </head>
  
  <body>
  
	<?php include 'headerBar.php' ?>

	<div id="profileBox">
	
		<img src="<?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=profilePic"); ?>" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=fullName");
				?>
			</span>
		</p>
		
		<p id="topicAreas">REQUESTED TOPICS:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=topics");
				?>		
			</span>
		</p>
		
		<p id="ageGroup">AGE GROUP:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=ageGroup");
				?>	
			</span>	
		</p>
		
		<p id="geographicLocation">LOCATION:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=location");
				?>
			</span>
		</p>	
		
		<p id="aboutTeacher">ABOUT <?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=fNameCaps"); ?>:</p>
		
		<p id="aboutParagraphTeacher">
			<?php
				echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/teacherProfileInformation.php?id=" . $id . "&selection=bio");
			?>
		</p>
		
		<div id="contactButton" onclick="javascript:location.href='login.php'">
		<div id="contactSpeaker"><a href="login.php">CONTACT THIS TEACHER</a></div>
		</div>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBar.php' ?>
	
  </body>