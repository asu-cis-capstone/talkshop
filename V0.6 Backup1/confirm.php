<?php
    
    include('server-connect.php');

    $semail = $_POST['email'];
    $name = $_POST['name'];
    $comments = $_POST['comments'];
    
        
        $subject = "TalkShop: Someone has contacted you!";
        
        $sentmessage = $comments;
        
        
        
        $to =  $_POST['email']; // Add the email you want to send to. Can be pulled from submitting form as a variable
        
        
        
        $headers  = "From: ". $semail . "\r\n"; // Add the email you would like to send from after "From". EX: "From: Cats@SuperHappyAnimals.com\r\n"
        
        $headers .= "Reply-To: " . $semail . " \r\n";
        
        $headers .= "MIME-Version: 1.0\r\n";
        
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        
        
        $message  = "<html><body>";
        
        $message .= "<p>From: " . $name . "<br/>";
        
        $message .= "Email: " . $email . "<br/>";
        
        $message .= "Subject: " . $subject ."</p>";
        
        $message .= "<p>" . $sentmessage . "</p></body></html>";
        
        
        
        mail($to, $subject, $message, $headers);
        
        
        
        //    Debugging info
        
        //    echo $name . "<br/>";
        
        //    echo $email . "<br/>";
        
        //    echo $subject . "<br/>";
        
        //    echo $sentmessage . "<br/>";
        
        
        
        // Test email. Sends a blank email to "EMAILADDRESS" and shows as "FROMEMAILADDRESS". Uncomment and change emails to test the
        
        // mail function on the server
        
        
        
        // mail('EMAILADDress', 'blank test', 'test of blank email', 'From: FROMEMAILADDRESS');
        
        
    
    
    
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
			Message has been sent!
			<br />
			<input id="returnToTalkShop" type="button" value="Return to TalkShop" onclick="window.location.href='http://www.talk-shop.net'"/>
		</div>
	</div>
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>