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
					<form>
						<fieldset id="inputs">
							<input id="username" type="email" name="email" placeholder="Email Address" required>   
							<input id="password" type="password" name="password" placeholder="Password" required>
						</fieldset>
						<fieldset id="actions">
							<input type="submit" id="submit" value="LOGIN">
						</fieldset>
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