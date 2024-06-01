<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "miniproject"; // Enter the name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the signin form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to retrieve user record with the provided username
$sql = "SELECT * FROM signup WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: index.html");
        exit();
} else {
    echo '<script>alert("Username not found")</script>'; 
}

$conn->close();
?>
