<?php

$dbhost = 'localhost';
$dbuser = '';
$dbpass = '';
$dbname = 'restaurant';

// mysqli
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
