<?php include 'htmlHeader.php' ?>
  
	<!-- Link tag for speakerProfile CSS -->
    <link type="text/css" rel="stylesheet" href="style/speakerListing.css" />
	<link type="text/css" rel="stylesheet" href="style/searchForm.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | Teachers</title>

  </head>
  
  <body>
  
	<?php include 'headerBarFixed.php' ?>
	
	<div id="filler"></div>
	
	<div id="searchForm">
	
		<p id="searchTitle">SEARCH TEACHERS</p>
		
			<form method="post" action="teacherProfilesSearch.php?go"  id="searchform">
			
			<input class="textFields" placeholder="Keyword..." type="text" id="search" name="search">
			
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
									<option value="ART">Art</option>
									<option value="BIO">Biological Sciences</option>
									<option value="BUS">Business</option>
									<option value="COM">Communication</option>
									<option value="IT">Information Technology</option>
									<option value="EDU">Education</option>
									<option value="ENGR">Engineering</option>
									<option value="ENVS">Environmental Science</option>
									<option value="HE">Health</option>
									<option value="LANGLIT">Language and Literature</option>
									<option value="LAW">Law</option>
									<option value="PHR">Philosophy and Religion</option>
									<option value="PHYS">Physical Science</option>
									<option value="PSY">Psychology and Counseling</option>
									<option value="RECFIT">Recreation and Fitness</option>
									<option value="CON">Skilled Trade and Construction</option>
									<option value="LIBART">Social Sciences and Liberal Arts</option>
									<option value="SOCSRV">Social Services</option>
									<option value="TRANS">Transportation</option>
									<option value="OTHER">Other</option>
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
	
	
			<?php
				session_name();
				session_start();

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
				

						if (!$connection)
						{
							die("Error");
						}

						$sql = "SELECT * FROM teachers";
						$result = $connection->query($sql);

						if ($result->num_rows > 0) 
						{	
							echo '<div id="profileSpacer">';
							
							while($row = $result->fetch_assoc())
							{
								$id = $row["id"];
								
								$profilePic = $row["profilePic"];
								$fullName = $row["fname"] . " " . $row["lname"];
								
								$ageGroup = $row["ageGroup"];
								$location = $row["city"] . ", " . $row["state"];
								
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
				
								
								// HTML for profiles.
								echo '<a href="fullTeacherProfiles.php?id=' . $id . '">';
									echo '<div class="profileBox">';
										echo '<img src="teacherUploads/' . $profilePic . '" alt="Profile Image" height="200" width="200">';	
										echo '<p id="speakerName">';
											echo $fullName;
										echo '</p>';		

										
										
										echo '<p id="topicAreas">';
											echo '<span class="boldText">TOPIC AREAS: </span>' . $topics;
										echo '</p>';		
										echo '<p id="ageGroup">';
											echo '<span class="boldText">TARGET AUDIENCE: </span>' . $ageGroup;
										echo '</p>';
										echo '<p id="geographicLocation">';
											echo '<span class="boldText">LOCATION: </span>' . $location;
										echo '</p>';
									echo '</div>';
								echo '</a>';
							}
							
							echo '</div>';
						} 
			?>
		
	
	<?php include 'bottomBarFixed.php' ?>
	
  </body>
 
 