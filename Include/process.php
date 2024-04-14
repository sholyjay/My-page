<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["first_name"];
    $name = $_POST["surname"];
    $name = $_POST["last_name"];
    $email = $_POST["email"];
    $email = $_POST["subject"];
    $message = $_POST["message"];
    
    // Process the form data (e.g., send email, save to database)
    
    // For demonstration purposes, you can simply print the data:
    echo "first_name:" . $name . "<br>";
    echo "surname:" . $name . "<br>";
    echo "last_name:" . $name . "<br>";
    echo "email:" . $email . "<br>";
    echo "subject:" . $subject . "<br>";
    echo "Message:" . $message . "<br>";
}
?>
