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
    <title>TalkShop | Confirmation</title>

  </head>

  <body>
  
	<?php include 'headerBar.php' ?>
	<br />
	<br />
	
	<div id="confirmationHolder">
		<div id="confirmRegistrationTitle">CONFIRMATION</div>
		
		<div id="confirmMessage">
			Thank you for joining Talk Shop! Your registration form has been successfully submitted.
			<br />
			You will receive a confirmation email shortly.<br />
			<br />
			<input id="returnToTalkShop" type="button" value="Return to TalkShop" onclick="window.location.href='http://www.talk-shop.net'"/>
		</div>
	</div>
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>