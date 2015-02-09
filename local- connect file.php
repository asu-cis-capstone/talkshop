<?php

$host = 'localhost'; 
$user = 'root';
$pw = '';
$dv = 'talkshop';

$connect = mysqli_connect($host, $user, $pw, $dv) or die('Unable to connect to the database, Please Check the local connect file and try again');

session_name('Teachers');
 
session_start('Teachers'); 

?>