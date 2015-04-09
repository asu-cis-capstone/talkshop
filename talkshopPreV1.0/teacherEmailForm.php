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
    <title>TalkShop Email Form</title>

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
	
	
    $sql = "SELECT * FROM teachers WHERE id = '" . $id . "'";
    $result = $connection->query($sql);
    
	while($row = $result->fetch_assoc())
	{
        $toFullName = $row["fname"] . " " . $row["lname"];
		
		if (isset($_SESSION['user']))   
		{
			$fromFullName = $_SESSION['userFullName'];
		}
    
	
	
		if (isset($_SESSION['user']))   
		{
			 echo '<div id="emailformmessage">';
				 echo 'Contact Your Speaker!';
			  echo'</div>';
			  
			  
			  
			  
				echo '<form id="emailform" action="confirm.php"  method="post">';
				
				
					
							
							
							
				

							echo '<p id="ToEmail">';
								echo 'To: ' . $toFullName;
							echo '</p>';
								
							echo '<p id="ToEmail">';
								echo 'From: ' . $fromFullName;
							echo '</p>';
				
							
							
							
							echo '<textarea id="commentssection" rows="5" cols="75" name="comments" placeholder="Enter Your Message Here" ';
								echo 'maxlength="1000"';
								echo 'title="Comments:1-500 chars" ';
								echo 'onfocus="commentsmsg()"></textarea>';
						echo '</p>';
						
						echo '<input id="submitButton" type="submit" value="SUBMIT" name="submit">';
				
							echo '</span>';
						echo '</p> ';
						

						
				echo '</form>';
		}
		else
		{
			echo 'Please Login First to contact this person';					 
		}
			 
	}
     
     
	?>
	
	<p id="jsmsgs"></p>
	
	
	
	</div>
		
	
	
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>