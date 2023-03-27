<?php
// Get the story ID from the URL parameter
$story_id = $_GET['story_id'];

// Query the database for the story with the specified ID
$story = $db->query("SELECT * FROM stories WHERE id = $story_id")->fetch_assoc();

// Display the story title and content
echo "<h1>{$story['storytitle']}</h1>";
echo "<p>{$story['storydescription']}</p>";
?>
