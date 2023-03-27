<?php
$servername = "localhost";
$dbname='users';
$username = "olajumoke";
$password = "helpme";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
 die("Connection failed: " . $db->connect_error);
}
echo "success";
?>