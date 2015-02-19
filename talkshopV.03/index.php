<!DOCTYPE html>

<!--
TALK SHOP!
-->

<html lang="en">
  	
  <head>
  
    <!-- Meta tag -->
    <meta charset="utf-8" />
	
	<!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="style/style.css" />
	
	<!-- Link tag for JavaScript -->
	<script type="text/javascript" src="js/js.js"></script>
		
	<!-- Link tag for Google hosted jQuery Library -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<!-- Link tag for Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	
	<!-- Link tag for favicon -->
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <!-- Web Page Title -->
    <title>TalkShop</title>

  </head>

  <body>
	
	<script>
		$(document).ready(function(){
		$('#login-trigger').hover(function(){
		$(this).next('#login-content').slideToggle();
		$(this).toggleClass('active');          
    
		if ($(this).hasClass('active')) $(this).find('span')
		else $(this).find('span')
		})
		});
	</script>
	
	<div id="title" onclick="javascript:location.href='index.php'">
		<img src="images/bluelogo.png" alt="logo" />
	</div>
  
	<div id="topBar">
	
		<div id="login">
				
			<nav>
			  <ul>
				<li id="login">
				  <a id="login-trigger" href="#"><div class="topBarText">LOGIN</div></a>
				  <div id="login-content">
					<form>
						<fieldset id="inputs">
							<input id="username" type="email" name="email" placeholder="Email Address" required>   
							<input id="password" type="password" name="password" placeholder="Password" required>
						</fieldset>
						<fieldset id="actions">
							<input type="submit" id="submit" value="LOGIN">
						</fieldset>
					</form>
				  </div>                     
				</li>
				<li id="signup">
				  <a href="register.php"><div class="topBarText">REGISTER</div></a>
				</li>
			  </ul>
			</nav>
					
		</div>
		
	</div>

	
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
	
	<div id="bottomBar">
		<div id="bottomBarText">&copy;2015 TalkShop</div>
		<div id="version">Release 0.3</div>
	</div>
	
  </body>

</html>