<?php include 'htmlHeader.php' ?>
	
	

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
  <div id="emailformmessage">
      Email Form
  </div>
  
  <div id="emailformmessage1">
  Connect with this speaker by filling out the comments section.
  </div>
  
  
	<form id="emailform" action="confirm.php"  method="post">
	
	
		<p class="ef1"></p>
				
				
				<!-- name -->
				<label for="name">Name:</label>
				<input class="textFields" placeholder="Your Name" type="text" id="name" name="name"  value="testing" readonly
				autofocus
				required
				title="Name: 4-30 chars, u/l case letters and - and ' only!"
				pattern="[a-zA-Z-' ]{4,30}"
				onfocus="namemsg()"
				/>
				<br />
				<!-- email -->
				<label for="email">Email:</label>
				<input class="textFields" placeholder="Email Address" type="email" id="email" name="email" value="test" readonly
				required
				title="Valid email only - 50 chars max"
				pattern="[a-z0-9.$-]+@[a-z0-9-]+\.[a-z]{2,16}"
				maxlength="50"
				onfocus="emailmsg()"
				/>
				<br />
				
				<!-- comments -->
				
				<textarea id="comments" rows="5" cols="75" name="comments" placeholder="Enter Your Message Here"
					maxlength="1000"
					title="Comments:1-500 chars" 
					onfocus="commentsmsg()"></textarea>	
			</p>
			
			<input id="submitButton" type="submit" value="SUBMIT" name="submit">
								

			<p class="submit">
				<input type="submit" value="Send Email"  onfocus="sendmsg()"/>
				
				<span class="reset">
					<input type="reset" value="Clear Form!"  onclick="history.go(0)" onfocus="resetmsg()"
					/>
				</span>
			</p>
			

			
	</form>
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