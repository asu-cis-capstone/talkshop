<?php include 'htmlHeader.php' ?>

<?php
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
    $id= $_POST["id"];
    $sql = "SELECT * FROM speakers WHERE speakers.id = '" . $id . "'";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0)
    {
        
        $email = $row["email"];
    }
    else{
        echo "cannot be found";
        
    
    }
    
    ?>

	

	 <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="style/emailform.css" />
	
	<!-- JavaScript Tags -->
	<script type="text/javascript" src="js/focus.js"></script>
	<script type="text/javascript" src="js/validate.js"></script>
	
    <!-- Web Page Title -->
    <title>TalkShop Email Form</title>

  </head>
  
 <?php include 'headerBar.php' ?> 
 
  <body>
  
 <?php
 
if (isset($_SESSION["user"]))
     
{
 echo '<div id="emailformmessage">';
     echo 'Email Form';
  echo'</div>';
  
  echo'<div id="emailformmessage1">';
  echo 'Connect with this speaker by filling out the comments section.';
  echo'</div>';
  
  
	echo '<form id="emailform" action="confirm.php"  method="post">';
	
	
		echo '<p class="ef1"></p>';
				
				
				echo'<label for="name">Name:</label>';
				echo'<input class="textFields" placeholder="Your Name" type="text" id="name" name="name" autofocus required';
                 echo 'title="Name: 4-30 chars, u/l case letters and - and apostrophes only!"';
				echo 'pattern="[a-zA-Z- ]{4,30}" ';
				echo 'onfocus="namemsg()" ';
				echo '/>';
				echo '<br />';
    
            echo '<label for="email">Email:</label>';
				echo '<p id="ToEmail">';
                    echo $email;
                    echo '</p>';
    
				
				echo '<label for="email">Email:</label>';
				echo '<input class="textFields" placeholder="Email Address" type="email" id="email" name="email" ';
				 echo 'required ';
				 echo 'title="Valid email only - 50 chars max" ';
				echo 'pattern="[a-z0-9.$-]+@[a-z0-9-]+\.[a-z]{2,16}" ';
				echo 'maxlength="50"';
				echo 'onfocus="emailmsg()"';
				echo '/>';
				echo '<br />';
				
				
				
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
     
     
	?>
	
	<p id="jsmsgs"></p>
	
	
	
	</div>
		
	
	
	<?php include 'bottomBarFixed.php' ?>
	
  </body>

</html>