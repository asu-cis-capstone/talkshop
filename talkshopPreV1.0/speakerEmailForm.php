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
$username = 'root';
$password = '';
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
        $toFullName = $row["fname"] . " " . $row["lname"];
		
		if (isset($_SESSION["user"]))
		{
			$fromFullName = $_SESSION['userFullName'];
		}
    
	
	
		if (isset($_SESSION['user']))   
		{
			echo '<div id="emailformmessage">';
				echo 'Contact This Speaker';
			echo'</div>';
			
			echo '<form id="emailform" action="confirm.php"  method="post">';
			
				echo '<div>';
					echo '<input type="text" id="toEmail" name="toEmail" value="TO: ' . $toFullName . '" readonly>';
				echo '</div>';
				
				echo '<div id="ToEmail">';
					echo '<input type="text" id="toEmail" name="toEmail" value="FROM: ' . $fromFullName . '" readonly>';
				echo '</div>';
									
				echo '<textarea id="commentssection" rows="5" cols="75" name="comments" placeholder="Enter your message here..." autofocus ';
					echo 'title="Enter your message here!">';
				echo '</textarea>';
						
				echo '<input id="submitButton" type="submit" value="SEND" name="submit">';
				
			echo '</form>';
		}
		
		else
		{
			echo '<div id="error">';
			echo 'Please Login First to contact this person';
			echo '</div>';					 
		}
			 
	}
     
	?>
		
	
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>