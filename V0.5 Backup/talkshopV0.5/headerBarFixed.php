	<?php
	session_name();
	session_start();
	?>
	
	<script>
		$(document).ready(function()
		{
			$('#login-trigger').click(function()
			{
				$(this).next('#login-content').slideToggle();
				$(this).toggleClass('active');          
	
				if ($(this).hasClass('active')) $(this).find('span')
				else $(this).find('span')
			})
		});
	</script>
	
	<div id="titleFixed" onclick="javascript:location.href='index.php'">
		<img src="images/bluelogo.png" alt="logo" />
	</div>
		
		<?php
			if (isset($_SESSION["user"])) //THIS CODE FOR USERS THAT ARE LOGGED IN!
			{
				echo '<div id="topBarFixed">';
					echo '<div id="login">';
						echo '<nav id="settingsDropDown">';
						  echo '<ul>';
							echo '<li id="login">';
							  echo '<a id="login-trigger" href="#"><div class="topBarText">SETTINGS <i class="fa fa-angle-double-down"></i></div></a>';
							  echo '<div id="login-content">';
								echo '<div id="logoutButton" onclick="window.open(\'logout.php\',\'_self\')">';
									echo '<p class="settingsDropDownText">LOGOUT</p>';
								echo '</div>';
								echo '<div id="deleteProfileButton" onclick="window.open(\'#\',\'_self\')">';
									echo '<p class="settingsDropDownText">DELETE ACCOUNT</p>';
								echo '</div>';
							  echo '</div> ';                  
							echo '</li>';
						  echo '</ul>';
						echo '</nav>';			
					echo '</div>';
					
					echo '<div id="welcomeBanner">';	
						$upperCaseName = $_SESSION['user'];
						$upperCaseName = strtoupper($upperCaseName);
						echo "WELCOME, " . $upperCaseName . "!";
					echo '</div>';
				echo '</div>';
			}
			
			else //THIS CODE FOR USERS THAT ARE *NOT* LOGGED IN!
			{	
				echo '<div id="topBarFixed">';
				
					echo '<div id="login">';
							
						echo '<nav id="loginDropDown">';
						  echo '<ul>';
							echo '<li id="login">';
							  echo '<a id="login-trigger" href="#"><div class="topBarText">LOGIN</div></a>';
							  echo '<div id="login-content">';
							  
								echo '<form action="loginProcess.php" method="post">';
									echo '<fieldset id="inputs">';
										echo '<input id="username" type="email" name="email" placeholder="Email Address" >';
										echo '<input id="password" type="password" name="password" placeholder="Password" >';
									echo '</fieldset>';
									echo '<fieldset id="actions">';
										echo '<input type="submit" id="submit" value="LOGIN">';
									echo '</fieldset>';
									echo '<div id="loginErrors">';

											if (isset($_GET["rc"]))
											{
												if ($_GET["rc"] == 1)
												{
													echo '<span class="logerr">*Invalid Email Address</span>';
												}
											
												if ($_GET["rc"] == 2)
												{
													echo '<span class="logerr">*Invalid Password</span>';
												}
												
												if ($_GET["rc"] == 3)
												{
													echo '<span class="logerr">*Returned from loginProcess.php</span>';
												}
											}

									echo '</div>';
								echo '</form>';
							  echo '</div>  ';                   
							echo '</li>';
							echo '<li id="signup">';
							  echo '<a href="register.php"><div class="topBarText">REGISTER</div></a>';
							echo '</li>';
						  echo '</ul>';
						echo '</nav>	';					
					echo '</div>';
				echo '</div>';
			}
		?>