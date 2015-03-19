<!--
TALK SHOP! Speaker Profile Listings
-->

<?php include 'htmlHeader.php' ?>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerListing.css" />
	<link type="text/css" rel="stylesheet" href="style/searchForm.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | Speaker Listings</title>

  </head>
  
  <body>
  
	<?php include 'headerBar.php' ?>
	
	<div id="searchForm">
	
		<p id="searchTitle">Search</p>
		
			<form method="post" action="search.php?go"  id="searchform">
			
			<input class="textFields" placeholder="Search" type="text" id="search" name="search">
			
			</br>
			
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
							
							</br>
							
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
							
							</br>
							
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

	<div class="profileBox">
	
		<img src="images/joeclark.png" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">Joseph Clark</p>
		
		<!--<p id="backToSearch"><a href="search.php">Search More Speakers</a></p>-->
		
		<p id="profession">Profession: Information Technology</p>
		
		<p id="topicAreas">Topic Areas: IT, Entrepreneurship, Education, Business, Analytics </p>
		
		<p id="ageGroup">Target Audience: College, High School</p>
		
		<p id="geographicLocation">Location: Phoenix, AZ</p>	
		
		
		</div>
		
		<div class="profileBox" id="profile2">
	
		<img src="images/bo.jpg" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">Barack Obama</p>
		
		<!--<p id="backToSearch"><a href="search.php">Search More Speakers</a></p>-->
		
		<p id="profession">Profession: Politics</p>
		
		<p id="topicAreas">Topic Areas: Education, Healthcare </p>
		
		<p id="ageGroup">Target Audience: College, High School</p>
		
		<p id="geographicLocation">Location: Washington, DC</p>	
		
		
		</div>
		
		<div class="profileBox" id="profile3">
	
		<img src="images/clinton.jpg" alt="Profile Image" height="200" width="200">
		
		<p id="speakerName">Hillary Clinton</p>
		
		<!--<p id="backToSearch"><a href="search.php">Search More Speakers</a></p>-->
		
		<p id="profession">Profession: Politics</p>
		
		<p id="topicAreas">Topic Areas: Education, Healthcare </p>
		
		<p id="ageGroup">Target Audience: College, High School</p>
		
		<p id="geographicLocation">Location: Washington, DC</p>	
		
		
		</div>

	</div>
	
	<br><br/>
	
	<?php include 'bottomBarFixed.php' ?>
	
  </body>
 
 