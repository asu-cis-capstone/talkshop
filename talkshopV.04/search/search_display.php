

<!--<body>
	<form method="post" action="search_display.php?go" id="searchform">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>-->
<?php

if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
$name=$_POST['name'];

//connect to the database
$db=mysql_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error()); 

//-select the database to use
$mydb=mysql_select_db("talkshop");


//-query the database table
$sql="SELECT fname, lname, city, state, zip FROM speakers WHERE fname LIKE '%" . $name . "%' 
OR lname LIKE '%" . $name ."%' 
OR city LIKE '%" . $name . "%' 
OR state LIKE '%" . $name . "%'
OR zip LIKE '%" . $name . "%'
";

//-run the query against the mysql query function
$result=mysql_query($sql);

//-create while loop and loop through result set
while($row=mysql_fetch_array($result)){

	$FirstName =$row['fname'];
	$LastName=$row['lname'];
	$City=$row['city'];
	$State=$row['state'];
	$Zip=$row['zip'];
	$ID=$row['id'];
		
//-display the result of the array

echo "<ul>\n"; 
echo "<li>" . "<a href=\"search_display.php?id=$id\">"  .$FirstName . " " . $LastName . " " . $City . " " . $State. " " . $Zip . "</a></li>\n";
echo "</ul>";
}
}
else{
echo "<p>Please enter a search query</p>";
}
}
}
?>
</body>
</html>
