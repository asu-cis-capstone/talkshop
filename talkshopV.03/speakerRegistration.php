<?php
    /*
     include('../local-connect.php');
     $fname1 = $_POST['firstname'];
     $fname2 = mysqli_real_escape_string($dbc,$fname1);
     $lname1 = $_POST['lastname'];
     $lname2 = mysqli_real_escape_string($dbc,$lname1);
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $org = $_POST['organization'];
     $line1 = $_POST['lineone'];
     $line2 = $_POST['linetwo'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $zip = $_POST['zip'];
     $phone = $_POST['phone'];
     $age = $_POST['agegroup'];
     $image = $_POST['fileToUpload'];
     
     
     $query = "INSERT INTO teachers(firstname, lastname, username, email, password, organization, addressone, addresstwo, city, state, zip, phone, agegroup, image)" .  "VALUES('$fname2','$lname2','$username', '$email','$password','$org', '$line1','$line2','$city', '$state', '$zip', '$phone','$age', '$image')";
     
     $result = mysqli_query($dbc, $query) or die('Unable to Connect to Database or the Registration is incomplete!');
     
     mysqli_close($dbc);
     */
?>




<?php include 'htmlHeader.php' ?>

	<!-- Link tag for teacherRegistration CSS -->
    <link type="text/css" rel="stylesheet" href="style/registration.css" />

    <!-- Web Page Title -->
    <title>TalkShop | Speaker Registration</title>

  </head>

  <body>
  
	<script type="text/javascript" language="JavaScript">
		function HidePart(d) { document.getElementById(d).style.display = "none";  }
		function ShowPart(d) { document.getElementById(d).style.display = "block"; }
		function CheckboxChecked(b,d)
			{
				if(b) { ShowPart(d); }
				else  { HidePart(d); }
			}
	</script>
	
	<script type="text/javascript">
		CheckboxChecked(document.myform.mycheckbox.checked,'checkboxdiv');;
	</script>
  
	<?php include 'headerBar.php' ?>
	
	<div id="speakerRegistrationTitle">SPEAKER REGISTRATION</div>
	
	<div id="registrationInstructions">
		To register without making a profile, please fill out the first section of this form.<br />
		To register and make an active profile, please check "Make Active Profile" and fill out the entire form.
	</div>
	
	<br />
	
		<form id="joinform" action="../confirm.htm" method="get">
				
					<!-- first name -->
					<input class="textFields" placeholder="First Name" type="text" id="firstname" name="firstname" />
					<br />
					
					<!-- last name -->
					<input class="textFields" placeholder="Last Name" type="text" id="lastname" name="lastname" />
					<br />
					
					<!-- email -->
					<input class="textFields" placeholder="Email Address" type="text" id="email" name="email" />
					<br />
					
					<!-- password -->
					<input class="textFields" placeholder="Password" type="password" id="password" name="password" />
					<br />
					
					<!-- confirm password -->
					<input class="textFields" placeholder="Confirm Password" type="password" id="reenter" name="reenter" />
					<br />
					
					<!-- address -->
					<input class="textFields" placeholder="Street Address 1" type="text" id="lineone" name="lineone" />
					<br />
					<input class="textFields" placeholder="Street Address 2" type="text" id="lineone" name="lineone" />
					<br />
					<input class="textFields" placeholder="City" type="text" id="city" name="city" />
					<br />
					<select class="textFields" id="state" name="state">
							<option value="">Select State...</option>
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
					<br>
					<input class="textFields" placeholder="Zip" type="text" id="zip" name="zip" />
					<br />
					
					<!-- phone -->
					<input class="textFields" placeholder="Phone Number" type="text" id="phone" name="phone" />
					<br />
					
					<!-- active profile? -->
					<span class="selectionTitle">Make Active Profile</span>
					<input type="checkbox" name="activeProfile" value="yes" onclick="CheckboxChecked(this.checked,'checkboxdiv')" style="margin-bottom: 15px; margin-top: 20px;">
					
					<!-- begin expanded form -->
					<div id="checkboxdiv" style="display:none;">
					
						<!-- profession -->
						<select class="textFields" name="profession">
							<option value="">Select Profession...</option>
							<option value="">Agriculture</option>
							<option value="">Architecture/Planning</option>
							<option value="">Arts</option>
							<option value="">Biological Sciences</option>
							<option value="">Business</option>
							<option value="">Communication</option>
							<option value="">Information Technology</option>
							<option value="">Education</option>
							<option value="">Engineering</option>
							<option value="">Environmental Sciences</option>
							<option value="">Healthcare</option>
							<option value="">Language and Literature</option>
							<option value="">Law</option>
							<option value="">Math and Statistics</option>
							<option value="">Mechanics/Repair</option>
							<option value="">Military Science</option>
							<option value="">Philosophy and Religion</option>
							<option value="">Physical Science</option>
							<option value="">Protective Services</option>
							<option value="">Psychology and Counseling</option>
							<option value="">Recreation and Fitness</option>
							<option value="">Sales</option>
							<option value="">Skilled Trade/Construction</option>
							<option value="">Social Sciences/Liberal Arts</option>
							<option value="">Social Services</option>
							<option value="">Transportation</option>
							<option value="">Other</option>
						</select><br />
						
						<!-- age group -->
						<select class="textFields" id="agegroup" name="agegroup">
							<option value="">Select Age Group...</option>
							<option value="preschool">Pre School</option>
							<option value="elementary">Elementary</option>
							<option value="middle">Middle School</option>
							<option value="high">High School</option>
							<option value="college">College</option>
							<option value="other">Other</option>
						</select>
						
						<!-- topic areas -->
						<p class="selectionTitle">SELECT YOUR TOPIC AREAS</p>
						<ul class="checkbox">
							<li><input type="checkbox" name="" value="">Agriculture<br /></li>
							<li><input type="checkbox" name="" value="">Art<br /></li>
							<li><input type="checkbox" name="" value="">Biological Sciences<br /></li>
							<li><input type="checkbox" name="" value="">Business<br /></li>
							<li><input type="checkbox" name="" value="">Communication<br /></li>
							<li><input type="checkbox" name="" value="">Information Technology<br /></li>
							<li><input type="checkbox" name="" value="">Education<br /></li>
							<li><input type="checkbox" name="" value="">Engineering<br /></li>
							<li><input type="checkbox" name="" value="">Environmental Science<br /></li>
							<li><input type="checkbox" name="" value="">Health<br /></li>
							<li><input type="checkbox" name="" value="">Language and Literature<br /></li>
							<li><input type="checkbox" name="" value="">Law<br /></li>
							<li><input type="checkbox" name="" value="">Philosophy and Religion<br /></li>
							<li><input type="checkbox" name="" value="">Physical Science<br /></li>
							<li><input type="checkbox" name="" value="">Psychology and Counseling<br /></li>
							<li><input type="checkbox" name="" value="">Recreation and Fitness<br /></li>
							<li><input type="checkbox" name="" value="">Skilled Trade and Construction<br /></li>
							<li><input type="checkbox" name="" value="">Social Sciences and Liberal Arts<br /></li>
							<li><input type="checkbox" name="" value="">Social Services<br /></li>
							<li><input type="checkbox" name="" value="">Transportation<br /></li>
							<li><input type="checkbox" name="" value="">Other<br /></li>
						</ul>
						
						<textarea id="bio" rows="7" cols="75" name="bio" placeholder="Bio and/or Additional Information"></textarea>
						
						<input class="textFields" type="url" name="url" placeholder="Facebook URL"><br />
						<input class="textFields" type="url" name="url" placeholder="LinkedIn URL"><br />
						<input class="textFields" type="url" name="url" placeholder="Google+ URL"><br />
						<input class="textFields" type="url" name="url" placeholder="Twitter URL"><br /><br />
					
					
					<form action="uploadImage.php" method="post" enctype="multipart/form-data">
							<span class="uploadTitle">UPLOAD PROFILE IMAGE</span>
								<br/>
							<input id="chooseFile" type="file" name="fileToUpload" id="fileToUpload">
								<br/>
							<input id="uploadButton" type="submit" value="UPLOAD IMAGE" name="submit">
								<br/>
					
					</form>
					
				</div>
				
		</form>
		
		<form id="">
			<input id="formSubmit" type="button" value="REGISTER AS A SPEAKER">
		</form>
		
		<br />
		<br />
		<br />
	
	
	<?php include 'bottomBarHome.php' ?>
	
  </body>

</html>