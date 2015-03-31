
<?php
    
    $to = $email;
    $subject = "Thank you for Registering with Talk Shop!";
    $message = wordwrap($message, 70, "Thank you for registering with Talk shop. more stuff here (whatever we deide on) ");
    $headers = 'From: info@talk-shop.com';
    
    
    
    
    mail($to, $subject, $message, $headers);
    
    
    
    
    
    ?>








<?php include 'htmlHeader.php' ?>

	<!-- Link tag for teacherRegistration CSS -->
    <link type="text/css" rel="stylesheet" href="style/registration.css" />

    <!-- Web Page Title -->
    <title>TalkShop | Speaker Registration</title>
	
	<!-- JavaScript Tags -->
	<script type="text/javascript" src="js/focus.js"></script>
	<script type="text/javascript" src="js/validate.js"></script>

  </head>

  <body onload="focus()">
  
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
	
		<form id="joinform" action="speakerConfirm.php" method="post" enctype="multipart/form-data">
				
			<!-- first name -->
					<input class="textFields" placeholder="First Name" type="text" id="firstname" name="firstname" 
					autofocus
					required
					title="First Name: 4-30 chars, u/l case letters and - and ' only."
					pattern="[a-zA-Z-' ]{4,30}"
					onfocus="fnamemsg()" />
					<br />
					
					<!-- last name -->
					<input class="textFields" placeholder="Last Name" type="text" id="lastname" name="lastname"
					required
					title="Last Name: 4-30 chars, u/l case letters and - and ' only."
					pattern="[a-zA-Z-' ]{4,30}"
					onfocus="lnamemsg()"	/>
					<br />
					
					<!-- email -->
					<input class="textFields" placeholder="Email Address" type="text" id="email" name="email" 
					required
					title="Valid email only - 50 chars max."
					pattern="[a-z0-9.$-]+@[a-z0-9-]+\.[a-z]{2,16}"
					maxlength="50"
					onfocus="emailmsg()" />
					<br />
					
					<!-- password -->
					<input class="textFields" placeholder="Password" type="password" id="pword" name="pword" 
					required
					title="Password: 5-15 chars, numbers, u/l case letters and -, _, ! $ only."
					pattern="[a-zA-Z0-9-_!$]{5,15}"
					onchange="form.reenter.pattern=this.value;"
					onfocus="passwordmsg()"/>
					<br />
					
					<!-- confirm password -->
					<input class="textFields" placeholder="Confirm Password" type="password" id="reenter" name="reenter"
					required
					title="Passwords must match!"
					onfocus="reentermsg()" />
					<br />
					
					<!-- address -->
					<input class="textFields" placeholder="Street Address 1" type="text" id="lineone" name="lineone" 
					required 
					title="Please enter the street address at which you reside." 
					onfocus="addmsg()" />
					<br />
					<input class="textFields" placeholder="Street Address 2" type="text" id="linetwo" name="linetwo" />
					<br />
					<input class="textFields" placeholder="City" type="text" id="city" name="city" required title="Please enter the city in which you reside." onfocus="citymsg()" />
					<br />
					<select class="textFields" id="state" name="state" required title="Please select the state in which you reside." onfocus="statemsg()">
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
					<input class="textFields" placeholder="Zip" type="text" id="zip" name="zip" 
					required
					maxlength="5"
					title="Please enter the zip code of the city in which you reside."
					onfocus="zipmsg()"/>
					<br />
					
					<!-- phone -->
					<input class="textFields" placeholder="Phone Number" type="tel" id="phone" name="phone"
					required
					maxlength="15"
					title="Please enter a valid phone number up to 15 characters."
					onfocus="phonemsg()"
					/>
					<br />
					
					<!-- active profile? -->
					<span class="selectionTitle">Make Active Profile</span>
					<input type="checkbox" id="activeProfile" name="activeProfile" value="yes" onclick="CheckboxChecked(this.checked,'checkboxdiv')" 
					title="Check this box to create a listing." onfocus="checkboxmsg()" style="margin-bottom: 15px; margin-top: 20px;">
					
					<!-- begin expanded form -->
					<div id="checkboxdiv" style="display:none;">
					
					<!-- profession -->
						<select class="textFields" id="profession" name="profession"
						required
						title="Please select your profession."
						onfocus="professionmsg()">
							<option value="">Select Profession...</option>
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
						</select><br />
						
						<!-- age group -->
						<select class="textFields" id="agegroup" name="agegroup"
						required
						title="Please select your intended audience."
						onfocus="agemsg()">
							<option value="">Select Age Group...</option>
							<option value="Pre School">Pre School</option>
							<option value="Elementary">Elementary</option>
							<option value="Middle School">Middle School</option>
							<option value="High School">High School</option>
							<option value="College">College</option>
							<option value="Other">Other</option>
						</select>
						
						<!-- topic areas -->
						<p class="selectionTitle">SELECT YOUR EXPERT TOPIC AREAS</p>
						<ul class="checkbox">
							<li><input type="checkbox" name="topic[]" value="Agriculture">Agriculture<br /></li>
							<li><input type="checkbox" name="topic[]" value="Art">Art<br /></li>
							<li><input type="checkbox" name="topic[]" value="Biological Sciences">Biological Sciences<br /></li>
							<li><input type="checkbox" name="topic[]" value="Business">Business<br /></li>
							<li><input type="checkbox" name="topic[]" value="Communication">Communication<br /></li>
							<li><input type="checkbox" name="topic[]" value="Information Technology">Information Technology<br /></li>
							<li><input type="checkbox" name="topic[]" value="Education">Education<br /></li>
							<li><input type="checkbox" name="topic[]" value="Engineering">Engineering<br /></li>
							<li><input type="checkbox" name="topic[]" value="Environmental Science">Environmental Science<br /></li>
							<li><input type="checkbox" name="topic[]" value="Health">Health<br /></li>
							<li><input type="checkbox" name="topic[]" value="Language and Literature">Language and Literature<br /></li>
							<li><input type="checkbox" name="topic[]" value="Law">Law<br /></li>
							<li><input type="checkbox" name="topic[]" value="Philosophy">Philosophy<br /></li>
							<li><input type="checkbox" name="topic[]" value="Physical Science">Physical Science<br /></li>
							<li><input type="checkbox" name="topic[]" value="Psychology">Psychology<br /></li>
							<li><input type="checkbox" name="topic[]" value="Fitness">Fitness<br /></li>
							<li><input type="checkbox" name="topic[]" value="Construction">Construction<br /></li>
							<li><input type="checkbox" name="topic[]" value="Liberal Arts">Liberal Arts<br /></li>
							<li><input type="checkbox" name="topic[]" value="Social Services">Social Services<br /></li>
							<li><input type="checkbox" name="topic[]" value="Transportation">Transportation<br /></li>
							<li><input type="checkbox" name="topic[]" value="Other">Other<br /></li>
						</ul>
						
						<textarea id="bio" rows="7" cols="75" name="bio" placeholder="Bio and/or Additional Information"></textarea>
						
						<input class="textFields" type="url" name="fburl" placeholder="Facebook URL"><br />
						<input class="textFields" type="url" name="liurl" placeholder="LinkedIn URL"><br />
						<input class="textFields" type="url" name="gpurl" placeholder="Google+ URL"><br />
						<input class="textFields" type="url" name="turl" placeholder="Twitter URL"><br /><br />
					
					

						<span class="uploadTitle">UPLOAD PROFILE IMAGE</span>
						<br/>
						<span id="">Note: Please upload a .jpg, .jpeg, .png, or .gif image with an equal width and height.<br/></span>
						<input id="chooseFile" type="file" name="fileToUpload" id="fileToUpload">
						<br/>


					
				</div>
				
		</form>
		
		<input id="formSubmit" type="submit" form="joinform" value="REGISTER AS A SPEAKER" title="Click here or press 'Enter' to submit your info!"
		onfocus="signmsg()" onclick="return validate()"/>
		
		<br />
		<br />
		<br />
	
	
	<?php include 'bottomBarHome.php' ?>
	
  </body>

</html>