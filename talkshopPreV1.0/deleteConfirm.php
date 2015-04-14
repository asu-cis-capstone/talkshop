<!--
TALKSHOP! Delete Account Confirmation
-->

<?php
	session_name();
	session_start();
	
	include 'htmlHeader.php'
?>
<!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="style/emailform.css" />

	<title>Delete Confirmation</title>
	
	</head>
	
	<body>
	
	<?php
		include 'headerBarFixed.php'
	?>

	<div id="deleteAccountMessage">WE HATE TO SEE YOU GO</div>
	<div id="deleteAccountSubText">Please confirm that you would like to delete your account by clicking the appropriate button below.</div>

	<div id="registerSpeakerButton" onclick="javascript:location.href='deleteLogout.php?id=<?php echo $_SESSION['id']; ?>'">
		<div id="speaker">Yes, Delete my Account</div>
	</div>
	
	<div id="registerTeacherButton" onclick="javascript:location.href='index.php'">
		<div id="teacher">No, I'd Like to Stay</div>
	</div>
	
	<?php
	
		include 'bottomBarFixed.php'
	?>
	
	</body>

</html>