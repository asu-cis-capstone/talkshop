	<?php
	session_name("user");
	session_start("user");
	
	if (isset($_SESSION["user"]))
	{
		header('Location: index.php');
		exit;
	}
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
	
	<div id="title" onclick="javascript:location.href='index.php'">
		<img src="images/bluelogo.png" alt="logo" />
	</div>
  
	<div id="topBar">
	
		<div id="login">
				
			<nav>
			  <ul>
				<li id="login">
				  <a id="login-trigger" href="#"><div class="topBarText">LOGIN</div></a>
				  <div id="login-content">
				  
					<form action="loginProcess.php" method="post">
						<fieldset id="inputs">
							<input id="username" type="email" name="email" placeholder="Email Address" >   
							<input id="password" type="password" name="password" placeholder="Password" >
						</fieldset>
						<fieldset id="actions">
							<input type="submit" id="submit" value="LOGIN">
						</fieldset>
						<div id="loginErrors">
							<?php
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
										echo '<span class="logerr">Returned from loginProcess.php</span>';
									}
								}
							?>
						</div>
					</form>
				  </div>                     
				</li>
				<li id="signup">
				  <a href="register.php"><div class="topBarText">REGISTER</div></a>
				</li>
			  </ul>
			</nav>
					
		</div>
		
	</div>