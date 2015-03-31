
//TalkShop Validation Javascript

function validate() {
	// Section one of form.
	var firstname 	 	= 			document.getElementById("firstname").value;
	var lastname 	 	= 			document.getElementById("lastname").value;
	var email    		= 			document.getElementById("email").value;
	var pword		=				document.getElementById("pword").value;
	var reenter 		= 			document.getElementById("reenter").value;
	var lineone 		= 			document.getElementById("lineone").value;
	var linetwo 		= 			document.getElementById("linetwo").value;
	var city	 		= 			document.getElementById("city").value;
	var state	 		= 			document.getElementById("state").value;
	var zip		 		= 			document.getElementById("zip").value;
	var phone	 		= 			document.getElementById("phone").value;

	// Section two of form.
	var agegroup	= 			document.getElementById("agegroup").value;
	var topicarea   = 			document.getElementsByName("topicarea");
	var image		=			document.getElementById("image");
	
	// This variable will be set to true if an element fails validation.
	var failed = false;
	
	// This is the message that will appear on screen.
	var warning = "Please fill in/fix/select"
	
	// These variables will be used to validate password and email. 
	var dot = 0;
	var space = 0;
	var atSign = 0;
	
	// Floating focus variables.
	var f1 = 0;
	var f2 = 0;
	var f3 = 0;
	var f4 = 0;
	var f5 = 0;
	var f6 = 0;
	var f7 = 0;
	var f8 = 0;
	var f9 = 0;
	var fa = 0;
	
	// firstname
	if (firstname=="") 
	{
		document.getElementById("firstname").style.backgroundColor="#FF6666";
		f1 = 1;
		failed = true;
		warning = warning + "\n  First Name";
	}
	
	else
	{
		if(firstname.trim().length < 1 || firstname.trim().length > 30)
		{
			document.getElementById("firstname").style.backgroundColor="#FF6666";
			document.getElementById("firstname").value="";
			f1 = 1;
			failed = true;
			warning = warning + "\n  First Name: 1 to 30 chars - cannot be all spaces!";
		}
		else
		{
			document.getElementById("firstname").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// lastname
	if (lastname=="") 
	{
		document.getElementById("lastname").style.backgroundColor="#FF6666";
		f2 = 1;
		failed = true;
		warning = warning + "\n  Last Name";
	}
	
	else
	{
		if(lastname.trim().length < 1 || lastname.trim().length > 30)
		{
			document.getElementById("lastname").style.backgroundColor="#FF6666";
			document.getElementById("lastname").value="";
			f2 = 1;
			failed = true;
			warning = warning + "\n  Last Name: 1 to 30 chars - cannot be all spaces!";
		}
		else
		{
			document.getElementById("lastname").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// email
	if (email=="") 
	{
		document.getElementById("email").style.backgroundColor="#FF6666";
		f3 = 1;
		failed = true;
		warning = warning + "\n  Email";
	}
	else
	{
		dot = email.indexOf(".");
		space = email.indexOf(" ");
		atSign = email.indexOf("@");
		if(dot == -1 || space != -1 || atSign == -1 || email.length < 6 || email.length > 50)
		{
			document.getElementById("email").style.backgroundColor="#FF6666";
			document.getElementById("email").value="";
			f3 = 1;
			failed = true;
			warning = warning + "\n  Email: 6 to 50 chars - valid email only!";
		}
		else
		{
			document.getElementById("email").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// password
	if (pword=="") 
	{
		document.getElementById("pword").style.backgroundColor="#FF6666";
		f4 = 1;
		failed = true;
		warning = warning + "\n  Password";
	}
	else
	{
		space = password.indexOf(" ");
		if(space != -1 || pword.length < 4 || pword.length > 10)
		{
			document.getElementById("pword").style.backgroundColor="#FF6666";
			document.getElementById("reenter").style.backgroundColor="#FF6666";
			document.getElementById("pword").value="";
			document.getElementById("reenter").value="";
			f4 = 1;
			failed = true;
			warning = warning + "\n  Password: 4 to 10 chars - no spaces!";
		}
		else
		{
			document.getElementById("pword").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// Re-enter password
	if (reenter=="") 
	{
		document.getElementById("reenter").style.backgroundColor="#FF6666";
		f5 = 1;
		failed = true;
		warning = warning + "\n  Re-enter Password";
	}
	else
	{
		if (f4 == 0) { document.getElementById("reenter").style.backgroundColor="rgb(19,125,193)"; }
	}

	// Do passwords match?
	if (pword != reenter)
	{
		document.getElementById("pword").style.backgroundColor="#FF6666";
		document.getElementById("reenter").style.backgroundColor="#FF6666";
		document.getElementById("pword").value="";
		document.getElementById("reenter").value="";
		f4 = 1;
		failed = true;
		warning = warning + "\n  Passwords must match!";
	}
	
	// lineone
	if (lineone=="") 
	{
		document.getElementById("lineone").style.backgroundColor="#FF6666";
		f6 = 1;
		failed = true;
		warning = warning + "\n  Line One";
	}
	
	else
	{
		if(lineone.trim().length < 1 || lineone.trim().length > 30)
		{
			document.getElementById("lineone").style.backgroundColor="#FF6666";
			document.getElementById("lineone").value="";
			f6 = 1;
			failed = true;
			warning = warning + "\n  Line One: 1 to 30 chars - cannot be all spaces!";
		}
		else
		{
			document.getElementById("lineone").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// city
	if (city=="") 
	{
		document.getElementById("city").style.backgroundColor="#FF6666";
		f7 = 1;
		failed = true;
		warning = warning + "\n  City";
	}
	
	else
	{
		if(city.trim().length < 1 || city.trim().length > 30)
		{
			document.getElementById("city").style.backgroundColor="#FF6666";
			document.getElementById("city").value="";
			f6 = 1;
			failed = true;
			warning = warning + "\n  City: 1 to 30 chars - cannot be all spaces!";
		}
		else
		{
			document.getElementById("City").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// state
	if (state=="") 
	{
		document.getElementById("state").style.backgroundColor="#FF6666";
		f8 = 1;
		failed = true;
		warning = warning + "\n  State";
	}
	else
	{
		document.getElementById("state").style.backgroundColor="rgb(19,125,193)";
	}
	
	// zip
	if (zip=="") 
	{
		document.getElementById("zip").style.backgroundColor="#FF6666";
		f9 = 1;
		failed = true;
		warning = warning + "\n  Zip";
	}
	
	else
	{
		if(zip.trim().length < 1 || zip.trim().length > 30)
		{
			document.getElementById("zip").style.backgroundColor="#FF6666";
			document.getElementById("zip").value="";
			f9 = 1;
			failed = true;
			warning = warning + "\n  Zip: 1 to 30 chars - cannot be all spaces!";
		}
		else
		{
			document.getElementById("Zip").style.backgroundColor="rgb(19,125,193)";
		}
	}
	
	// phone number
	if (phone=="") 
	{
		document.getElementById("phone").style.backgroundColor="#FF6666";
		fa = 1;
		failed = true;
		warning = warning + "\n  Phone";
	}
	
	else
	{
		if(phone.trim().length < 1 || phone.trim().length > 10)
		{
			document.getElementById("phone").style.backgroundColor="#FF6666";
			document.getElementById("phone").value="";
			fa = 1;
			failed = true;
			warning = warning + "\n  Phone: 1 to 10 numbers - no parentheses, dashes, or spaces.";
		}
		else
		{
			document.getElementById("phone").style.backgroundColor="rgb(19,125,193)";
		}
	}

	// agegroup
	if (agegroup=="") 
	{
		document.getElementById("agegroup").style.backgroundColor="#FF6666";
		f8 = 1;
		failed = true;
		warning = warning + "\n  Age Group";
	}
	else
	{
		document.getElementById("agegroup").style.backgroundColor="rgb(19,125,193)";
	}


	
	// Check to see if anything failed.
	if (failed)
	{
		// Display message on screen.
		alert(warning);
		
		// Check floating focus flags.
		if (fa==1) { document.getElementById("phone").focus(); }
		if (f9==1) { document.getElementById("zip").focus(); }
		if (f8==1) { document.getElementById("state").focus(); }
		if (f7==1) { document.getElementById("city").focus(); }
		if (f6==1) { document.getElementById("lineone").focus(); }
		if (f5==1) { document.getElementById("reenter").focus(); }
		if (f4==1) { document.getElementById("password").focus(); }
		if (f3==1) { document.getElementById("email").focus(); }
		if (f2==1) { document.getElementById("lastname").focus(); }
		if (f1==1) { document.getElementById("firstname").focus(); }
		
		// return control to HTML
		return false;
	}
	
	//If we get to here, we pass validation. Yay!
	return true;	
}
	
	