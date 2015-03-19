<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Search</title>
</head>

<body>
		<form method="post" action="search.php?go" id="searchform">
			<input type="text" name="name">
			<input type="submit" name="submit" value="Search">
		</form>
		
<?php
	if(isset($_POST['submit'])){
		//do something here in code
	}
	else{
		echo "<p>Please enter a search query</p>";
	}

?>
</body>
</html>
