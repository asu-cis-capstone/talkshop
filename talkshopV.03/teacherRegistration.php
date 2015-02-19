<!DOCTYPE html>

<!--
TALK SHOP!
-->

<html lang="en">
  	
  <head>
  
    <!-- Meta tag -->
	<meta name="robots" content="noindex, nofollow" />
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
    <title>TalkShop | Registration</title>

  </head>

  <body>
  
	<div id="title" onclick="javascript:location.href='index.php'">
		<img src="images/bluelogo.png" alt="logo" />
	</div>
  
	<div id="topBar">

	</div>
	
	<div id="registrationTitle">TEACHER REGISTRATION</div>
	
	<br />
	
	<form id="joinform" action="../confirm.htm" method="get">
				<p>
					<!-- first name -->
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="firstname" />
					<br />
					
					<!-- last name -->
					<label for="firstname">Last Name:</label>
					<input type="text" id="lastname" name="lastname" />
					<br />
					
					<!-- username --> 
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" />
					<br />
					
					<!-- password -->
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" />
					<br />
					
					<!-- reenter -->
					<label for="reenter">Re-enter Password:</label>
					<input type="password" id="reenter" name="reenter" />
					<br />
					
					<!-- organization -->
					<label for="organization">Organization:</label>
					<input type="text" id="organization" name="organization" />
					<br />
					
					<!-- address -->
					Street Address:
					<br />
					<label for="lineone">Line 1:</label>
					<input type="text" id="lineone" name="lineone" />
					<br />
					<label for="lineone">Line 2:</label>
					<input type="text" id="lineone" name="lineone" />
					<br />
					<label for="city">City</label>
					<input type="text" id="city" name="city" />
					<br />
					<label for="State">State</label>
					<select id="state" name="state">
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
					<br />
					<label for="state">Zip</label>
					<input type="text" id="zip" name="zip" />
					<br />
					
					<!-- phone -->
					<label for="phone">Phone Number:</label>
					<input type="text" id="phone" name="phone" />
					<br />
					
					<!-- email -->
					<label for="email">Email Address:</label>
					<input type="text" id="email" name="email" />
					<br />
					
					<!-- beer -->
					<label for="agregroup">Representing Age Group:</label>
					<select id="agegroup" name="agegroup">
						<option value="">Select an Age Group...</option>
						<option value="preschool">Pre School</option>
						<option value="elementary">Elementary</option>
						<option value="middle">Middle School</option>
						<option value="high">High School</option>
						<option value="college">College</option>
						<option value="other">Other</option>
					</select>
					<br />
				</p>
				
				<p class="submit">
					<input type="submit" value="Confirm"
					onclick="return a3Validate()"/>
				
					<span class="reset">
						<input type="reset" value="Clear" onclick="a3Focus()" />
					</span>
				</p>
		</form>
	

	
	<div id="bottomBarRegister">
		<div id="bottomBarText">&copy;2015 TalkShop | Made in Tempe, AZ</div>
	</div>
	
  </body>

</html>