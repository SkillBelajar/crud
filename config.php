<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'crud';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
	die('Failed Connect ! ' . $conn->connect_error);
}
// else
// {
// 	echo "YES";
// }