<?php 

	//PHP TO UPLOAD THE IMAGE

	$target_dir = "speakerUploads/";
	$randomNumber = rand(100000,999999);
	$target_file = $target_dir . $randomNumber . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo '<script>alert("File is not an image.")</script>';
			$uploadOk = 0;
		}
	}
	
	// Check if file already exists
	if (file_exists($target_file))
	{
		echo '<script>alert("Sorry, file already exists. Please re-name your file or choose another.")</script>';
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 1000000) 
	{
		echo '<script>alert("Sorry, your file is too large.")</script>';
		$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
	{
		echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		echo '<script>alert("Sorry, your file was not uploaded. Please go back and try again.")</script>';
		die();
		// if everything is ok, try to upload file
	} 
	else 
	{
		if (!(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)))
		{
			echo '<script>alert("Sorry, there was an error uploading your file. Please go back and try again.")</script>';
			die();
		}
	}

	// END PHP TO UPLOAD IMAGE
	
	
	// PHP TO WRITE TO DATABASE
	
    include('local-connect.php');
	
    $fname = mysqli_real_escape_string($dbc, ucfirst($_POST['firstname']));	
    $lname = mysqli_real_escape_string($dbc, ucfirst($_POST['lastname']));		
    $email = $_POST['email'];	
    $password = $_POST['pword'];	
    $address1 = ucwords($_POST['lineone']);	
    $address2 = ucwords($_POST['linetwo']);	
    $city = ucwords($_POST['city']);
    $state = $_POST['state'];
    $zip = $_POST['zip'];	
    $phone = $_POST['phone'];
	$profession = $_POST['profession'];
    $ageGroup = $_POST['agegroup'];
	
		if (isset($_POST['topic'][0]))
		{
			$topic1 = $_POST['topic'][0];
		}
		else
		{
			$topic1 = NULL;
		}

		if (isset($_POST['topic'][1]))
		{
			$topic2 = $_POST['topic'][1];
		}
		else
		{
			$topic2 = NULL;
		}		
	
		if (isset($_POST['topic'][2]))
		{
			$topic3 = $_POST['topic'][2];
		}
		else
		{
			$topic3 = NULL;
		}
	
	$bio = $_POST['bio'];
	$fbURL = $_POST['fburl'];
	$liURL = $_POST['liurl'];
	$gpURL = $_POST['gpurl'];
	$tURL = $_POST['turl'];
	
    $profilePic = $randomNumber . basename( $_FILES["fileToUpload"]["name"]);   
    
    $query = "INSERT INTO speakers(fname, lname, email, pword, address1, address2, city, state, zip, phone, profession, ageGroup, topic1, topic2, topic3, bio, fbURL, tURL, gpURL, liURL, profilePic)" . 
			 "VALUES('$fname','$lname','$email','$password','$address1','$address2','$city','$state','$zip','$phone','$profession','$ageGroup','$topic1','$topic2','$topic3','$bio','$fbURL','$tURL','$gpURL','$liURL','$profilePic')";
	
	
	//MAIL FUNCTION
	if($_POST) 
	{
		$subject = "Welcome to TalkShop!";
		
		$sentmessage = "Dear " . $fname . ",<br/><br/>Thank you for registering with TalkShop! You may now login at www.talk-shop.net using your email address and chosen password. 
						If you chose to create a profile, it will now be visible.<br/><br/>Happy Talking!<br/><br/>   -Team TalkShop";
		$message  = "<html><body><p>" . $sentmessage . "</p></body></html>";
				
		$headers  = "From: info@talk-shop.net\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		mail($email, $subject, $message, $headers);
	}

	
    $result = mysqli_query($dbc, $query) or die('Unable to Connect to Database or the Registration is incomplete!');
    
    mysqli_close($dbc);

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
			Thank you for joining TalkShop! Your registration form has been successfully submitted.
			<br />
			You will receive a confirmation email shortly.<br />
			<br />
			<input id="returnToTalkShop" type="button" value="Return to TalkShop" onclick="window.location.href='http://www.talk-shop.net'"/>
		</div>
	</div>
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>