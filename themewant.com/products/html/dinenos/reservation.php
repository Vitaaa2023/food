<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$checkIn = date("Y-m-d H:i:s"); // Current timestamp

// Insert the data into the database
$sql = "INSERT INTO Guests (check_in, name, email, phone_number, message) VALUES ('$checkIn', '$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Check-in successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
