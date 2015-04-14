<?php
    
	session_name();
	session_start();
	
    include('server-connect.php');
	
	$receiverEmail = $_POST['hiddenEmail'];
	$receiverName = $_POST['toEmail'];
		
	$senderEmail = $_SESSION['email'];
	$senderName = $_SESSION['userFullName'];
	$senderMessage = $_POST['comments'];
		
	$subject = "New message from " . $senderName . " at TalkShop!";
			
	$sentmessage = "Dear " . $receiverName . ",<br/><br/>
						" . $senderName . " from TalkShop sent you the following message:<br/><br/>
						\"" . $senderMessage . "\"<br/><br/>
						Reply to: " . $senderEmail . " to contact " . $senderName . ".<br/><br/>
						Thank you for using TalkShop!";
							
	$message  = "<html><body><p>" . $sentmessage . "</p></body></html>";
					
	$headers  = "From: TalkShop Messenger <donotreply@talk-shop.net>\r\n";
	$headers .= "Reply-To: " . $senderEmail . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
	mail($receiverEmail, $subject, $message, $headers);
	
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
			Your message to <?php echo $receiverName; ?> has been sent!
			<br />
			<br />
			<input id="returnToTalkShop" type="button" value="Return to TalkShop" onclick="window.location.href='http://www.talk-shop.net'"/>
		</div>
	</div>
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>