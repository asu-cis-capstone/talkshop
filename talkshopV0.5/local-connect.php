<?php

$host = 'localhost'; 
$user = 'root';
$pw = '';
$db = 'talkshop';

$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect to the database! Please check the local connect file and try again.');

?>