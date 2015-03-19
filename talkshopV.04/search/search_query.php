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
$name=$_POST['name'];

//connect to the database
$db=mysql_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error()); 

//-select the database to use
$mydb=mysql_select_db("talkshop_ivettetest");

//-query the database table
$sql="SELECT UUID, FName, Lname, city, state, zip FROM users WHERE FName LIKE '%" . $name . "%' OR Lname LIKE '%" . $name ."%'";


}
else{
echo "<p>Please enter a search query</p>";
}
}
}
?>
</body>
</html>
