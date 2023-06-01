<?php
require 'database.php';
header('Location: home.html');
// Validate the username and password (you can add your own validation logic here)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Prepare and execute the SQL query
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Check if the query returns a row
  //  if ($stmt->rowCount() > 0) {
        // Authentication successful
        // Redirect the user to the home page or any other page upon successful login
        header('Location: home.html');
        exit();
   // } else {
        // Authentication failed, display an error message
        echo 'Invalid username or password';
   // }
}
?>
