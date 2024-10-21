<?php
// Read the JSON file
$jsonData = file_get_contents('data/users.json');

// Decode the JSON data into an associative array
$users = json_decode($jsonData, true);

// Display each user on a new line
foreach ($users as $username => $details) {
    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Password: " . htmlspecialchars($details['password']) . "<br><br>";
}
?>
