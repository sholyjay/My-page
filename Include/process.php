<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $email = $_POST["subject"];
    $message = $_POST["message"];
    
    // Process the form data (e.g., send email, save to database)
    
    // For demonstration purposes, you can simply print the data:
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Email: " . $subject . "<br>";
    echo "Message: " . $message . "<br>";
}
?>
