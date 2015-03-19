<!--
TALK SHOP! Speaker Profiles
-->

<?php	
	$id = $_GET["id"];
?>

<?php include 'htmlHeader.php' ?>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerProfile.css" />
	<link type="text/css" rel="stylesheet" href="style/searchForm.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | <?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=fullName"); ?></title>

  </head>
  
  <body>
  
	<?php include 'headerBar.php' ?>

	<div id="profileBox">
	
		<img src="<?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=profilePic"); ?>" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=fullName");
				?>
			</span>
		</p>
		
		<p id="profession">PROFESSION:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=profession");
				?>
			</span>
		</p>
		
		<p id="topicAreas">TOPIC AREAS:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=topics");
				?>		
			</span>
		</p>
		
		<p id="ageGroup">TARGET AUDIENCE:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=ageGroup");
				?>	
			</span>	
		</p>
		
		<p id="geographicLocation">LOCATION:
			<span style="color: white;">
				<?php
					echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=location");
				?>
			</span>
		</p>	
		
		<p id="aboutSpeaker">ABOUT <?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=fNameCaps"); ?>:</p>
		
		<p id="socialMediaLinks">
			<a href="<?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=fbURL"); ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-facebook-square fa-2x"></i></a>
			<a href="<?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=tURL"); ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-twitter-square fa-2x"></i></a>
			<a href="<?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=gpURL"); ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-google-plus-square fa-2x"></i></a>
			<a href="<?php echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=liURL"); ?>" onclick="window.open(this.href) ; return false;"><i class="fa fa-linkedin-square fa-2x"></i></a>
		</p>
		
		<p id="aboutParagraph">
			<?php
				echo file_get_contents("http://" . $_SERVER["SERVER_NAME"] . "/talkshop/speakerProfileInformation.php?id=" . $id . "&selection=bio");
			?>
		</p>
		
		<div id="contactButton" onclick="javascript:location.href='login.php'">
		<div id="contactSpeaker"><a href="login.php">CONTACT THIS SPEAKER</a></div>
		</div>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBar.php' ?>
	
  </body>
 
 