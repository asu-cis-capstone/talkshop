<!--
TALK SHOP! Speaker Profile Template (hard coded)
-->

<?php include 'htmlHeader.php' ?>

  <head>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerProfile.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | Speakers</title>

  </head>
  
  <body>
  
	<?php include 'headerBar.php' ?>

	<div id="profileBox">
	
		<img src="images/joeclark.png" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">Dr. Joseph Clark</p>
		
		<p id="backToSearch"><a href="search.php">Search More Speakers</a></p>
		
		<p id="profession">Profession: Information Technology</p>
		
		<p id="topicAreas">Topic Areas: IT, Entrepreneurship, Education, Business, Analytics </p>
		
		<p id="geographicLocation">Location: Phoenix, AZ</p>	
		
		<p id="aboutSpeaker">About Dr. Joseph Clark:</p>
		
		<p id="socialMediaLinks"><a href="https://facebook.com" onclick="window.open(this.href) ; return false;"><img src="images/facebook.png" alt="Facebook" height="25" width="25"></a>
		<a href="https://twitter.com" onclick="window.open(this.href) ; return false;"><img src="images/twitter.png" alt="Twitter" height="25" width="25"></a>
		<a href="https://plus.google.com" onclick="window.open(this.href) ; return false;"><img src="images/google.png" alt="GooglePlus" height="25" width="25"></a>
		<a href="https://linkedin.com" onclick="window.open(this.href) ; return false;"><img src="images/linkedin.png" alt="Linkedin" height="25" width="25"></a>
		</p>
		
		<p id="aboutParagraph">Joseph Clark is a Clinical Assistant Professor in the Information Systems department of Arizona State University’s 
		W. P. Carey School of Business. He received his PhD in Information Systems from the University of Southern California’s Marshall School 
		of Business in 2012, and completed a research postdoc in the College of Information Science and Technology at the University of Nebraska at 
		Omaha.  In addition, he holds an MBA from Tulane University and a BA in Communication from USC.
		Dr. Clark’s research in the business intelligence area focuses on how analytics impact organizational decision making and adaptive problem 
		solving strategies for turbulent business environments. He also has research interests around digital business models and the design of 
		digital capabilities. Before beginning his PhD, Dr. Clark served as a Lecturer in Business Computing and Statistics at the International 
		College of China Agricultural University (Beijing). In an earlier life, he was one of the first generation of web developers, having worked
		for several innovative companies including NBC and Disney before the first dot-com bubble burst in 2001. His teaching areas include data 
		analysis and visualization in business intelligence, data stream driven decision making, and emerging digital business models.</p>
		
		<p id="contactSpeaker"><a href="login.php">Contact Joe Clark</a></p>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBar.php' ?>
	
  </body>
 
 