<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Search</title>
		<style type="text/css" media="screen">
		ul li{
		  list-style-type:none;
		}
		</style>
</head>

<body>
	<form method="post" action="search.php?go" id="searchform">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>
<?php

if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){

}
}
else{
echo "<p>Please enter a search query</p>";
}
}

?>
</body>
</html>
