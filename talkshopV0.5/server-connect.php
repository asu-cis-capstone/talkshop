<?php
$host = 'localhost'; 
$user = '(blank for now )';
$pw = '(blank for now)';
$db = 'TalkShop';


$dbc = mysqli_connect($host, $user, $pw, $db) or die('unable to connect: (SERVER)');

session_name('TalkShop');
session_start('TalkShop');


?>