<?php

// Get the user's name from the form submission
$name = $_POST['name'];

// Validate the input (optional, but recommended for security)
// You can add checks here to ensure the name is not empty or contains malicious characters

// Create a greeting message
$message = "Hello, " . htmlspecialchars($name) . "!";

// Display the greeting message
echo "<h1>$message</h1>";

?>
