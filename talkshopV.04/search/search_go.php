<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Search</title>
</head>

<body>	
	<form method="post" action="search_go.php" id="searchform">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>
<?php
if(isset($_POST['submit'])){
if(isset($_GET['go'])){

else{
echo "<p>Please enter a search query</p>";
}
}
}
?>
</body>
</html>
