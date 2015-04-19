<?php

	//DELETE PICTURE, DELETE ROW IN TABLE, AND LOGOUT

		//session_name();
		session_start();
	
		$id = $_GET["id"];
		
		// MySQL Info
		$servername = 'localhost';
		$username = 'talkshopconnect';
		$password = 'Asu275833';
		$db = 'talkshop';

				
		// Connection
		$connection = mysqli_connect($servername, $username, $password, $db);
	
		$query = 'SELECT * FROM speakers WHERE id = "' . $id .  '"';
		
		$result = mysqli_query($connection, $query);
		
		if (mysqli_num_rows($result) == 0)
		{
			//Delete the profile picture
			$query = 'SELECT * FROM teachers WHERE id = "' . $id .  '"';
			$result = $connection->query($query);
			
			while($row = $result->fetch_assoc())
			{
				$picture = "teacherUploads/" . $row["profilePic"];
			}
		
			unlink($picture);	
			
			//Delete row in teachers table
			$query = 'DELETE FROM teachers WHERE id = "' . $id . '"';

		}
		else
		{
			//Delete the profile picture
			$query = 'SELECT * FROM speakers WHERE id = "' . $id .  '"';
			$result = $connection->query($query);
			
			while($row = $result->fetch_assoc())
			{
				$picture = "speakerUploads/" . $row["profilePic"];
			}
		
			unlink($picture);

			//Delete row in speakers table
			$query = 'DELETE FROM speakers WHERE id = "' . $id . '"';
		}
		
		if ($connection->query($query) == true)
		{
			//LOGOUT
			session_unset();
			session_destroy();
			header('Location: index.php');
		}
?>