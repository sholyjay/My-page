<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Default username for WampServer
$password = ""; // Default password for WampServer
$dbname = "contact_us"; // Name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data to insert
$first_name = "Sola";
$surname = "Olakanmi"
$last_name = "Alade"
$Email = "olakanmisola042@gmail.com";
$Subject = "Sholyjay is my name"
$Message = "Hello, world!";

// SQL query to insert data into table
$sql = "INSERT INTO contacts (first_name, surname, last_name, email, subject, message, datetime) VALUES ('$first_name', '$surname', '$last_name', '$email', '$subject', '$message', NOW())";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
