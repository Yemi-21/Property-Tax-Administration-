<?php
// Database connection settings
$host = 'localhost';
$dbname = 'Property tax administration DB';
$username_db = 'DESKTOP-ME5MGS7\user';

// Create a new PDO connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db);
?>

