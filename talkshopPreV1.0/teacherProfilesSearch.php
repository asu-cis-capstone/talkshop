<!--
TALK SHOP! Teacher Profile Listings after search
-->

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
		
			<form method="get" action="teacherProfilesSearch.php"  id="searchform">
			
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
									<option value="Agriculture">Agriculture</option>
									<option value="Architecture/Planning">Architecture/Planning</option>
									<option value="Arts">Arts</option>
									<option value="Biological Sciences">Biological Sciences</option>
									<option value="Business">Business</option>
									<option value="Communication">Communication</option>
									<option value="Information Technology">Information Technology</option>
									<option value="Education">Education</option>
									<option value="Engineering">Engineering</option>
									<option value="Environmental Sciences">Environmental Sciences</option>
									<option value="Healthcare">Healthcare</option>
									<option value="Language and Literature">Language and Literature</option>
									<option value="Law">Law</option>
									<option value="Math and Statistics">Math and Statistics</option>
									<option value="Mechanics/Repair">Mechanics/Repair</option>
									<option value="Military Science">Military Science</option>
									<option value="Philosophy and Religion">Philosophy and Religion</option>
									<option value="Physical Science">Physical Science</option>
									<option value="Protective Services">Protective Services</option>
									<option value="Psychology and Counseling">Psychology and Counseling</option>
									<option value="Recreation and Fitness">Recreation and Fitness</option>
									<option value="Sales">Sales</option>
									<option value="Skilled Trade/Construction">Skilled Trade/Construction</option>
									<option value="Social Sciences/Liberal">Social Sciences/Liberal Arts</option>
									<option value="Social Services">Social Services</option>
									<option value="Transportation">Transportation</option>
									<option value="Other">Other</option>
							</select>
							
							</br>
							
							<select class="textFields" id="searchTargetAudience" name="searchTargetAudience">
									<option value="">Target Audience</option>
									<option value="Pre School">Pre School</option>
									<option value="Elementary">Elementary</option>
									<option value="Middle School">Middle School</option>
									<option value="High School">High School</option>
									<option value="College">College</option>
									<option value="Other">Other</option>
							</select>
							
							<input type="submit" name="submit" id="searchButton" value="SEARCH">
							
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
						
						$keyword = $_GET['search'];
						$stateCode = $_GET['state'];
						$topicCode = $_GET['topicArea'];
						$audienceCode = $_GET['searchTargetAudience'];

						//SQL statement if the entire form is filled out
						$sql = "SELECT * FROM teachers
									WHERE CONCAT(fname, ' ', lname) LIKE '%" . $keyword . "%'
									OR city LIKE '%" . $keyword . "%'
									OR state LIKE '%" . $keyword . "%'
									OR topic1 LIKE '%" . $keyword . "%'
									OR topic2 LIKE '%" . $keyword . "%'
									OR topic3 LIKE '%" . $keyword . "%'
									OR ageGroup LIKE '%" . $keyword . "%'
								
								UNION 
								
									SELECT * FROM teachers
									WHERE state LIKE '%" . $stateCode . "%' 
								
								UNION 
								
									SELECT * FROM teachers
									WHERE topic1 LIKE '%" . $topicCode . "%' 
									OR topic2 LIKE '%" . $topicCode . "%'
									OR topic3 LIKE '%" . $topicCode . "%'
									
								UNION
								
									SELECT * FROM teachers
									WHERE ageGroup LIKE '%" . $audienceCode . "%'";
							
							//SQL statement if only keyword is searched
							if ($stateCode == NULL && $topicCode == NULL && $audienceCode == NULL)
							{
								$sql = "SELECT * FROM teachers
									WHERE CONCAT(fname, ' ', lname) LIKE '%" . $keyword . "%'
									OR city LIKE '%" . $keyword . "%'
									OR state LIKE '%" . $keyword . "%'
									OR topic1 LIKE '%" . $keyword . "%'
									OR topic2 LIKE '%" . $keyword . "%'
									OR topic3 LIKE '%" . $keyword . "%'
									OR ageGroup LIKE '%" . $keyword . "%'"; 
							}
							
							//SQL statement if everything but the keyword is searched
							if ($keyword == NULL)
							{
								$sql = "SELECT * FROM teachers
									WHERE state LIKE '%" . $stateCode . "%'
									
									UNION 
								
										SELECT * FROM teachers
										WHERE topic1 LIKE '%" . $topicCode . "%' 
										OR topic2 LIKE '%" . $topicCode . "%'
										OR topic3 LIKE '%" . $topicCode . "%'
									
									UNION
								
										SELECT * FROM teachers
										WHERE ageGroup LIKE '%" . $audienceCode . "%'"; 
							}
							
							//SQL statement if only state is searched
							if ($keyword == NULL && $topicCode == NULL && $audienceCode == NULL)
							{
									$sql = "SELECT * FROM teachers
									WHERE state LIKE '%" . $stateCode . "%'"; 
							}
							
							//SQL statement if only topic area is searched
							if ($keyword == NULL && $stateCode == NULL && $audienceCode == NULL)
							{
									$sql = "SELECT * FROM teachers
										WHERE topic1 LIKE '%" . $topicCode . "%' 
										OR topic2 LIKE '%" . $topicCode . "%'
										OR topic3 LIKE '%" . $topicCode . "%'"; 
							}
							
							//SQL statement if only target audience is searched
							if ($keyword == NULL && $stateCode == NULL && $topicCode == NULL)
							{
									$sql = "SELECT * FROM teachers
										WHERE ageGroup LIKE '%" . $audienceCode . "%'"; 
							}
							
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
						else
						{
							//NO RESULTS FOUND!
							echo "<div id=\"noResultsFound\">NO RESULTS FOUND <br/> Please try again.</div>";
						}
			?>

	<?php include 'bottomBarFixed.php' ?>
	
  </body>
 
 