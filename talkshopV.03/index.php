<?php include 'htmlHeader.php' ?>

    <!-- Web Page Title -->
    <title>TalkShop</title>

  </head>

  <body>
	
	<?php include 'headerBar.php' ?>
	
	<div id="blackBox"></div>
	
	<div id="speakerButton" onclick="javascript:location.href='speakerProfiles.php'">
		<div id="speaker">Connect with Speakers</div>
	</div>
	
	<div id="teacherButton" onclick="javascript:location.href='teacherProfiles.php'">
		<div id="teacher">Connect with Teachers</div>
	</div>
	
	<div id="image">
		<img src="images/homepage.jpg" alt="image"/>
	</div>
	
	<div id="aboutSection">
		<div id="aboutUsTitle">WHAT IS TALKSHOP?</div>
		
		<div id="aboutUsDescriptionHolder">
			<div id="aboutUsDescriptionText">			
				TalkShop connects teachers and students with guest speakers.<br /><br />
				TalkShop aims to build a directory of ordinary, extraordinary people who would like to have the chance to reach out to students as guest speakers.
				Teachers can search for guest speakers based on topic, activity, and geographic area. Speakers will be able to see what kinds of talks teachers are
				requesting, filtered by subject area, age group, and time slot. If you'd like to get involved, please provide your contact information and tell us
				whether you're a teacher or a potential guest speaker.
			</div>
		</div>
		
		<div id="socialMediaHolder">
			<a href="https://www.facebook.com/talkshopco/" onclick="window.open(this.href); return false;"><img src="images/facebook.png" alt="facebook" /></a>
			<a href="https://www.twitter.com/talkshopco/" onclick="window.open(this.href); return false;"><img src="images/twitter.png" alt="twitter" /></a>
		</div>
		
	</div>
	
	<?php include 'bottomBarHome.php' ?>
	
  </body>

</html>