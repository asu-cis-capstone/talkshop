<?php

$host = 'localhost'; 
$user = 'root';
$pw = '';
$db = 'talkshop';

$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect to the database. Please Check the local connect file and try again.');

?>