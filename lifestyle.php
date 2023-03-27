<?php
// Query the database for the lifestyle content
$lifestyle = $db->query("SELECT * FROM lifestyle")->fetch_all(MYSQLI_ASSOC);

// Display the lifestyle content
foreach ($lifestyle as $item) {
    echo "<h2>{$item['title']}</h2>";
    echo "<p>{$item['content']}</p>";
}
?>
