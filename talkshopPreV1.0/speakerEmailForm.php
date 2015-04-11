<?php 
	include 'htmlHeader.php';
	
	$id = $_GET["id"];
?>

	 <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="style/emailform.css" />
	
	<!-- JavaScript Tags -->
	<script type="text/javascript" src="js/focus.js"></script>
	<script type="text/javascript" src="js/validate.js"></script>
	
    <!-- Web Page Title -->
    <title>TalkShop | Contact Speaker</title>

  </head>
  
 <?php 
 
	include 'headerBar.php';
 
    // MySQL Info
$servername = 'localhost';
$username = 'talkshopconnect';
$password = 'Asu275833';
$db = 'talkshop';

    $connection = mysqli_connect($servername, $username, $password, $db);
    
    if (!$connection)
    {
        die("Database Connection Error!");
    }
	
	
    $sql = "SELECT * FROM speakers WHERE id = '" . $id . "'";
    $result = $connection->query($sql);
    
	while($row = $result->fetch_assoc())
	{
        $toFullName = $row['fname'] . " " . $row['lname'];
		$toFirstName = $row['fname'];
		$receiverEmail = $row['email'];
		
		if (isset($_SESSION['user']))
		{
			$fromFullName = $_SESSION['userFullName'];
		}
    
	
	
		if (isset($_SESSION['user']))   
		{
			echo '<div id="emailformmessage">';
				echo 'New Message to ' . $toFirstName;
			echo'</div>';
			
			echo '<form id="emailform" action="confirm.php"  method="post">';
			
				echo '<div>';
					echo '<input type="hidden" name="hiddenEmail" value="' . $receiverEmail . '">';
				echo '</div>';
				
				echo '<div id="toEmail">';
					echo 'TO: ';
					echo '<input type="text" id="toEmail" name="toEmail" value="' . $toFullName . '" readonly>';
				echo '</div>';
				
				echo '<div id="toEmail">';
					echo 'FROM: ';
					echo '<input type="text" id="fromEmail" name="fromEmail" value="' . $fromFullName . '" readonly>';
				echo '</div>';
									
				echo '<textarea id="commentssection" rows="5" cols="75" name="comments" placeholder="Enter your message here..." autofocus ';
					echo 'title="Enter your message here!">';
				echo '</textarea>';
						
				echo '<input id="submitButton" type="submit" value="SEND" name="submit">';
				
			echo '</form>';
		}
		
		else
		{
			include 'speakerLoginEmailNotification.php';					 
		}
			 
	}
     
	?>
		
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>