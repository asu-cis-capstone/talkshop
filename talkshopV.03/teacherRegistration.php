<!--
TALK SHOP! Teacher Registration Form
-->

<?php include 'htmlHeader.php' ?>

  <head>
  
	<!-- Link tag for teacherRegistration CSS -->
    <link type="text/css" rel="stylesheet" href="style/teacherRegistration.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | Registration</title>

  </head>

  <body>
  
	<?php include 'headerBar.php' ?>
	
	<div id="teacherRegistrationTitle">TEACHER REGISTRATION</div>
	
	<br />
	
	<form id="joinform" action="../confirm.htm" method="get">
				<p>
					<!-- first name -->
					<input placeholder="First Name" type="text" id="firstname" name="firstname" />
					<br />
					
					<!-- last name -->
					<!--<label for="firstname">Last Name:</label>-->
					<input placeholder="Last Name" type="text" id="lastname" name="lastname" />
					<br />
					
					<!-- username --> 
					<!--<label for="username">Username:</label>-->
					<!--<input placeholder="Username" type="text" id="username" name="username" />
					<br />-->
					
					<!-- email -->
					<!--<label for="email">Email Address:</label>-->
					<input placeholder="Email Address" type="text" id="email" name="email" />
					<br />
					
					<!-- password -->
					<!--<label for="password">Password:</label>-->
					<input placeholder="Password" type="password" id="password" name="password" />
					<br />
					
					<!-- reenter -->
					<!--<label for="reenter">Re-enter Password:</label>-->
					<input placeholder="Re-enter Password" type="password" id="reenter" name="reenter" />
					<br />
					
					<!-- organization -->
					<!--<label for="organization">Organization:</label>-->
					<input placeholder="Organization" type="text" id="organization" name="organization" />
					<br />
					
					<!-- address -->
					<!--<label for="lineone">Line 1:</label>-->
					<input placeholder="Street Address 1" type="text" id="lineone" name="lineone" />
					<br />
					<!--<label for="lineone">Line 2:</label>-->
					<input placeholder="Street Address 2" type="text" id="lineone" name="lineone" />
					<br />
					<!--<label for="city">City</label>-->
					<input placeholder="City" type="text" id="city" name="city" />
					<br />
					<!--<label for="State">State</label>-->
					<select id="state" name="state">
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
					<br>
					<!--<label for="state">Zip</label>-->
					<input placeholder="Zip" type="text" id="zip" name="zip" />
					<br />
					
					<!-- phone -->
					<!--<label for="phone">Phone Number:</label>-->
					<input placeholder="Phone Number" type="text" id="phone" name="phone" />
					<br />
					
					<!-- age group -->
					<!--<label for="agregroup">Representing Age Group:</label>-->
					<select id="agegroup" name="agegroup">
						<option value="">Select an Age Group</option>
						<option value="preschool">Pre School</option>
						<option value="elementary">Elementary</option>
						<option value="middle">Middle School</option>
						<option value="high">High School</option>
						<option value="college">College</option>
						<option value="other">Other</option>
					</select>	
				</p>
				
				<form action="uploadImage.php" method="post" enctype="multipart/form-data">
						Upload Profile Image
						<br/>
						<input type="file" name="fileToUpload" id="fileToUpload">
						<br/>
						<input type="submit" value="Upload Image" name="submit">
						<br/>
						
					<p class="submit">
						<input type="submit" value="REGISTER"
						onclick="return a3Validate()"/>
						<!--<span class="reset">
							<input type="reset" value="Clear" onclick="a3Focus()" />
						</span>-->
					</p>
				</form>
				
		</form>
	
	<?php include 'bottomBarHome.php' ?>
	
  </body>

</html>