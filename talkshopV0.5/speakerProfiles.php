<!--
TALK SHOP! Speaker Profile Template (hard coded)
-->

<?php include 'htmlHeader.php' ?>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerProfile.css" />
	<link type="text/css" rel="stylesheet" href="style/searchForm.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | Speakers</title>

  </head>
  
  <body>
  
	<?php include 'headerBar.php' ?>
	
	<div id="searchForm">
	
	<p id="searchTitle">Search</p>
	
	<form>
	
	<input class="textFields" placeholder="Keyword..." type="text" id="search" name="search">
	
	<select class="textFields" id="state" name="state">
							<option value="">State</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
					</select>
					
					<select class="textFields" id="searchtopicAreas" name="topicArea">
							<option value="">Topic Areas</option>
							<option value="AG">Agriculture</option>
							<option value="BU">Business</option>
							<option value="HE">Health</option>
							<option value="PHR">Philosophy and Religion</option>
							<option value="RF">Recreation and Fitness</option>
							<option value="SS">Social Services</option>
							<option value="AR">Art</option>
							<option value="COM">Communication</option>
							<option value="EN">Engineering</option>
							<option value="LL">Language and Literature</option>
							<option value="PS">Physical Science</option>
							<option value="STC">Skilled Trade and Construction</option>
							<option value="TR">Transportation</option>
							<option value="BS">Biological Sciences</option>
							<option value="IT">Information Technology</option>
							<option value="ES">Environmental Science</option>
							<option value="LA">Law</option>
							<option value="PC">Psychology and Counseling</option>
							<option value="SSLA">Social Sciences and Liberal Arts</option>
					</select>
					
					<select class="textFields" id="searchTargetAudience" name="searchTargetAudience">
							<option value="">Target Audience</option>
							<option value="PS">Pre School</option>
							<option value="ES">Elementary</option>
							<option value="MS">Middle School</option>
							<option value="HS">High School</option>
							<option value="CS">College</option>
							
					</select>
					
					<div id="searchButton" onclick="javascript:location.href='search.php'">
					<div id="searchButtonText"><a href="search.php">Search</a></div>
					</div>
				
	</form>

	</div>

	<div id="profileBox">
	
		<img src="images/joeclark.png" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">Joseph Clark</p>
		
		<!--<p id="backToSearch"><a href="search.php">Search More Speakers</a></p>-->
		
		<p id="profession">Profession: Information Technology</p>
		
		<p id="topicAreas">Topic Areas: IT, Entrepreneurship, Education, Business, Analytics </p>
		
		<p id="ageGroup">Target Audience: College, High School</p>
		
		<p id="geographicLocation">Location: Phoenix, AZ</p>	
		
		<p id="aboutSpeaker">About Joseph Clark:</p>
		
		<p id="socialMediaLinks"><a href="https://facebook.com" onclick="window.open(this.href) ; return false;"><img src="images/facebook.png" alt="Facebook" height="25" width="25"></a>
		<a href="https://twitter.com" onclick="window.open(this.href) ; return false;"><img src="images/twitter.png" alt="Twitter" height="25" width="25"></a>
		<a href="https://plus.google.com" onclick="window.open(this.href) ; return false;"><img src="images/google.png" alt="GooglePlus" height="25" width="25"></a>
		<a href="https://linkedin.com" onclick="window.open(this.href) ; return false;"><img src="images/linkedin.png" alt="Linkedin" height="25" width="25"></a>
		</p>
		
		<p id="websiteURL">joeclark.net</p>
		
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
		
		<div id="contactButton" onclick="javascript:location.href='login.php'">
		<div id="contactSpeaker"><a href="login.php">Contact Joe Clark</a></div>
		</div>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBar.php' ?>
	
  </body>
 
 